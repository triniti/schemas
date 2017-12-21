<?php

namespace Triniti\Schemas\Canvas\Mixin\Block;

use Gdbots\Pbj\MessageRef;
use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait BlockV1Trait
{
    /**
     * @param string $tag
     * @return MessageRef
     */
    public function generateMessageRef($tag = null)
    {
        return new MessageRef(static::schema()->getCurie(), $this->get('etag') ?: $this->generateEtag(['etag']), $tag);
    }
}
