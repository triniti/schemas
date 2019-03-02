<?php

namespace Triniti\Schemas\Ovp\Mixin\Video;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait VideoV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'slug' => $this->get('slug'),
            'is_live' => $this->get('is_live'),
            'is_full_episode' => $this->get('is_full_episode'),
            'mpm' => $this->get('mpm'),
            'kaltura_entry_id' => $this->get('kaltura_entry_id'),
            'kaltura_partner_id' => $this->get('kaltura_partner_id'),
            'show' => $this->get('show'),
        ];
    }
}
