<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/video-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\VideoBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait VideoBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->get('etag'),
            'node_ref' => (string)$this->get('node_ref'),
            'autoplay' => $this->get('autoplay'),
            'muted' => $this->get('muted'),
            'start_at' => $this->get('start_at'),
            'show_more_videos' => $this->get('show_more_videos'),
        ];
    }
}
