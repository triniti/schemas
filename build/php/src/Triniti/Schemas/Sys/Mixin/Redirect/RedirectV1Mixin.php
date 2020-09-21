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
            '_id' => (string)$this->fget('_id'),
            'uri' => $this->fget('title'),
            'redirect_to' => $this->fget('redirect_to'),
            'is_permanent' => $this->fget('is_permanent'),
            'is_vanity' => $this->fget('is_vanity'),
        ];
    }
}
