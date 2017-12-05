<?php
// @link http://schemas.triniti.io/json-schema/triniti/canvas/mixin/get-page-response/1-0-0.json#
namespace Triniti\Schemas\Canvas\Mixin\GetPageResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Canvas\Mixin\Page\Page as TrinitiCanvasPage;

final class GetPageResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:canvas:mixin:get-page-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiCanvasPage::class,
                ])
                ->build(),
        ];
    }
}
