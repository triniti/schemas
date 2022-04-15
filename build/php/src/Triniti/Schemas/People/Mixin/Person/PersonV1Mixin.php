<?php
// @link http://schemas.triniti.io/json-schema/triniti/people/mixin/person/1-0-1.json#
namespace Triniti\Schemas\People\Mixin\Person;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\People\PersonId;

final class PersonV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:people:mixin:person:1-0-1');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->withDefault(function() { return PersonId::generate(); })
                ->className(PersonId::class)
                ->overridable(true)
                ->build(),
            Fb::create('display_title', T\StringType::create())
                ->build(),
            /*
             * A reference to the image asset to use for widgets, sharing, seo.
             */
            Fb::create('image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * A short bio of the person. It should typically not have HTML as it is
             * used in metadata, feeds, SERP and social.
             */
            Fb::create('bio', T\TextType::create())
                ->build(),
            /*
             * Indicates where the bio data originated from, e.g. imdb, freebase, custom.
             */
            Fb::create('bio_source', T\StringType::create())
                ->format(Format::SLUG())
                ->build(),
            Fb::create('imdb_url', T\TextType::create())
                ->format(Format::URL())
                ->build(),
            Fb::create('twitter_username', T\StringType::create())
                ->pattern('^\w{1,15}$')
                ->build(),
            Fb::create('is_celebrity', T\BooleanType::create())
                ->build(),
        ];
    }
}
