<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/link-teaser/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\LinkTeaser;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait LinkTeaserV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => $this->fget('_id'),
            'link_url' => $this->fget('link_url'),
        ];
    }
}
