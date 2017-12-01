<?php

namespace Triniti\Schemas\Pages\Mixin\Page;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed get($fieldName, $default = null)
 */
trait PageV1Trait
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
      return [
        'page_id' => (string)$this->get('_id'),
        'slug' => $this->get('slug')
      ];
    }
}
