<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/tiktok-embed-block/1-0-1.json#
namespace Triniti\Schemas\Canvas\Mixin\TiktokEmbedBlock;

use Gdbots\Pbj\Schema;

/**
 * @method static Schema schema
 * @method mixed fget($fieldName, $default = null)
 */
trait TiktokEmbedBlockV1Mixin
{
    public function getUriTemplateVars(): array
    {
        return [
            'etag' => $this->fget('etag'),
            'tiktok_id' => $this->fget('tiktok_id'),
            'user_name' => $this->fget('user_name'),
        ];
    }
}
