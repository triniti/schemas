<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/video-asset/1-0-1.json#
namespace Triniti\Schemas\Dam\Mixin\VideoAsset;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait VideoAssetV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return ['_id' => (string)$this->fget('_id')];
    }
}
