<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/tiktok-embed-block/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\TiktokEmbedBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait TiktokEmbedBlockV1Mixin
{
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [
            'etag' => $this->get('etag'),
            'tiktok_id' => $this->get('tiktok_id'),
        ];
    }
}
