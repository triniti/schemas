<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/boost/mixin/sponsor/1-0-0.json#
namespace Triniti\Schemas\Boost\Mixin\Sponsor;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait SponsorV1Mixin
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            '_id' => (string)$this->get('_id'),
            'slug' => $this->get('slug'),
        ];
    }
}
