<?php
// @link http://schemas.triniti.io/json-schema/triniti/pages/mixin/get-page-batch-response/1-0-0.json#
namespace Triniti\Schemas\Pages\Mixin\GetPageBatchResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Pages\Mixin\Page\Page as TrinitiPagesPage;

final class GetPageBatchResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:pages:mixin:get-page-batch-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('nodes', T\MessageType::create())
                ->asAMap()
                ->anyOfClassNames([
                    TrinitiPagesPage::class,
                ])
                ->build(),
        ];
    }
}