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
            'etag' => $this->get('etag'),
            'id' => $this->get('id'),
            'autoplay' => $this->get('autoplay'),
            'loop' => $this->get('loop'),
            'show_byline' => $this->get('show_byline'),
            'show_portrait' => $this->get('show_portrait'),
            'show_title' => $this->get('show_title'),
            'user_id' => $this->get('user_id'),
        ];
    }
}
