<?php
// @link http://schemas.triniti.io/json-schema/triniti/notify/mixin/android-notification/1-0-0.json#
namespace Triniti\Schemas\Notify\Mixin\AndroidNotification;

use Gdbots\Pbj\AbstractMixin;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\SchemaId;
use Gdbots\Pbj\Type as T;

final class AndroidNotificationV1Mixin extends AbstractMixin
{
    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return SchemaId::fromString('pbj:triniti:notify:mixin:android-notification:1-0-0');
    }

    /**
     * {@inheritdoc}
     */
    public function getFields()
    {
        return [
            /*
             * @link https://firebase.google.com/docs/cloud-messaging/ios/topic-messaging
             * FCM topic messaging allows you to send a message to multiple devices that have opted in to a particular topic.
             */
            Fb::create('fcm_topics', T\StringType::create())
                ->asASet()
                ->pattern('^[a-zA-Z0-9-_.~%]+$')
                ->build(),
        ];
    }
}
