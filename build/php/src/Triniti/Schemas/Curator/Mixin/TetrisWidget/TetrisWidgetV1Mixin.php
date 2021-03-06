<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/tetris-widget/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\TetrisWidget;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait TetrisWidgetV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => $this->fget('_id'),
            'layout' => $this->fget('layout'),
        ];
    }
}
