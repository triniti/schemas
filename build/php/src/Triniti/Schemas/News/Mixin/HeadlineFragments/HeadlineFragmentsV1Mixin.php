<?php
// @link http://schemas.triniti.io/json-schema/triniti/news/mixin/headline-fragments/1-0-0.json#
namespace Triniti\Schemas\News\Mixin\HeadlineFragments;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class HeadlineFragmentsV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:news:mixin:headline-fragments:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * The "hf" field is an array of strings, aka headline fragments, that
             * are written for dramatic effect. These are good for visual display
             * but don't generally read well and are not great for SEO. They're
             * basically microbroetry.
             */
            Fb::create('hf', T\StringType::create())
                ->asAList()
                ->build(),
            /*
             * This array corresponds to the "hf" field and is used to control
             * the size of the fragment h1...h6.
             */
            Fb::create('hf_sizes', T\TinyIntType::create())
                ->asAList()
                ->max(6)
                ->build(),
            /*
             * This array corresponds to the "hf" field. Any visual treatments that
             * need to be applied would have a value in the same list position in
             * this field. hf and hf_styles fields should always be the same length.
             * E.g. "none", "upper", "blink", "strike".
             */
            Fb::create('hf_styles', T\StringType::create())
                ->asAList()
                ->format(Format::SLUG())
                ->build(),
        ];
    }
}
