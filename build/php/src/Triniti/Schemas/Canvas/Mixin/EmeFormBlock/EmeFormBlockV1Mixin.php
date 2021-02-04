<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/eme-form-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\EmeFormBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait EmeFormBlockV1Mixin
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->fget('etag'),
            'form_ref' => $this->fget('form_ref'),
        ];
    }
}
