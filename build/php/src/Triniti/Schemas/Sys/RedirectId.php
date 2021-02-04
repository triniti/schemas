<?php
declare(strict_types=1);

namespace Triniti\Schemas\Sys;

use Gdbots\Pbj\Util\StringUtil;
use Gdbots\Pbj\WellKnown\StringIdentifier;

/**
 * A redirect id is a URL safe base64 encoded string.
 * The string is case sensitive.
 */
final class RedirectId extends StringIdentifier
{
    public static function fromUri(string $uri): self
    {
        return self::fromString(StringUtil::urlsafeB64Encode($uri));
    }

    public function toUri(): string
    {
        return StringUtil::urlsafeB64Decode($this->string);
    }
}
