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
            '_id' => (string)$this->fget('_id'),
            'show_captions' => $this->fget('show_captions'),
            'show_controls' => $this->fget('show_controls'),
            'show_position_indicators' => $this->fget('show_position_indicators'),
        ];
    }
}
