<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/widget-render-context/1-0-0.json#
namespace Triniti\Schemas\Curator;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\MessageRef;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;

final class WidgetRenderContextV1 extends AbstractMessage implements
    WidgetRenderContext
{

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:triniti:curator::widget-render-context:1-0-0', __CLASS__,
            [
                /*
                 * The platform the widget is being rendered into, e.g.
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
                 * the widget is being rendered into, e.g. "article-detail",
                 * "sidebar", "modal", "jumbotron". Renderers can use this
                 * to customize the output.
                 */
                Fb::create('section', T\StringType::create())
                    ->pattern('^[\w-]+$')
                    ->build(),
                /*
                 * A map to store config variables that can be used when
                 * rendering widgets, e.g. ad_zone, sponsor.
                 */
                Fb::create('config', T\StringType::create())
                    ->asAMap()
                    ->build(),
                /*
                 * A map to store flags (booleans) that can be used when
                 * rendering widgets. These are different from "config"
                 * as they will always be booleans, e.g. disable_autoplay,
                 * allowfullscreen, dnt (do not track).
                 */
                Fb::create('flags', T\BooleanType::create())
                    ->asAMap()
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
