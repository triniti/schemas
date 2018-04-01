<?php
// @link http://schemas.triniti.io/json-schema/triniti/curator/mixin/create-teaser/1-0-0.json#
namespace Triniti\Schemas\Curator\Mixin\CreateTeaser;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Curator\Mixin\Teaser\Teaser as TrinitiCuratorTeaser;

final class CreateTeaserV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:curator:mixin:create-teaser:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node', T\MessageType::create())
                ->required()
                ->anyOfClassNames([
                    TrinitiCuratorTeaser::class,
                ])
                ->build(),
        ];
    }
}
