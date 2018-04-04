<?php
// @link http://schemas.triniti.io/json-schema/triniti/apollo/mixin/poll/1-0-0.json#
namespace Triniti\Schemas\Apollo\Mixin\Poll;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;
use Triniti\Schemas\Apollo\Mixin\PollAnswer\PollAnswer as TrinitiApolloPollAnswer;
use Triniti\Schemas\Apollo\PollId;

final class PollV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:apollo:mixin:poll:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->withDefault(function() { return PollId::generate(); })
                ->className(PollId::class)
                ->overridable(true)
                ->build(),
            /*
             * A reference to the image asset to use for widgets, sharing, seo.
             */
            Fb::create('image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            Fb::create('allow_multiple_responses', T\BooleanType::create())
                ->build(),
            Fb::create('answers', T\MessageType::create())
                ->asAList()
                ->anyOfClassNames([
                    TrinitiApolloPollAnswer::class,
                ])
                ->build(),
        ];
    }
}
