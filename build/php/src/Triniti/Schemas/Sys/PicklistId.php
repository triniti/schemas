<?php
declare(strict_types=1);

namespace Triniti\Schemas\Sys;

use Gdbots\Pbj\WellKnown\SlugIdentifier;

/**
 * A picklist id is just a friendly slug identifer.
 * e.g. "credits", "swipes", "countries-iso2"
 *
 */
final class PicklistId extends SlugIdentifier
{
}
