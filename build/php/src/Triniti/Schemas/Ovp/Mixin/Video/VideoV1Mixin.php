<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/video/1-0-5.json#
namespace Triniti\Schemas\Ovp\Mixin\Video;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait VideoV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => (string)$this->get('_id'),
            'slug' => $this->get('slug'),
            'is_live' => $this->get('is_live'),
            'is_full_episode' => $this->get('is_full_episode'),
            'is_promo' => $this->get('is_promo'),
            'mpm' => $this->get('mpm'),
            'kaltura_entry_id' => $this->get('kaltura_entry_id'),
            'kaltura_partner_id' => $this->get('kaltura_partner_id'),
            'show' => $this->get('show'),
        ];
    }
}
