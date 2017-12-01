<?php

namespace Triniti\Schemas\Videos\Mixin\Video;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait VideoV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
      return [
        'video_id' => (string)$this->get('_id'),
        'slug' => $this->get('slug')
      ];
    }
}
