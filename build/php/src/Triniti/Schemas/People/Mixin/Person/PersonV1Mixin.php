<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/person/1-0-1.json#
namespace Triniti\Schemas\People\Mixin\Person;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait PersonV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => $this->fget('_id'),
            'slug' => $this->fget('slug'),
            'twitter_username' => $this->fget('twitter_username'),
        ];
    }
}
