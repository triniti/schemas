<?php
/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the pbj schemas with the MessageResolver.
 *
 * @link http://schemas.triniti.io/
 */

\Gdbots\Pbj\MessageResolver::registerManifest([
    'curies' => [
        'gdbots:analytics:tracker:keen' => 0,
        'gdbots:contexts::app' => 1,
        'gdbots:contexts::cloud' => 2,
        'gdbots:contexts::user-agent' => 3,
        'gdbots:forms:field:address-field' => 4,
        'gdbots:forms:field:age-field' => 5,
        'gdbots:forms:field:country-field' => 6,
        'gdbots:forms:field:date-field' => 7,
        'gdbots:forms:field:dob-field' => 8,
        'gdbots:forms:field:email-field' => 9,
        'gdbots:forms:field:facebook-user-field' => 10,
        'gdbots:forms:field:gender-field' => 11,
        'gdbots:forms:field:height-field' => 12,
        'gdbots:forms:field:instagram-user-field' => 13,
        'gdbots:forms:field:legal-field' => 14,
        'gdbots:forms:field:long-text-field' => 15,
        'gdbots:forms:field:number-field' => 16,
        'gdbots:forms:field:phone-field' => 17,
        'gdbots:forms:field:photo-field' => 18,
        'gdbots:forms:field:pinterest-user-field' => 19,
        'gdbots:forms:field:select-field' => 20,
        'gdbots:forms:field:sexual-orientation-field' => 21,
        'gdbots:forms:field:short-text-field' => 22,
        'gdbots:forms:field:skype-user-field' => 23,
        'gdbots:forms:field:snapchat-user-field' => 24,
        'gdbots:forms:field:statement-field' => 25,
        'gdbots:forms:field:twitter-user-field' => 26,
        'gdbots:forms:field:video-field' => 27,
        'gdbots:forms:field:website-field' => 28,
        'gdbots:forms:field:yes-no-field' => 29,
        'gdbots:forms:field:youtube-user-field' => 30,
        'gdbots:forms:field:youtube-video-field' => 31,
        'gdbots:geo::address' => 32,
        'gdbots:ncr:command:create-edge' => 33,
        'gdbots:ncr:command:delete-edge' => 34,
        'gdbots:ncr:event:edge-created' => 35,
        'gdbots:ncr:event:edge-deleted' => 36,
        'gdbots:ncr:request:get-node-batch-request' => 37,
        'gdbots:ncr:request:get-node-batch-response' => 38,
        'gdbots:pbjx::envelope' => 39,
        'gdbots:pbjx:command:check-health' => 40,
        'gdbots:pbjx:event:event-execution-failed' => 41,
        'gdbots:pbjx:event:health-checked' => 42,
        'gdbots:pbjx:request:echo-request' => 43,
        'gdbots:pbjx:request:echo-response' => 44,
        'gdbots:pbjx:request:request-failed-response' => 45,
        'triniti:common::render-context' => 46,
        'triniti:migrator:command:sync-cf-nodes' => 47,
        'triniti:notify::notifier-result' => 48,
        'triniti:ovp.kaltura::caption' => 49,
        'triniti:ovp.kaltura::entry' => 50,
        'triniti:ovp.kaltura::flavor' => 51,
        'triniti:ovp.kaltura:command:sync-entry' => 52,
        'triniti:sys:command:purge-cache' => 53,
    ],
    'classes' => [
        0 => 'Gdbots\Schemas\Analytics\Tracker\KeenV1',
        1 => 'Gdbots\Schemas\Contexts\AppV1',
        2 => 'Gdbots\Schemas\Contexts\CloudV1',
        3 => 'Gdbots\Schemas\Contexts\UserAgentV1',
        4 => 'Gdbots\Schemas\Forms\Field\AddressFieldV1',
        5 => 'Gdbots\Schemas\Forms\Field\AgeFieldV1',
        6 => 'Gdbots\Schemas\Forms\Field\CountryFieldV1',
        7 => 'Gdbots\Schemas\Forms\Field\DateFieldV1',
        8 => 'Gdbots\Schemas\Forms\Field\DobFieldV1',
        9 => 'Gdbots\Schemas\Forms\Field\EmailFieldV1',
        10 => 'Gdbots\Schemas\Forms\Field\FacebookUserFieldV1',
        11 => 'Gdbots\Schemas\Forms\Field\GenderFieldV1',
        12 => 'Gdbots\Schemas\Forms\Field\HeightFieldV1',
        13 => 'Gdbots\Schemas\Forms\Field\InstagramUserFieldV1',
        14 => 'Gdbots\Schemas\Forms\Field\LegalFieldV1',
        15 => 'Gdbots\Schemas\Forms\Field\LongTextFieldV1',
        16 => 'Gdbots\Schemas\Forms\Field\NumberFieldV1',
        17 => 'Gdbots\Schemas\Forms\Field\PhoneFieldV1',
        18 => 'Gdbots\Schemas\Forms\Field\PhotoFieldV1',
        19 => 'Gdbots\Schemas\Forms\Field\PinterestUserFieldV1',
        20 => 'Gdbots\Schemas\Forms\Field\SelectFieldV1',
        21 => 'Gdbots\Schemas\Forms\Field\SexualOrientationFieldV1',
        22 => 'Gdbots\Schemas\Forms\Field\ShortTextFieldV1',
        23 => 'Gdbots\Schemas\Forms\Field\SkypeUserFieldV1',
        24 => 'Gdbots\Schemas\Forms\Field\SnapchatUserFieldV1',
        25 => 'Gdbots\Schemas\Forms\Field\StatementFieldV1',
        26 => 'Gdbots\Schemas\Forms\Field\TwitterUserFieldV1',
        27 => 'Gdbots\Schemas\Forms\Field\VideoFieldV1',
        28 => 'Gdbots\Schemas\Forms\Field\WebsiteFieldV1',
        29 => 'Gdbots\Schemas\Forms\Field\YesNoFieldV1',
        30 => 'Gdbots\Schemas\Forms\Field\YoutubeUserFieldV1',
        31 => 'Gdbots\Schemas\Forms\Field\YoutubeVideoFieldV1',
        32 => 'Gdbots\Schemas\Geo\AddressV1',
        33 => 'Gdbots\Schemas\Ncr\Command\CreateEdgeV1',
        34 => 'Gdbots\Schemas\Ncr\Command\DeleteEdgeV1',
        35 => 'Gdbots\Schemas\Ncr\Event\EdgeCreatedV1',
        36 => 'Gdbots\Schemas\Ncr\Event\EdgeDeletedV1',
        37 => 'Gdbots\Schemas\Ncr\Request\GetNodeBatchRequestV1',
        38 => 'Gdbots\Schemas\Ncr\Request\GetNodeBatchResponseV1',
        39 => 'Gdbots\Schemas\Pbjx\EnvelopeV1',
        40 => 'Gdbots\Schemas\Pbjx\Command\CheckHealthV1',
        41 => 'Gdbots\Schemas\Pbjx\Event\EventExecutionFailedV1',
        42 => 'Gdbots\Schemas\Pbjx\Event\HealthCheckedV1',
        43 => 'Gdbots\Schemas\Pbjx\Request\EchoRequestV1',
        44 => 'Gdbots\Schemas\Pbjx\Request\EchoResponseV1',
        45 => 'Gdbots\Schemas\Pbjx\Request\RequestFailedResponseV1',
        46 => 'Triniti\Schemas\Common\RenderContextV1',
        47 => 'Triniti\Schemas\Migrator\Command\SyncCfNodesV1',
        48 => 'Triniti\Schemas\Notify\NotifierResultV1',
        49 => 'Triniti\Schemas\OvpKaltura\CaptionV1',
        50 => 'Triniti\Schemas\OvpKaltura\EntryV1',
        51 => 'Triniti\Schemas\OvpKaltura\FlavorV1',
        52 => 'Triniti\Schemas\OvpKaltura\Command\SyncEntryV1',
        53 => 'Triniti\Schemas\Sys\Command\PurgeCacheV1',
    ],
    'mixins' => [
        'gdbots:analytics:mixin:tracker:v1' => [0],
        'gdbots:common:mixin:taggable:v1' => [48],
        'gdbots:forms:mixin:field:v1' => [4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31],
        'gdbots:ncr:mixin:get-node-batch-request:v1' => [37],
        'gdbots:ncr:mixin:get-node-batch-response:v1' => [38],
        'gdbots:pbjx:mixin:command:v1' => [33,34,40,47,52,53],
        'gdbots:pbjx:mixin:event:v1' => [35,36,41,42],
        'gdbots:pbjx:mixin:indexed:v1' => [41],
        'gdbots:pbjx:mixin:request:v1' => [37,43],
        'gdbots:pbjx:mixin:response:v1' => [38,44,45],
    ],
]);
