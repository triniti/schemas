<?php
// @link http://schemas.triniti.io/json-schema/triniti/sys/mixin/search-redirects-response/1-0-0.json#
namespace Triniti\Schemas\Sys\Mixin\SearchRedirectsResponse;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;
use Triniti\Schemas\Sys\Mixin\Redirect\Redirect as TrinitiSysRedirect;

final class SearchRedirectsResponseV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:sys:mixin:search-redirects-response:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            Fb::create('nodes', T\MessageType::create())
                ->asAList()
                ->anyOfClassNames([
                    TrinitiSysRedirect::class,
                ])
                ->build(),
        ];
    }
}
