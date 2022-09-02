<?php
declare(strict_types=1);

/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Registers all of the messages with the MessageResolver.
 *
 * @link http://schemas.triniti.io/
 */

use Gdbots\Pbj\MessageResolver;

MessageResolver::setDefaultVendor('triniti');
MessageResolver::setManifestDir(__DIR__.'/manifests');
MessageResolver::register([
    'gdbots:analytics:tracker:keen:v1' => 'Gdbots\Schemas\Analytics\Tracker\KeenV1',
    'gdbots:common::search-filter:v1' => 'Gdbots\Schemas\Common\SearchFilterV1',
    'gdbots:contexts::app:v1' => 'Gdbots\Schemas\Contexts\AppV1',
    'gdbots:contexts::cloud:v1' => 'Gdbots\Schemas\Contexts\CloudV1',
    'gdbots:contexts::user-agent:v1' => 'Gdbots\Schemas\Contexts\UserAgentV1',
    'gdbots:forms:field:address-field:v1' => 'Gdbots\Schemas\Forms\Field\AddressFieldV1',
    'gdbots:forms:field:age-field:v1' => 'Gdbots\Schemas\Forms\Field\AgeFieldV1',
    'gdbots:forms:field:country-field:v1' => 'Gdbots\Schemas\Forms\Field\CountryFieldV1',
    'gdbots:forms:field:date-field:v1' => 'Gdbots\Schemas\Forms\Field\DateFieldV1',
    'gdbots:forms:field:dob-field:v1' => 'Gdbots\Schemas\Forms\Field\DobFieldV1',
    'gdbots:forms:field:document-field:v1' => 'Gdbots\Schemas\Forms\Field\DocumentFieldV1',
    'gdbots:forms:field:email-field:v1' => 'Gdbots\Schemas\Forms\Field\EmailFieldV1',
    'gdbots:forms:field:facebook-user-field:v1' => 'Gdbots\Schemas\Forms\Field\FacebookUserFieldV1',
    'gdbots:forms:field:gender-field:v1' => 'Gdbots\Schemas\Forms\Field\GenderFieldV1',
    'gdbots:forms:field:height-field:v1' => 'Gdbots\Schemas\Forms\Field\HeightFieldV1',
    'gdbots:forms:field:instagram-user-field:v1' => 'Gdbots\Schemas\Forms\Field\InstagramUserFieldV1',
    'gdbots:forms:field:legal-field:v1' => 'Gdbots\Schemas\Forms\Field\LegalFieldV1',
    'gdbots:forms:field:long-text-field:v1' => 'Gdbots\Schemas\Forms\Field\LongTextFieldV1',
    'gdbots:forms:field:number-field:v1' => 'Gdbots\Schemas\Forms\Field\NumberFieldV1',
    'gdbots:forms:field:phone-field:v1' => 'Gdbots\Schemas\Forms\Field\PhoneFieldV1',
    'gdbots:forms:field:photo-field:v1' => 'Gdbots\Schemas\Forms\Field\PhotoFieldV1',
    'gdbots:forms:field:pinterest-user-field:v1' => 'Gdbots\Schemas\Forms\Field\PinterestUserFieldV1',
    'gdbots:forms:field:select-field:v1' => 'Gdbots\Schemas\Forms\Field\SelectFieldV1',
    'gdbots:forms:field:sexual-orientation-field:v1' => 'Gdbots\Schemas\Forms\Field\SexualOrientationFieldV1',
    'gdbots:forms:field:short-text-field:v1' => 'Gdbots\Schemas\Forms\Field\ShortTextFieldV1',
    'gdbots:forms:field:signature-field:v1' => 'Gdbots\Schemas\Forms\Field\SignatureFieldV1',
    'gdbots:forms:field:skype-user-field:v1' => 'Gdbots\Schemas\Forms\Field\SkypeUserFieldV1',
    'gdbots:forms:field:snapchat-user-field:v1' => 'Gdbots\Schemas\Forms\Field\SnapchatUserFieldV1',
    'gdbots:forms:field:statement-field:v1' => 'Gdbots\Schemas\Forms\Field\StatementFieldV1',
    'gdbots:forms:field:tiktok-user-field:v1' => 'Gdbots\Schemas\Forms\Field\TiktokUserFieldV1',
    'gdbots:forms:field:tiktok-video-field:v1' => 'Gdbots\Schemas\Forms\Field\TiktokVideoFieldV1',
    'gdbots:forms:field:twitter-user-field:v1' => 'Gdbots\Schemas\Forms\Field\TwitterUserFieldV1',
    'gdbots:forms:field:video-field:v1' => 'Gdbots\Schemas\Forms\Field\VideoFieldV1',
    'gdbots:forms:field:website-field:v1' => 'Gdbots\Schemas\Forms\Field\WebsiteFieldV1',
    'gdbots:forms:field:weight-field:v1' => 'Gdbots\Schemas\Forms\Field\WeightFieldV1',
    'gdbots:forms:field:yes-no-field:v1' => 'Gdbots\Schemas\Forms\Field\YesNoFieldV1',
    'gdbots:forms:field:youtube-user-field:v1' => 'Gdbots\Schemas\Forms\Field\YoutubeUserFieldV1',
    'gdbots:forms:field:youtube-video-field:v1' => 'Gdbots\Schemas\Forms\Field\YoutubeVideoFieldV1',
    'gdbots:geo::address:v1' => 'Gdbots\Schemas\Geo\AddressV1',
    'gdbots:iam:command:grant-roles-to-app:v1' => 'Gdbots\Schemas\Iam\Command\GrantRolesToAppV1',
    'gdbots:iam:command:grant-roles-to-user:v1' => 'Gdbots\Schemas\Iam\Command\GrantRolesToUserV1',
    'gdbots:iam:command:revoke-roles-from-app:v1' => 'Gdbots\Schemas\Iam\Command\RevokeRolesFromAppV1',
    'gdbots:iam:command:revoke-roles-from-user:v1' => 'Gdbots\Schemas\Iam\Command\RevokeRolesFromUserV1',
    'gdbots:iam:event:app-roles-granted:v1' => 'Gdbots\Schemas\Iam\Event\AppRolesGrantedV1',
    'gdbots:iam:event:app-roles-revoked:v1' => 'Gdbots\Schemas\Iam\Event\AppRolesRevokedV1',
    'gdbots:iam:event:user-roles-granted:v1' => 'Gdbots\Schemas\Iam\Event\UserRolesGrantedV1',
    'gdbots:iam:event:user-roles-revoked:v1' => 'Gdbots\Schemas\Iam\Event\UserRolesRevokedV1',
    'gdbots:iam:request:get-user-request:v1' => 'Gdbots\Schemas\Iam\Request\GetUserRequestV1',
    'gdbots:iam:request:get-user-response:v1' => 'Gdbots\Schemas\Iam\Request\GetUserResponseV1',
    'gdbots:iam:request:search-apps-request:v1' => 'Gdbots\Schemas\Iam\Request\SearchAppsRequestV1',
    'gdbots:iam:request:search-apps-response:v1' => 'Gdbots\Schemas\Iam\Request\SearchAppsResponseV1',
    'gdbots:iam:request:search-roles-request:v1' => 'Gdbots\Schemas\Iam\Request\SearchRolesRequestV1',
    'gdbots:iam:request:search-roles-response:v1' => 'Gdbots\Schemas\Iam\Request\SearchRolesResponseV1',
    'gdbots:iam:request:search-users-request:v1' => 'Gdbots\Schemas\Iam\Request\SearchUsersRequestV1',
    'gdbots:iam:request:search-users-response:v1' => 'Gdbots\Schemas\Iam\Request\SearchUsersResponseV1',
    'gdbots:ncr:command:create-edge:v1' => 'Gdbots\Schemas\Ncr\Command\CreateEdgeV1',
    'gdbots:ncr:command:create-node:v1' => 'Gdbots\Schemas\Ncr\Command\CreateNodeV1',
    'gdbots:ncr:command:delete-edge:v1' => 'Gdbots\Schemas\Ncr\Command\DeleteEdgeV1',
    'gdbots:ncr:command:delete-node:v1' => 'Gdbots\Schemas\Ncr\Command\DeleteNodeV1',
    'gdbots:ncr:command:expire-node:v1' => 'Gdbots\Schemas\Ncr\Command\ExpireNodeV1',
    'gdbots:ncr:command:lock-node:v1' => 'Gdbots\Schemas\Ncr\Command\LockNodeV1',
    'gdbots:ncr:command:mark-node-as-draft:v1' => 'Gdbots\Schemas\Ncr\Command\MarkNodeAsDraftV1',
    'gdbots:ncr:command:mark-node-as-pending:v1' => 'Gdbots\Schemas\Ncr\Command\MarkNodeAsPendingV1',
    'gdbots:ncr:command:publish-node:v1' => 'Gdbots\Schemas\Ncr\Command\PublishNodeV1',
    'gdbots:ncr:command:rename-node:v1' => 'Gdbots\Schemas\Ncr\Command\RenameNodeV1',
    'gdbots:ncr:command:unlock-node:v1' => 'Gdbots\Schemas\Ncr\Command\UnlockNodeV1',
    'gdbots:ncr:command:unpublish-node:v1' => 'Gdbots\Schemas\Ncr\Command\UnpublishNodeV1',
    'gdbots:ncr:command:update-node-labels:v1' => 'Gdbots\Schemas\Ncr\Command\UpdateNodeLabelsV1',
    'gdbots:ncr:command:update-node-tags:v1' => 'Gdbots\Schemas\Ncr\Command\UpdateNodeTagsV1',
    'gdbots:ncr:command:update-node:v1' => 'Gdbots\Schemas\Ncr\Command\UpdateNodeV1',
    'gdbots:ncr:event:edge-created:v1' => 'Gdbots\Schemas\Ncr\Event\EdgeCreatedV1',
    'gdbots:ncr:event:edge-deleted:v1' => 'Gdbots\Schemas\Ncr\Event\EdgeDeletedV1',
    'gdbots:ncr:event:node-created:v1' => 'Gdbots\Schemas\Ncr\Event\NodeCreatedV1',
    'gdbots:ncr:event:node-deleted:v1' => 'Gdbots\Schemas\Ncr\Event\NodeDeletedV1',
    'gdbots:ncr:event:node-expired:v1' => 'Gdbots\Schemas\Ncr\Event\NodeExpiredV1',
    'gdbots:ncr:event:node-labels-updated:v1' => 'Gdbots\Schemas\Ncr\Event\NodeLabelsUpdatedV1',
    'gdbots:ncr:event:node-locked:v1' => 'Gdbots\Schemas\Ncr\Event\NodeLockedV1',
    'gdbots:ncr:event:node-marked-as-draft:v1' => 'Gdbots\Schemas\Ncr\Event\NodeMarkedAsDraftV1',
    'gdbots:ncr:event:node-marked-as-pending:v1' => 'Gdbots\Schemas\Ncr\Event\NodeMarkedAsPendingV1',
    'gdbots:ncr:event:node-published:v1' => 'Gdbots\Schemas\Ncr\Event\NodePublishedV1',
    'gdbots:ncr:event:node-renamed:v1' => 'Gdbots\Schemas\Ncr\Event\NodeRenamedV1',
    'gdbots:ncr:event:node-scheduled:v1' => 'Gdbots\Schemas\Ncr\Event\NodeScheduledV1',
    'gdbots:ncr:event:node-tags-updated:v1' => 'Gdbots\Schemas\Ncr\Event\NodeTagsUpdatedV1',
    'gdbots:ncr:event:node-unlocked:v1' => 'Gdbots\Schemas\Ncr\Event\NodeUnlockedV1',
    'gdbots:ncr:event:node-unpublished:v1' => 'Gdbots\Schemas\Ncr\Event\NodeUnpublishedV1',
    'gdbots:ncr:event:node-updated:v1' => 'Gdbots\Schemas\Ncr\Event\NodeUpdatedV1',
    'gdbots:ncr:request:get-node-batch-request:v1' => 'Gdbots\Schemas\Ncr\Request\GetNodeBatchRequestV1',
    'gdbots:ncr:request:get-node-batch-response:v1' => 'Gdbots\Schemas\Ncr\Request\GetNodeBatchResponseV1',
    'gdbots:ncr:request:get-node-history-request:v1' => 'Gdbots\Schemas\Ncr\Request\GetNodeHistoryRequestV1',
    'gdbots:ncr:request:get-node-history-response:v1' => 'Gdbots\Schemas\Ncr\Request\GetNodeHistoryResponseV1',
    'gdbots:ncr:request:get-node-request:v1' => 'Gdbots\Schemas\Ncr\Request\GetNodeRequestV1',
    'gdbots:ncr:request:get-node-response:v1' => 'Gdbots\Schemas\Ncr\Request\GetNodeResponseV1',
    'gdbots:pbjx::envelope:v1' => 'Gdbots\Schemas\Pbjx\EnvelopeV1',
    'gdbots:pbjx:command:check-health:v1' => 'Gdbots\Schemas\Pbjx\Command\CheckHealthV1',
    'gdbots:pbjx:event:event-execution-failed:v1' => 'Gdbots\Schemas\Pbjx\Event\EventExecutionFailedV1',
    'gdbots:pbjx:event:health-checked:v1' => 'Gdbots\Schemas\Pbjx\Event\HealthCheckedV1',
    'gdbots:pbjx:request:echo-request:v1' => 'Gdbots\Schemas\Pbjx\Request\EchoRequestV1',
    'gdbots:pbjx:request:echo-response:v1' => 'Gdbots\Schemas\Pbjx\Request\EchoResponseV1',
    'gdbots:pbjx:request:request-failed-response:v1' => 'Gdbots\Schemas\Pbjx\Request\RequestFailedResponseV1',
    'triniti:apollo:command:add-reactions:v1' => 'Triniti\Schemas\Apollo\Command\AddReactionsV1',
    'triniti:apollo:command:cast-vote:v1' => 'Triniti\Schemas\Apollo\Command\CastVoteV1',
    'triniti:apollo:event:reactions-added:v1' => 'Triniti\Schemas\Apollo\Event\ReactionsAddedV1',
    'triniti:apollo:event:vote-casted:v1' => 'Triniti\Schemas\Apollo\Event\VoteCastedV1',
    'triniti:apollo:request:search-polls-request:v1' => 'Triniti\Schemas\Apollo\Request\SearchPollsRequestV1',
    'triniti:apollo:request:search-polls-response:v1' => 'Triniti\Schemas\Apollo\Request\SearchPollsResponseV1',
    'triniti:boost:request:search-sponsors-request:v1' => 'Triniti\Schemas\Boost\Request\SearchSponsorsRequestV1',
    'triniti:boost:request:search-sponsors-response:v1' => 'Triniti\Schemas\Boost\Request\SearchSponsorsResponseV1',
    'triniti:canvas:request:search-pages-request:v1' => 'Triniti\Schemas\Canvas\Request\SearchPagesRequestV1',
    'triniti:canvas:request:search-pages-response:v1' => 'Triniti\Schemas\Canvas\Request\SearchPagesResponseV1',
    'triniti:common::render-context:v1' => 'Triniti\Schemas\Common\RenderContextV1',
    'triniti:curator::slot:v1' => 'Triniti\Schemas\Curator\SlotV1',
    'triniti:curator:command:remove-teaser-slotting:v1' => 'Triniti\Schemas\Curator\Command\RemoveTeaserSlottingV1',
    'triniti:curator:command:sync-teaser:v1' => 'Triniti\Schemas\Curator\Command\SyncTeaserV1',
    'triniti:curator:command:update-gallery-image-count:v1' => 'Triniti\Schemas\Curator\Command\UpdateGalleryImageCountV1',
    'triniti:curator:event:gallery-image-count-updated:v1' => 'Triniti\Schemas\Curator\Event\GalleryImageCountUpdatedV1',
    'triniti:curator:event:teaser-slotting-removed:v1' => 'Triniti\Schemas\Curator\Event\TeaserSlottingRemovedV1',
    'triniti:curator:request:render-promotion-request:v1' => 'Triniti\Schemas\Curator\Request\RenderPromotionRequestV1',
    'triniti:curator:request:render-promotion-response:v1' => 'Triniti\Schemas\Curator\Request\RenderPromotionResponseV1',
    'triniti:curator:request:render-widget-request:v1' => 'Triniti\Schemas\Curator\Request\RenderWidgetRequestV1',
    'triniti:curator:request:render-widget-response:v1' => 'Triniti\Schemas\Curator\Request\RenderWidgetResponseV1',
    'triniti:curator:request:search-galleries-request:v1' => 'Triniti\Schemas\Curator\Request\SearchGalleriesRequestV1',
    'triniti:curator:request:search-galleries-response:v1' => 'Triniti\Schemas\Curator\Request\SearchGalleriesResponseV1',
    'triniti:curator:request:search-promotions-request:v1' => 'Triniti\Schemas\Curator\Request\SearchPromotionsRequestV1',
    'triniti:curator:request:search-promotions-response:v1' => 'Triniti\Schemas\Curator\Request\SearchPromotionsResponseV1',
    'triniti:curator:request:search-teasers-request:v1' => 'Triniti\Schemas\Curator\Request\SearchTeasersRequestV1',
    'triniti:curator:request:search-teasers-response:v1' => 'Triniti\Schemas\Curator\Request\SearchTeasersResponseV1',
    'triniti:curator:request:search-timelines-request:v1' => 'Triniti\Schemas\Curator\Request\SearchTimelinesRequestV1',
    'triniti:curator:request:search-timelines-response:v1' => 'Triniti\Schemas\Curator\Request\SearchTimelinesResponseV1',
    'triniti:curator:request:search-widgets-request:v1' => 'Triniti\Schemas\Curator\Request\SearchWidgetsRequestV1',
    'triniti:curator:request:search-widgets-response:v1' => 'Triniti\Schemas\Curator\Request\SearchWidgetsResponseV1',
    'triniti:dam:command:link-assets:v1' => 'Triniti\Schemas\Dam\Command\LinkAssetsV1',
    'triniti:dam:command:patch-assets:v1' => 'Triniti\Schemas\Dam\Command\PatchAssetsV1',
    'triniti:dam:command:reorder-gallery-assets:v1' => 'Triniti\Schemas\Dam\Command\ReorderGalleryAssetsV1',
    'triniti:dam:command:unlink-assets:v1' => 'Triniti\Schemas\Dam\Command\UnlinkAssetsV1',
    'triniti:dam:event:asset-linked:v1' => 'Triniti\Schemas\Dam\Event\AssetLinkedV1',
    'triniti:dam:event:asset-patched:v1' => 'Triniti\Schemas\Dam\Event\AssetPatchedV1',
    'triniti:dam:event:asset-unlinked:v1' => 'Triniti\Schemas\Dam\Event\AssetUnlinkedV1',
    'triniti:dam:event:gallery-asset-reordered:v1' => 'Triniti\Schemas\Dam\Event\GalleryAssetReorderedV1',
    'triniti:dam:request:get-upload-urls-request:v1' => 'Triniti\Schemas\Dam\Request\GetUploadUrlsRequestV1',
    'triniti:dam:request:get-upload-urls-response:v1' => 'Triniti\Schemas\Dam\Request\GetUploadUrlsResponseV1',
    'triniti:dam:request:search-assets-request:v1' => 'Triniti\Schemas\Dam\Request\SearchAssetsRequestV1',
    'triniti:dam:request:search-assets-response:v1' => 'Triniti\Schemas\Dam\Request\SearchAssetsResponseV1',
    'triniti:migrator:command:sync-cf-nodes:v1' => 'Triniti\Schemas\Migrator\Command\SyncCfNodesV1',
    'triniti:news:command:collect-article-stats:v1' => 'Triniti\Schemas\News\Command\CollectArticleStatsV1',
    'triniti:news:command:remove-article-slotting:v1' => 'Triniti\Schemas\News\Command\RemoveArticleSlottingV1',
    'triniti:news:command:sync-facebook-instant-article:v1' => 'Triniti\Schemas\News\Command\SyncFacebookInstantArticleV1',
    'triniti:news:event:apple-news-article-synced:v1' => 'Triniti\Schemas\News\Event\AppleNewsArticleSyncedV1',
    'triniti:news:event:article-slotting-removed:v1' => 'Triniti\Schemas\News\Event\ArticleSlottingRemovedV1',
    'triniti:news:event:article-stats-collected:v1' => 'Triniti\Schemas\News\Event\ArticleStatsCollectedV1',
    'triniti:news:event:facebook-instant-article-synced:v1' => 'Triniti\Schemas\News\Event\FacebookInstantArticleSyncedV1',
    'triniti:news:request:search-articles-request:v1' => 'Triniti\Schemas\News\Request\SearchArticlesRequestV1',
    'triniti:news:request:search-articles-response:v1' => 'Triniti\Schemas\News\Request\SearchArticlesResponseV1',
    'triniti:notify::notifier-result:v1' => 'Triniti\Schemas\Notify\NotifierResultV1',
    'triniti:notify:command:send-notification:v1' => 'Triniti\Schemas\Notify\Command\SendNotificationV1',
    'triniti:notify:event:notification-failed:v1' => 'Triniti\Schemas\Notify\Event\NotificationFailedV1',
    'triniti:notify:event:notification-sent:v1' => 'Triniti\Schemas\Notify\Event\NotificationSentV1',
    'triniti:notify:request:search-notifications-request:v1' => 'Triniti\Schemas\Notify\Request\SearchNotificationsRequestV1',
    'triniti:notify:request:search-notifications-response:v1' => 'Triniti\Schemas\Notify\Request\SearchNotificationsResponseV1',
    'triniti:ovp.jwplayer:command:sync-media:v1' => 'Triniti\Schemas\OvpJwplayer\Command\SyncMediaV1',
    'triniti:ovp.jwplayer:event:media-synced:v1' => 'Triniti\Schemas\OvpJwplayer\Event\MediaSyncedV1',
    'triniti:ovp.kaltura::caption:v1' => 'Triniti\Schemas\OvpKaltura\CaptionV1',
    'triniti:ovp.kaltura::entry:v1' => 'Triniti\Schemas\OvpKaltura\EntryV1',
    'triniti:ovp.kaltura::flavor:v1' => 'Triniti\Schemas\OvpKaltura\FlavorV1',
    'triniti:ovp.kaltura:command:sync-entry:v1' => 'Triniti\Schemas\OvpKaltura\Command\SyncEntryV1',
    'triniti:ovp.medialive:command:start-channel:v1' => 'Triniti\Schemas\OvpMedialive\Command\StartChannelV1',
    'triniti:ovp.medialive:command:stop-channel:v1' => 'Triniti\Schemas\OvpMedialive\Command\StopChannelV1',
    'triniti:ovp.medialive:event:channel-started:v1' => 'Triniti\Schemas\OvpMedialive\Event\ChannelStartedV1',
    'triniti:ovp.medialive:event:channel-stopped:v1' => 'Triniti\Schemas\OvpMedialive\Event\ChannelStoppedV1',
    'triniti:ovp:command:update-transcoding-status:v1' => 'Triniti\Schemas\Ovp\Command\UpdateTranscodingStatusV1',
    'triniti:ovp:command:update-transcription-status:v1' => 'Triniti\Schemas\Ovp\Command\UpdateTranscriptionStatusV1',
    'triniti:ovp:event:transcoding-completed:v1' => 'Triniti\Schemas\Ovp\Event\TranscodingCompletedV1',
    'triniti:ovp:event:transcoding-failed:v1' => 'Triniti\Schemas\Ovp\Event\TranscodingFailedV1',
    'triniti:ovp:event:transcoding-started:v1' => 'Triniti\Schemas\Ovp\Event\TranscodingStartedV1',
    'triniti:ovp:event:transcription-completed:v1' => 'Triniti\Schemas\Ovp\Event\TranscriptionCompletedV1',
    'triniti:ovp:event:transcription-failed:v1' => 'Triniti\Schemas\Ovp\Event\TranscriptionFailedV1',
    'triniti:ovp:event:transcription-started:v1' => 'Triniti\Schemas\Ovp\Event\TranscriptionStartedV1',
    'triniti:ovp:request:search-videos-request:v1' => 'Triniti\Schemas\Ovp\Request\SearchVideosRequestV1',
    'triniti:ovp:request:search-videos-response:v1' => 'Triniti\Schemas\Ovp\Request\SearchVideosResponseV1',
    'triniti:people:request:search-people-request:v1' => 'Triniti\Schemas\People\Request\SearchPeopleRequestV1',
    'triniti:people:request:search-people-response:v1' => 'Triniti\Schemas\People\Request\SearchPeopleResponseV1',
    'triniti:sys:command:purge-cache:v1' => 'Triniti\Schemas\Sys\Command\PurgeCacheV1',
    'triniti:sys:request:get-redirect-request:v1' => 'Triniti\Schemas\Sys\Request\GetRedirectRequestV1',
    'triniti:sys:request:get-redirect-response:v1' => 'Triniti\Schemas\Sys\Request\GetRedirectResponseV1',
    'triniti:sys:request:search-flagsets-request:v1' => 'Triniti\Schemas\Sys\Request\SearchFlagsetsRequestV1',
    'triniti:sys:request:search-flagsets-response:v1' => 'Triniti\Schemas\Sys\Request\SearchFlagsetsResponseV1',
    'triniti:sys:request:search-picklists-request:v1' => 'Triniti\Schemas\Sys\Request\SearchPicklistsRequestV1',
    'triniti:sys:request:search-picklists-response:v1' => 'Triniti\Schemas\Sys\Request\SearchPicklistsResponseV1',
    'triniti:sys:request:search-redirects-request:v1' => 'Triniti\Schemas\Sys\Request\SearchRedirectsRequestV1',
    'triniti:sys:request:search-redirects-response:v1' => 'Triniti\Schemas\Sys\Request\SearchRedirectsResponseV1',
    'triniti:taxonomy:request:search-categories-request:v1' => 'Triniti\Schemas\Taxonomy\Request\SearchCategoriesRequestV1',
    'triniti:taxonomy:request:search-categories-response:v1' => 'Triniti\Schemas\Taxonomy\Request\SearchCategoriesResponseV1',
    'triniti:taxonomy:request:search-channels-request:v1' => 'Triniti\Schemas\Taxonomy\Request\SearchChannelsRequestV1',
    'triniti:taxonomy:request:search-channels-response:v1' => 'Triniti\Schemas\Taxonomy\Request\SearchChannelsResponseV1',
    'triniti:taxonomy:request:suggest-hashtags-request:v1' => 'Triniti\Schemas\Taxonomy\Request\SuggestHashtagsRequestV1',
    'triniti:taxonomy:request:suggest-hashtags-response:v1' => 'Triniti\Schemas\Taxonomy\Request\SuggestHashtagsResponseV1',
]);
