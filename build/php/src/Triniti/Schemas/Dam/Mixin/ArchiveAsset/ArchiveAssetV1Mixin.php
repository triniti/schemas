<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/dam/mixin/archive-asset/1-0-0.json#
namespace Triniti\Schemas\Dam\Mixin\ArchiveAsset;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait ArchiveAssetV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return ['_id' => (string)$this->get('_id')];
    }
}
