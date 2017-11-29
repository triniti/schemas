<?php
// @link http://schemas.triniti.io/json-schema/triniti/pages/mixin/get-page-response/1-0-0.json#
namespace Triniti\Schemas\Pages\Mixin\GetPageResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Pages\Mixin\Page\Page as TrinitiPagesPage;

final class GetPageResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:pages:mixin:get-page-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiPagesPage::class,
                ])
                ->build(),
        ];
    }
}
