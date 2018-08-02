<?php
// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/get-redirect-response/1-0-0.json#
namespace Triniti\Schemas\Sys\Mixin\GetRedirectResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Sys\Mixin\Redirect\Redirect as TrinitiSysRedirect;

final class GetRedirectResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:sys:mixin:get-redirect-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('node', T\MessageType::create())
                ->anyOfClassNames([
                    TrinitiSysRedirect::class,
                ])
                ->build(),
            /*
             * The URL (absolute or relative on the current domain) that the redirect
             * resolves to which takes into account vanity url associations.
             */
            Fb::create('resolves_to', T\StringType::create())
                ->build(),
        ];
    }
}
