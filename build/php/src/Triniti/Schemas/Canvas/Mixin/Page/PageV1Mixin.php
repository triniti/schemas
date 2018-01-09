<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/page/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\Page;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class PageV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:page:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * A description of the page (usually a few sentences). It should typically
             * not have HTML as it is used in metadata, feeds, SERP and social.
             */
            Fb::create('description', T\TextType::create())
                ->maxLength(5000)
                ->build(),
            /*
             * Determines if AMP (Accelerated Mobile Pages) should be enabled for this page.
             */
            Fb::create('amp_enabled', T\BooleanType::create())
                ->withDefault(true)
                ->build(),
        ];
    }
}
