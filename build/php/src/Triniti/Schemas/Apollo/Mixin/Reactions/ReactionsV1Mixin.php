<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/reactions/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\Reactions;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait ReactionsV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => $this->fget('_id'),
        ];
    }
}
