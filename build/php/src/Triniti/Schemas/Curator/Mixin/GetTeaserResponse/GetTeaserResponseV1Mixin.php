<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/get-teaser-response/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\GetTeaserResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Curator\Mixin\Teaser\Teaser as TrinitiCuratorTeaser;

final class GetTeaserResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:get-teaser-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiCuratorTeaser::class,
                ])
                ->build(),
        ];
    }
}
