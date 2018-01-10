<?php
// @link http://schemas.triniti.io/json-schema/triniti/common/mixin/custom-code/1-0-0.json#
namespace Triniti\Schemas\Common\Mixin\CustomCode;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class CustomCodeV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:common:mixin:custom-code:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * A map containing (HTML, JavaScript, CSS, etc.) that is injected into
             * an application at a named insertion point, e.g. "html_head" or "footer".
             */
            Fb::create('custom_code', T\TextType::create())
                ->asAMap()
                ->build(),
        ];
    }
}
