<?php
// @link http://schemas.triniti.io/json-schema/triniti/ovp/mixin/video-marked-as-pending/1-0-0.json#
namespace Triniti\Schemas\Ovp\Mixin\VideoMarkedAsPending;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\SchemaId;

final class VideoMarkedAsPendingV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:ovp:mixin:video-marked-as-pending:1-0-0');
    }
}
