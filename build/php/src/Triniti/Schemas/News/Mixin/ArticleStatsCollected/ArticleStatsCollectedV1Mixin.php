<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/article-stats-collected/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\ArticleStatsCollected;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class ArticleStatsCollectedV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:article-stats-collected:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node_ref', T\IdentifierType::create())
                ->required()
                ->className(NodeRef::class)
                ->build(),
            /*
             * A map of stat values that should replace any existing collected values.
             */
            Fb::create('stats', T\IntType::create())
                ->asAMap()
                ->build(),
        ];
    }
}
