<?php
/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://schemas.triniti.io/
 */

\Gdbots\Pbj\MessageResolver::registerMap([
    'gdbots:analytics:tracker:keen' => 'Gdbots\Schemas\Analytics\Tracker\KeenV1',
    'gdbots:contexts::app' => 'Gdbots\Schemas\Contexts\AppV1',
    'gdbots:contexts::cloud' => 'Gdbots\Schemas\Contexts\CloudV1',
    'gdbots:contexts::user-agent' => 'Gdbots\Schemas\Contexts\UserAgentV1',
    'gdbots:forms:field:address-field' => 'Gdbots\Schemas\Forms\Field\AddressFieldV1',
    'gdbots:forms:field:age-field' => 'Gdbots\Schemas\Forms\Field\AgeFieldV1',
    'gdbots:forms:field:country-field' => 'Gdbots\Schemas\Forms\Field\CountryFieldV1',
    'gdbots:forms:field:date-field' => 'Gdbots\Schemas\Forms\Field\DateFieldV1',
    'gdbots:forms:field:dob-field' => 'Gdbots\Schemas\Forms\Field\DobFieldV1',
    'gdbots:forms:field:email-field' => 'Gdbots\Schemas\Forms\Field\EmailFieldV1',
    'gdbots:forms:field:facebook-user-field' => 'Gdbots\Schemas\Forms\Field\FacebookUserFieldV1',
    'gdbots:forms:field:gender-field' => 'Gdbots\Schemas\Forms\Field\GenderFieldV1',
    'gdbots:forms:field:height-field' => 'Gdbots\Schemas\Forms\Field\HeightFieldV1',
    'gdbots:forms:field:instagram-user-field' => 'Gdbots\Schemas\Forms\Field\InstagramUserFieldV1',
    'gdbots:forms:field:legal-field' => 'Gdbots\Schemas\Forms\Field\LegalFieldV1',
    'gdbots:forms:field:long-text-field' => 'Gdbots\Schemas\Forms\Field\LongTextFieldV1',
    'gdbots:forms:field:number-field' => 'Gdbots\Schemas\Forms\Field\NumberFieldV1',
    'gdbots:forms:field:phone-field' => 'Gdbots\Schemas\Forms\Field\PhoneFieldV1',
    'gdbots:forms:field:photo-field' => 'Gdbots\Schemas\Forms\Field\PhotoFieldV1',
    'gdbots:forms:field:pinterest-user-field' => 'Gdbots\Schemas\Forms\Field\PinterestUserFieldV1',
    'gdbots:forms:field:select-field' => 'Gdbots\Schemas\Forms\Field\SelectFieldV1',
    'gdbots:forms:field:sexual-orientation-field' => 'Gdbots\Schemas\Forms\Field\SexualOrientationFieldV1',
    'gdbots:forms:field:short-text-field' => 'Gdbots\Schemas\Forms\Field\ShortTextFieldV1',
    'gdbots:forms:field:skype-user-field' => 'Gdbots\Schemas\Forms\Field\SkypeUserFieldV1',
    'gdbots:forms:field:snapchat-user-field' => 'Gdbots\Schemas\Forms\Field\SnapchatUserFieldV1',
    'gdbots:forms:field:statement-field' => 'Gdbots\Schemas\Forms\Field\StatementFieldV1',
    'gdbots:forms:field:twitter-user-field' => 'Gdbots\Schemas\Forms\Field\TwitterUserFieldV1',
    'gdbots:forms:field:video-field' => 'Gdbots\Schemas\Forms\Field\VideoFieldV1',
    'gdbots:forms:field:website-field' => 'Gdbots\Schemas\Forms\Field\WebsiteFieldV1',
    'gdbots:forms:field:yes-no-field' => 'Gdbots\Schemas\Forms\Field\YesNoFieldV1',
    'gdbots:forms:field:youtube-user-field' => 'Gdbots\Schemas\Forms\Field\YoutubeUserFieldV1',
    'gdbots:forms:field:youtube-video-field' => 'Gdbots\Schemas\Forms\Field\YoutubeVideoFieldV1',
    'gdbots:geo::address' => 'Gdbots\Schemas\Geo\AddressV1',
    'gdbots:ncr:command:create-edge' => 'Gdbots\Schemas\Ncr\Command\CreateEdgeV1',
    'gdbots:ncr:command:delete-edge' => 'Gdbots\Schemas\Ncr\Command\DeleteEdgeV1',
    'gdbots:ncr:event:edge-created' => 'Gdbots\Schemas\Ncr\Event\EdgeCreatedV1',
    'gdbots:ncr:event:edge-deleted' => 'Gdbots\Schemas\Ncr\Event\EdgeDeletedV1',
    'gdbots:ncr:request:get-node-batch-request' => 'Gdbots\Schemas\Ncr\Request\GetNodeBatchRequestV1',
    'gdbots:ncr:request:get-node-batch-response' => 'Gdbots\Schemas\Ncr\Request\GetNodeBatchResponseV1',
    'gdbots:pbjx::envelope' => 'Gdbots\Schemas\Pbjx\EnvelopeV1',
    'gdbots:pbjx:command:check-health' => 'Gdbots\Schemas\Pbjx\Command\CheckHealthV1',
    'gdbots:pbjx:event:event-execution-failed' => 'Gdbots\Schemas\Pbjx\Event\EventExecutionFailedV1',
    'gdbots:pbjx:event:health-checked' => 'Gdbots\Schemas\Pbjx\Event\HealthCheckedV1',
    'gdbots:pbjx:request:echo-request' => 'Gdbots\Schemas\Pbjx\Request\EchoRequestV1',
    'gdbots:pbjx:request:echo-response' => 'Gdbots\Schemas\Pbjx\Request\EchoResponseV1',
    'gdbots:pbjx:request:request-failed-response' => 'Gdbots\Schemas\Pbjx\Request\RequestFailedResponseV1',
    'triniti:canvas:block:render-context' => 'Triniti\Schemas\Canvas\Block\RenderContextV1',
    'triniti:curator::widget-render-context' => 'Triniti\Schemas\Curator\WidgetRenderContextV1',
    'triniti:notify::notifier-result' => 'Triniti\Schemas\Notify\NotifierResultV1',
    'triniti:ovp.kaltura::caption' => 'Triniti\Schemas\OvpKaltura\CaptionV1',
    'triniti:ovp.kaltura::entry' => 'Triniti\Schemas\OvpKaltura\EntryV1',
    'triniti:ovp.kaltura::flavor' => 'Triniti\Schemas\OvpKaltura\FlavorV1',
    'triniti:ovp.kaltura:command:sync-entry' => 'Triniti\Schemas\OvpKaltura\Command\SyncEntryV1',
]);
