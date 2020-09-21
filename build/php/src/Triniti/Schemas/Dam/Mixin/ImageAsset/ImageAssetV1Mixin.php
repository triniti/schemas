<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/image-asset/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\ImageAsset;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait ImageAssetV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => (string)$this->fget('_id'),
            'width' => $this->fget('width'),
            'height' => $this->fget('height'),
        ];
    }
}
