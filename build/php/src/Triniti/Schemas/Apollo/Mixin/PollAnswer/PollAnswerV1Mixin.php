<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll-answer/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\PollAnswer;

use Gdbots\Pbj\Schema;
use Gdbots\Pbj\WellKnown\MessageRef;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait PollAnswerV1Mixin
{
    public function generateMessageRef(?string $tag = null): MessageRef
    {
        return new MessageRef(static::schema()->getCurie(), $this->get('_id'), $tag);
    }
    
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => (string)$this->get('_id'),
            'url' => $this->get('url'),
        ];
    }
}
