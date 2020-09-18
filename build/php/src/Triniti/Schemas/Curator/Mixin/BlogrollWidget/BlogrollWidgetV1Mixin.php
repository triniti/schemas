<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/blogroll-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\BlogrollWidget;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait BlogrollWidgetV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => (string)$this->get('_id'),
            'promotion_slot_prefix' => $this->get('promotion_slot_prefix'),
        ];
    }
}
