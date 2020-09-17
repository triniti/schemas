<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/person/1-0-0.json#
namespace Triniti\Schemas\People\Mixin\Person;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait PersonV1Mixin
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'slug' => $this->get('slug'),
            'twitter_username' => $this->get('twitter_username'),
        ];
    }
}
