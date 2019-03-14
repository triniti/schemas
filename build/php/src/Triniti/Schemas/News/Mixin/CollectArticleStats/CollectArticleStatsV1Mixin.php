<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/collect-article-stats/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\CollectArticleStats;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class CollectArticleStatsV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:collect-article-stats:1-0-0');
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
             * The name of the services to get the stats from, e.g. adobe, facebook,
             * google, disqus, etc. When not provided you should call all providers.
             */
            Fb::create('providers', T\StringType::create())
                ->asASet()
                ->format(Format::SLUG())
                ->build(),
        ];
    }
}
