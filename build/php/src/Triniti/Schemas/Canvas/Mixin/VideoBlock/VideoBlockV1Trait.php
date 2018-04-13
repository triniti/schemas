<?php

namespace Triniti\Schemas\Canvas\Mixin\VideoBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait VideoBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'node_ref' => (string)$this->get('node_ref'),
            'autoplay' => $this->get('autoplay'),
            'muted' => $this->get('muted'),
            'start_at' => $this->get('start_at'),
            'show_more_videos' => $this->get('show_more_videos'),
        ];
    }
}
