<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/document-block/1-0-1.json#
namespace Triniti\Schemas\Canvas\Mixin\DocumentBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait DocumentBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->get('etag'),
            'node_ref' => (string)$this->get('node_ref'),
        ];
    }
}
