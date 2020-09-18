<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/pinterest-pin-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\PinterestPinBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait PinterestPinBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->get('etag'),
            'href' => $this->get('href'),
            'terse' => $this->get('terse'),
            'size' => $this->get('size'),
        ];
    }
}
