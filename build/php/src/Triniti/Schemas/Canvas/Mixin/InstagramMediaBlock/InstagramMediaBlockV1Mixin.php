<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/instagram-media-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\InstagramMediaBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait InstagramMediaBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->get('etag'),
            'id' => $this->get('id'),
            'hidecaption' => $this->get('hidecaption'),
        ];
    }
}
