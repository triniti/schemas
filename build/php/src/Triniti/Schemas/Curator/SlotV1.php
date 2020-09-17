<?php
declare(strict_types=1);

// @link http://schemas.triniti.io/json-schema/triniti/curator/slot/1-0-0.json#
namespace Triniti\Schemas\Curator;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\MessageRef;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Curator\Enum\SlotRendering;

final class SlotV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:triniti:curator::slot:1-0-0';
    const SCHEMA_CURIE = 'triniti:curator::slot';
    const SCHEMA_CURIE_MAJOR = 'triniti:curator::slot:v1';
    const MIXINS = [];

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                /*
                 * The name of the location where the widget should render,
                 * e.g. "sidebar", "html-head" or "jumbotron-top".
                 */
                Fb::create('name', T\StringType::create())
                    ->format(Format::SLUG())
                    ->build(),
                /*
                 * A reference to the widget this slot will render.
                 */
                Fb::create('widget_ref', T\IdentifierType::create())
                    ->className(NodeRef::class)
                    ->build(),
                Fb::create('rendering', T\StringEnumType::create())
                    ->withDefault(SlotRendering::LAZY())
                    ->className(SlotRendering::class)
                    ->build(),
            ],
            self::MIXINS
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
