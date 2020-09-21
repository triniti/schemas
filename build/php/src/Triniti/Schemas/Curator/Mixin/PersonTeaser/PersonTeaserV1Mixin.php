<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/person-teaser/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\PersonTeaser;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait PersonTeaserV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => (string)$this->fget('_id'),
            'target_ref' => (string)$this->fget('target_ref'),
        ];
    }
}
