<?php

namespace Triniti\Schemas\Canvas\Mixin\TiktokEmbedBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait TiktokEmbedBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'tiktok_id' => $this->get('tiktok_id'),
        ];
    }
}
