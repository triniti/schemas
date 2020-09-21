<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/audio-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\AudioBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait AudioBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->fget('etag'),
            'node_ref' => (string)$this->fget('node_ref'),
        ];
    }
}
