<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/redirect/1-0-0.json#
namespace Triniti\Schemas\Sys\Mixin\Redirect;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait RedirectV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            '_id' => (string)$this->get('_id'),
            'uri' => $this->get('title'),
            'redirect_to' => $this->get('redirect_to'),
            'is_permanent' => $this->get('is_permanent'),
            'is_vanity' => $this->get('is_vanity'),
        ];
    }
}
