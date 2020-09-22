<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/showtimes-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\ShowtimesWidget;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait ShowtimesWidgetV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => $this->fget('_id'),
            'show' => $this->fget('show'),
        ];
    }
}
