<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/carousel-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\CarouselWidget;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait CarouselWidgetV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => (string)$this->get('_id'),
            'show_captions' => $this->get('show_captions'),
            'show_controls' => $this->get('show_controls'),
            'show_position_indicators' => $this->get('show_position_indicators'),
        ];
    }
}
