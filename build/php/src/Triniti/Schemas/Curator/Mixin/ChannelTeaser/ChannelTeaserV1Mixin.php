<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/channel-teaser/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\ChannelTeaser;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait ChannelTeaserV1Mixin
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'target_ref' => (string)$this->get('target_ref'),
        ];
    }
}
