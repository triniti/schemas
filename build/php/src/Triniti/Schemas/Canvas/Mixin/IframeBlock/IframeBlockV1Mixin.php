<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/iframe-block/1-0-1.json#
namespace Triniti\Schemas\Canvas\Mixin\IframeBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait IframeBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->get('etag'),
            'src' => $this->get('src'),
            'width' => $this->get('width'),
            'height' => $this->get('height'),
            'align' => $this->get('align'),
        ];
    }
}
