<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/vimeo-video-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\VimeoVideoBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait VimeoVideoBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->fget('etag'),
            'id' => $this->fget('id'),
            'autoplay' => $this->fget('autoplay'),
            'loop' => $this->fget('loop'),
            'show_byline' => $this->fget('show_byline'),
            'show_portrait' => $this->fget('show_portrait'),
            'show_title' => $this->fget('show_title'),
            'user_id' => $this->fget('user_id'),
        ];
    }
}
