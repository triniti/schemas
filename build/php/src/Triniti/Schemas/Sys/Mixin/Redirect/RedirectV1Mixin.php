<?php
// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/redirect/1-0-0.json#
namespace Triniti\Schemas\Sys\Mixin\Redirect;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Sys\RedirectId;

final class RedirectV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:sys:mixin:redirect:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('_id', T\IdentifierType::create())
                ->required()
                ->className(RedirectId::class)
                ->overridable(true)
                ->build(),
            /*
             * The URL (absolute or relative on the current domain) that the incoming URI
             * should be redirected to.
             */
            Fb::create('redirect_to', T\StringType::create())
                ->build(),
            /*
             * When permanent, the HTTP status code should be a 301 and 302 otherwise.
             */
            Fb::create('is_permanent', T\BooleanType::create())
                ->build(),
            /*
             * Vanity URLs are used for on-air or promotional purposes and are generally
             * off the root and very short, e.g. /tour or /christmas
             */
            Fb::create('is_vanity', T\BooleanType::create())
                ->build(),
        ];
    }
}
