<?php
declare(strict_types=1);

namespace Triniti\Schemas\Sys;

use Gdbots\Pbj\WellKnown\StringIdentifier;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Sys\Mixin\Redirect\RedirectV1Mixin;

/**
 * A redirect id is a URL safe base64 encoded string.
 * The string is case sensitive.
 *
 */
final class RedirectId extends StringIdentifier
{
    /**
     * @return NodeRef
     */
    public function toNodeRef(): NodeRef
    {
        return new NodeRef(RedirectV1Mixin::findOne()->getQName(), $this->toString());
    }

    /**
     * Creates a RedirectId from a URI
     *
     * @param string $uri
     *
     * @return static
     */
    public static function fromUri(string $uri): self
    {
        return self::fromString(self::urlsafeB64Encode($uri));
    }

    /**
     * Decodes a RedirectId back into the URI
     *
     * @return string
     */
    public function toUri(): string
    {
        return self::urlsafeB64Decode($this->string);
    }

    /**
     * @param string $input
     *
     * @return string
     */
    private static function urlsafeB64Decode(string $input): string
    {
        $remainder = strlen($input) % 4;
        if ($remainder) {
            $padlen = 4 - $remainder;
            $input .= str_repeat('=', $padlen);
        }

        return base64_decode(strtr($input, '-_', '+/'));
    }

    /**
     * @param string $input
     *
     * @return string
     */
    private static function urlsafeB64Encode(string $input): string
    {
        return str_replace('=', '', strtr(base64_encode($input), '+/', '-_'));
    }
}
