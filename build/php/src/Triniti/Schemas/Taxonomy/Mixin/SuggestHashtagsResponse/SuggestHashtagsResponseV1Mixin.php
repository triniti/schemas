<?php
// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/suggest-hashtags-response/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\SuggestHashtagsResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class SuggestHashtagsResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:taxonomy:mixin:suggest-hashtags-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * How long in milliseconds it took to run the query.
             */
            Fb::create('time_taken', T\MediumIntType::create())
                ->build(),
            Fb::create('hashtags', T\StringType::create())
                ->asAList()
                ->format(Format::HASHTAG())
                ->build(),
        ];
    }
}
