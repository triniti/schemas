<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/channel/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\Channel;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait ChannelV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => $this->fget('_id'),
            'slug' => $this->fget('slug'),
        ];
    }
}
