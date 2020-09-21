<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/ad-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\AdWidget;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait AdWidgetV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => (string)$this->fget('_id'),
        ];
    }
}
