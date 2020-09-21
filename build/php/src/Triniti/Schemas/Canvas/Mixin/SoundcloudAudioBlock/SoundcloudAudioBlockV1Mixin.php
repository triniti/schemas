<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/soundcloud-audio-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\SoundcloudAudioBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait SoundcloudAudioBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->fget('etag'),
            'track_id' => $this->fget('track_id'),
            'auto_play' => $this->fget('auto_play'),
            'show_comments' => $this->fget('show_comments'),
            'hide_related' => $this->fget('hide_related'),
            'visual' => $this->fget('visual'),
        ];
    }
}
