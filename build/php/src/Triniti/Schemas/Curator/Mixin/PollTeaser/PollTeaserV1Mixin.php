<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/poll-teaser/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\PollTeaser;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait PollTeaserV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => $this->fget('_id'),
            'target_ref' => $this->fget('target_ref'),
        ];
    }
}
