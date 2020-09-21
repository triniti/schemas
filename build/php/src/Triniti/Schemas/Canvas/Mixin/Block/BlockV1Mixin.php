<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/block/1-0-1.json#
namespace Triniti\Schemas\Canvas\Mixin\Block;

use Gdbots\Pbj\Schema;
use Gdbots\Pbj\WellKnown\MessageRef;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait BlockV1Mixin
{
    public function generateMessageRef(?string $tag = null): MessageRef
    {
        return new MessageRef(static::schema()->getCurie(), $this->fget('etag') ?: $this->generateEtag(['etag']), $tag);
    }
}
