<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\Poll;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait PollV1Mixin
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return ['_id' => (string)$this->get('_id')];
    }
}
