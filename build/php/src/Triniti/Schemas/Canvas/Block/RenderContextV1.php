<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/block/render-context/1-0-0.json#
namespace Triniti\Schemas\Canvas\Block;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\MessageRef;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;

final class RenderContextV1 extends AbstractMessage implements
    RenderContext
{

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:triniti:canvas:block:render-context:1-0-0', __CLASS__,
            [
                /*
                 * The message (e.g. article) containing the blocks that are
                 * being rendered. This is used by some block renderers when
                 * it needs data from the container or to generate urls.
                 */
                Fb::create('container', T\MessageType::create())
                    ->build(),
                /*
                 * The platform the blocks are being rendered into, e.g.
                 * web, amp, apple-news, facebook-instant-articles.
                 */
                Fb::create('platform', T\StringType::create())
                    ->format(Format::SLUG())
                    ->withDefault("web")
                    ->build(),
                Fb::create('device_view', T\StringType::create())
                    ->format(Format::SLUG())
                    ->build(),
                /*
                 * Refers to the location on the screen or application that
                 * the blocks are being rendered into, e.g. "article-detail",
                 * "blogroll", "modal", "jumbotron". Renderers can use this
                 * to customize the output.
                 */
                Fb::create('section', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
            ]
        );
    }

    /**
     * @param string $tag
     * @return MessageRef
     */
    public function generateMessageRef($tag = null)
    {
        return new MessageRef(static::schema()->getCurie(), $this->generateEtag(), $tag);
    }
    
    /**
     * @return array
     */
    public function getUriTemplateVars()
    {
        return [];
    }
}
