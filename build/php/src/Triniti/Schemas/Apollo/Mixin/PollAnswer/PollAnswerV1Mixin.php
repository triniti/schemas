<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll-answer/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\PollAnswer;

use Gdbots\Pbj\MessageRef;
use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait PollAnswerV1Mixin
{
    /**
     * @param string $tag
     * @return MessageRef
     */
    public function generateMessageRef($tag = null)
    {
        return new MessageRef(static::schema()->getCurie(), $this->get('_id'), $tag);
    }
    
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'url' => $this->get('url'),
        ];
    }
}
