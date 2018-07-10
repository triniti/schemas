<?php
// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/redirect/1-0-0.json#
namespace Triniti\Schemas\Sys\Mixin\Redirect;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\Enum\Format;
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
             * Redirect URI field is a string in url format that represents the redirect uri.
             */
            Fb::create('redirect_uri', T\StringType::create())
                ->format(Format::URL())
                ->build(),
            /*
             * Request URI field is a string in url format that represents the request uri.
             */
            Fb::create('request_uri', T\StringType::create())
                ->format(Format::URL())
                ->build(),
        ];
    }
}
