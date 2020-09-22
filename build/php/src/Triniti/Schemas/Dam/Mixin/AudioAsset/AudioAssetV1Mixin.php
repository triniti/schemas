<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/audio-asset/1-0-1.json#
namespace Triniti\Schemas\Dam\Mixin\AudioAsset;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait AudioAssetV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return ['_id' => $this->fget('_id')];
    }
}
