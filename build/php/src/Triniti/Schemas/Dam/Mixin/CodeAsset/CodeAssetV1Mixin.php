<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/code-asset/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\CodeAsset;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait CodeAssetV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return ['_id' => $this->fget('_id')];
    }
}
