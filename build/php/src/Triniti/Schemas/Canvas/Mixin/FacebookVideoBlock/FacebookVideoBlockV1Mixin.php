<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/facebook-video-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\FacebookVideoBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait FacebookVideoBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->fget('etag'),
            'href' => $this->fget('href'),
            'autoplay' => $this->fget('autoplay'),
            'show_text' => $this->fget('show_text'),
            'show_captions' => $this->fget('show_captions'),
        ];
    }
}
