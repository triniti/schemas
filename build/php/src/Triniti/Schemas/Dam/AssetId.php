<?php
declare(strict_types=1);

namespace Triniti\Schemas\Dam;

use Gdbots\Pbj\Assertion;
use Gdbots\Pbj\Exception\AssertionFailed;
use Gdbots\Pbj\WellKnown\Identifier;
use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Triniti\Schemas\Dam\Mixin\ArchiveAsset\ArchiveAssetV1Mixin;
use Triniti\Schemas\Dam\Mixin\AudioAsset\AudioAssetV1Mixin;
use Triniti\Schemas\Dam\Mixin\CodeAsset\CodeAssetV1Mixin;
use Triniti\Schemas\Dam\Mixin\DocumentAsset\DocumentAssetV1Mixin;
use Triniti\Schemas\Dam\Mixin\ImageAsset\ImageAssetV1Mixin;
use Triniti\Schemas\Dam\Mixin\UnknownAsset\UnknownAssetV1Mixin;
use Triniti\Schemas\Dam\Mixin\VideoAsset\VideoAssetV1Mixin;

/**
 * An asset id is a composite id that contains enough data to easily
 * generate asset paths, urls and distribute assets in storage.
 *
 * AssetId Format:
 *  type_ext_yyyymmdd_uuid
 *
 * Formats:
 *  TYPE: [a-z0-9]{1,12}    generally one of: image, video, document, audio, unknown
 *  DATE: [0-9]{8}          YYYYMMDD, e.g. 20151201
 *  EXT:  [a-z0-9]{1,10}    jpg, gif, mp4, pdf
 *  UUID: [a-z0-9]{32}      v4 or v5 uuid is recommended - no dashes
 *
 * Examples:
 *  image_jpg_20151201_27ca03c7b490460992a78692aca42b10
 *  video_mp4_20151201_27ca03c7b490460992a78692aca42b10
 *  document_pdf_20151201_27ca03c7b490460992a78692aca42b10
 *
 */
final class AssetId implements Identifier
{
    /**
     * Regular expression pattern for matching a valid AssetId string.
     *
     * @constant string
     */
    const VALID_PATTERN = '/^([a-z0-9]{1,12})_([a-z0-9]{1,10})_([0-9]{8})_([a-f0-9]{32})$/';

    /** @var string */
    private $id;

    /** @var string */
    private $type;

    /** @var string */
    private $ext;

    /** @var string */
    private $date;

    /** @var string */
    private $uuid;

    /**
     * @param string $type
     * @param string $ext
     * @param string $date
     * @param string $uuid
     */
    private function __construct(string $type, string $ext, string $date, string $uuid)
    {
        $this->type = $type;
        $this->ext = $ext;
        $this->date = $date;
        $this->uuid = strtolower(str_replace('-', '', $uuid));
        $this->id = sprintf('%s_%s_%s_%s', $type, $ext, $this->date, $this->uuid);
    }

    /**
     * {@inheritdoc}
     * @return static
     *
     * @throws AssertionFailed
     */
    public static function fromString($string): Identifier
    {
        if (!preg_match(self::VALID_PATTERN, $string, $matches)) {
            throw new AssertionFailed(
                sprintf(
                    'AssetId [%s] is invalid.  It must match the pattern [%s].',
                    $string,
                    self::VALID_PATTERN
                ),
                Assertion::INVALID_REGEX,
                null,
                $string
            );
        }

        return new self($matches[1], $matches[2], $matches[3], $matches[4]);
    }

    /**
     * @param string             $type The primary type for this asset. e.g. image, video, audio.
     * @param string             $ext  Extension of the asset.  jpg, gif, mp4, txt, pdf
     * @param \DateTimeInterface $date
     * @param UuidIdentifier     $uuid Uuid for the asset, if not supplied a v4 uuid will be created.
     *
     * @return AssetId
     *
     * @throws AssertionFailed
     */
    public static function create(
        string $type,
        string $ext,
        ?\DateTimeInterface $date = null,
        ?UuidIdentifier $uuid = null
    ): self {
        $date = $date ?: new \DateTimeImmutable('now', new \DateTimeZone('UTC'));
        $uuid = $uuid ?: UuidIdentifier::generate();
        $assetId = new self($type, $ext, $date->format('Ymd'), $uuid->toString());
        if (!preg_match(self::VALID_PATTERN, $assetId->id)) {
            throw new AssertionFailed(
                sprintf(
                    'AssetId [%s] is invalid.  It must match the pattern [%s].',
                    $assetId->id,
                    self::VALID_PATTERN
                ),
                Assertion::INVALID_REGEX,
                null,
                $assetId->id
            );
        }

        return $assetId;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getExt(): string
    {
        return $this->ext;
    }

    /**
     * @param bool $asObject Returns the date as a \DateTimeInterface instead of Ymd string.
     *
     * @return \DateTimeInterface|string
     */
    public function getDate(bool $asObject = false)
    {
        if (true === $asObject) {
            return \DateTimeImmutable::createFromFormat('!Ymd', $this->date, new \DateTimeZone('UTC'));
        }

        return $this->date;
    }

    /**
     * @param bool $asObject Returns the uuid as a UuidIdentifier instead of formatted uuid string (all lowercase, no dashes)
     *
     * @return UuidIdentifier|string
     */
    public function getUuid(bool $asObject = false)
    {
        if (true === $asObject) {
            return UuidIdentifier::fromString($this->uuid);
        }

        return $this->uuid;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return $this->toString();
    }

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        return $this->toString();
    }

    /**
     * {@inheritdoc}
     */
    public function equals(Identifier $other): bool
    {
        return $this == $other;
    }

    /**
     * Returns a path to this asset for the given version/quality.  The version and quality are completely arbitrary
     * and up to the consumer of this class.  Typically your "version" would indicate thumbnail size or format of
     * video, etc. and the quality would clarify it further.
     *
     * For example, for the asset id 'image_jpg_20151201_27ca03c7b490460992a78692aca42b10'
     *  $assetId->toFilePath('250x', 'n')
     * would return:
     *  'image/27/250x/2015/12/01/27ca03c7b490460992a78692aca42b10_n.jpg'
     *
     * @param string $version An identifier for the version, e.g. "o" for original or "250x" for a thumbnail size.
     * @param string $quality If applicable, a quality setting like "n" for normal or "high", "low", etc.
     *
     * @return string
     */
    public function toFilePath(?string $version = null, ?string $quality = null): string
    {
        return sprintf(
            '%s/%s/%s%s/%s/%s/%s%s.%s',
            $this->type, // image, video, document, etc.
            substr($this->uuid, 0, 2),
            null === $version ? '' : $version . '/', // o, 250x, hls, etc.
            substr($this->date, 0, 4), // yyyy
            substr($this->date, 4, 2), // mm
            substr($this->date, 6, 2), // dd
            $this->uuid,
            null === $quality ? '' : '_' . $quality,
            $this->ext
        );
    }
}
