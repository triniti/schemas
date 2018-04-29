<?php
// @link http://schemas.triniti.io/json-schema/triniti/taxonomy/mixin/suggest-hashtags-request/1-0-0.json#
namespace Triniti\Schemas\Taxonomy\Mixin\SuggestHashtagsRequest;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class SuggestHashtagsRequestV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:taxonomy:mixin:suggest-hashtags-request:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('prefix', T\StringType::create())
                ->build(),
            /*
             * The number of results to return.
             */
            Fb::create('count', T\TinyIntType::create())
                ->withDefault(25)
                ->build(),
        ];
    }
}
