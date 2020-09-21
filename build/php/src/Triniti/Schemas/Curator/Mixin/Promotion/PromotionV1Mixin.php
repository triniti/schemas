<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/promotion/1-0-1.json#
namespace Triniti\Schemas\Curator\Mixin\Promotion;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait PromotionV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => (string)$this->fget('_id'),
            'slot' => (string)$this->fget('slot'),
        ];
    }
}
