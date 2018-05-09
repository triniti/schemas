<?php

namespace Triniti\Schemas\Canvas\Mixin\SoundcloudAudioBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait SoundcloudAudioBlockV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'track_id' => $this->get('track_id'),
            'auto_play' => $this->get('auto_play'),
            'show_comments' => $this->get('show_comments'),
            'hide_related' => $this->get('hide_related'),
            'visual' => $this->get('visual'),
        ];
    }
}
