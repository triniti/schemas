<?php
// @link http://schemas.triniti.io/json-schema/triniti/common/mixin/seo/1-0-0.json#
namespace Triniti\Schemas\Common\Mixin\Seo;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Gdbots\Schemas\Ncr\NodeRef;

final class SeoV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:common:mixin:seo:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('seo_title', T\StringType::create())
                ->build(),
            /*
             * A reference to the image asset to use for SEO instead of
             * the usual image_ref.
             */
            Fb::create('seo_image_ref', T\IdentifierType::create())
                ->className(NodeRef::class)
                ->build(),
            /*
             * Allows customization of the publish date for SEO purposes. For example
             * if something meaningful within an article is updated, adjust this date
             * instead of the actual publish date.
             */
            Fb::create('seo_pubilshed_at', T\DateTimeType::create())
                ->build(),
            Fb::create('meta_description', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            Fb::create('meta_keywords', T\StringType::create())
                ->asASet()
                ->build(),
            /*
             * Unlisted content will not show up in any search results
             * but can still be viewed if you know the URL.
             */
            Fb::create('is_unlisted', T\BooleanType::create())
                ->build(),
        ];
    }
}
