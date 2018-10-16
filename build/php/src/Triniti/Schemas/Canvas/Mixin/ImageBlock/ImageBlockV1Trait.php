<?php

namespace Triniti\Schemas\Canvas\Mixin\ImageBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait ImageBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'node_ref' => (string)$this->get('node_ref'),
            'is_nswf' => $this->get('is_nswf'),
            'url' => $this->get('url'),
            'fallback_src_url' => $this->get('fallback_src_url'),
        ];
    }
}
