<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/asset-teaser/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\AssetTeaser;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait AssetTeaserV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => $this->fget('_id'),
            'target_ref' => $this->fget('target_ref'),
        ];
    }
}
