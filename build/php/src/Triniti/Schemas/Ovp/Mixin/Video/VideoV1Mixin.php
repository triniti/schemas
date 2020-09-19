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
            '_id' => $this->fget('_id'),
            'slug' => $this->fget('slug'),
            'is_live' => $this->fget('is_live'),
            'is_full_episode' => $this->fget('is_full_episode'),
            'is_promo' => $this->fget('is_promo'),
            'mpm' => $this->fget('mpm'),
            'kaltura_entry_id' => $this->fget('kaltura_entry_id'),
            'kaltura_partner_id' => $this->fget('kaltura_partner_id'),
            'show' => $this->fget('show'),
        ];
    }
}
