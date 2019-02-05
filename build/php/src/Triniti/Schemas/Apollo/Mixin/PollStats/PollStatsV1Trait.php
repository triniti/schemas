<?php

namespace Triniti\Schemas\Apollo\Mixin\PollStats;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait PollStatsV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return ['_id' => (string)$this->get('_id')];
    }
}
