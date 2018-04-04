<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/teaserable/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\Teaserable;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class TeaserableV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:teaserable:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * Determines the sequence that this teaserable node will be rendered
             * in lists, search results, etc. It DOES NOT control visibility or
             * publishing. A date was used over an integer (e.g. seq_no) for
             * blog-like, reverse chronological, clarity in sorting.
             */
            Fb::create('order_date', T\DateTimeType::create())
                ->build(),
        ];
    }
}
