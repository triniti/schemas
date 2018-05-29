<?php
// @link http://schemas.triniti.io/json-schema/triniti/boost/mixin/sponsor/1-0-0.json#
namespace Triniti\Schemas\Boost\Mixin\Sponsor;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Boost\SponsorId;

final class SponsorV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:boost:mixin:sponsor:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->withDefault(function() { return SponsorId::generate(); })
                ->className(SponsorId::class)
                ->overridable(true)
                ->build(),
            /*
             * A string containing code that is injected into the application's html head tag.
             */
            Fb::create('permalink_html_head', T\TextType::create())
                ->build(),
            /*
             * A string containing code that is injected into the application typically
             * next to/near the title of the content. It will be wrapped in a div with
             * the id and slug of the sponsor.
             */
            Fb::create('permalink_badge', T\TextType::create())
                ->build(),
            /*
             * See description for "permalink_badge". This is very similar but in this
             * case the page is rendering many pieces of content, e.g. blogroll.
             */
            Fb::create('timeline_badge', T\TextType::create())
                ->build(),
        ];
    }
}
