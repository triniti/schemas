<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll-stats/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\PollStats;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait PollStatsV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return ['_id' => (string)$this->fget('_id')];
    }
}
