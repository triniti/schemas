<?php
declare(strict_types=1);

namespace Triniti\Schemas\Sys;

use Gdbots\Pbj\WellKnown\SlugIdentifier;

/**
 * A flagset id is just a friendly slug identifer.
 * e.g. "prod-web", "prod-web-videos"
 *
 */
final class FlagsetId extends SlugIdentifier
{
}
