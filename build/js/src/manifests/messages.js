/**
 * DO NOT EDIT THIS FILE as it will be overwritten by the Pbj compiler.
 * @link https://github.com/gdbots/pbjc-php
 *
 * Returns a map of curies to dynamic imports that can
 * be used to configure the MessageResolver.
 *
 * @link http://schemas.triniti.io/
 */

export default {
  'gdbots:analytics:tracker:keen:v1': () => import('@gdbots/schemas/gdbots/analytics/tracker/KeenV1.js'),
  'gdbots:common::search-filter:v1': () => import('@gdbots/schemas/gdbots/common/SearchFilterV1.js'),
  'gdbots:contexts::app:v1': () => import('@gdbots/schemas/gdbots/contexts/AppV1.js'),
  'gdbots:contexts::cloud:v1': () => import('@gdbots/schemas/gdbots/contexts/CloudV1.js'),
  'gdbots:contexts::user-agent:v1': () => import('@gdbots/schemas/gdbots/contexts/UserAgentV1.js'),
  'gdbots:forms:field:address-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/AddressFieldV1.js'),
  'gdbots:forms:field:age-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/AgeFieldV1.js'),
  'gdbots:forms:field:country-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/CountryFieldV1.js'),
  'gdbots:forms:field:date-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/DateFieldV1.js'),
  'gdbots:forms:field:dob-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/DobFieldV1.js'),
  'gdbots:forms:field:document-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/DocumentFieldV1.js'),
  'gdbots:forms:field:email-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/EmailFieldV1.js'),
  'gdbots:forms:field:facebook-user-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/FacebookUserFieldV1.js'),
  'gdbots:forms:field:gender-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/GenderFieldV1.js'),
  'gdbots:forms:field:height-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/HeightFieldV1.js'),
  'gdbots:forms:field:instagram-user-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/InstagramUserFieldV1.js'),
  'gdbots:forms:field:legal-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/LegalFieldV1.js'),
  'gdbots:forms:field:long-text-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/LongTextFieldV1.js'),
  'gdbots:forms:field:number-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/NumberFieldV1.js'),
  'gdbots:forms:field:phone-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/PhoneFieldV1.js'),
  'gdbots:forms:field:photo-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/PhotoFieldV1.js'),
  'gdbots:forms:field:pinterest-user-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/PinterestUserFieldV1.js'),
  'gdbots:forms:field:select-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/SelectFieldV1.js'),
  'gdbots:forms:field:sexual-orientation-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/SexualOrientationFieldV1.js'),
  'gdbots:forms:field:short-text-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/ShortTextFieldV1.js'),
  'gdbots:forms:field:signature-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/SignatureFieldV1.js'),
  'gdbots:forms:field:skype-user-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/SkypeUserFieldV1.js'),
  'gdbots:forms:field:snapchat-user-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/SnapchatUserFieldV1.js'),
  'gdbots:forms:field:statement-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/StatementFieldV1.js'),
  'gdbots:forms:field:tiktok-user-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/TiktokUserFieldV1.js'),
  'gdbots:forms:field:tiktok-video-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/TiktokVideoFieldV1.js'),
  'gdbots:forms:field:twitter-user-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/TwitterUserFieldV1.js'),
  'gdbots:forms:field:video-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/VideoFieldV1.js'),
  'gdbots:forms:field:website-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/WebsiteFieldV1.js'),
  'gdbots:forms:field:weight-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/WeightFieldV1.js'),
  'gdbots:forms:field:yes-no-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/YesNoFieldV1.js'),
  'gdbots:forms:field:youtube-user-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/YoutubeUserFieldV1.js'),
  'gdbots:forms:field:youtube-video-field:v1': () => import('@gdbots/schemas/gdbots/forms/field/YoutubeVideoFieldV1.js'),
  'gdbots:geo::address:v1': () => import('@gdbots/schemas/gdbots/geo/AddressV1.js'),
  'gdbots:iam:command:grant-roles-to-app:v1': () => import('@gdbots/schemas/gdbots/iam/command/GrantRolesToAppV1.js'),
  'gdbots:iam:command:grant-roles-to-user:v1': () => import('@gdbots/schemas/gdbots/iam/command/GrantRolesToUserV1.js'),
  'gdbots:iam:command:revoke-roles-from-app:v1': () => import('@gdbots/schemas/gdbots/iam/command/RevokeRolesFromAppV1.js'),
  'gdbots:iam:command:revoke-roles-from-user:v1': () => import('@gdbots/schemas/gdbots/iam/command/RevokeRolesFromUserV1.js'),
  'gdbots:iam:event:app-roles-granted:v1': () => import('@gdbots/schemas/gdbots/iam/event/AppRolesGrantedV1.js'),
  'gdbots:iam:event:app-roles-revoked:v1': () => import('@gdbots/schemas/gdbots/iam/event/AppRolesRevokedV1.js'),
  'gdbots:iam:event:user-roles-granted:v1': () => import('@gdbots/schemas/gdbots/iam/event/UserRolesGrantedV1.js'),
  'gdbots:iam:event:user-roles-revoked:v1': () => import('@gdbots/schemas/gdbots/iam/event/UserRolesRevokedV1.js'),
  'gdbots:iam:request:get-user-request:v1': () => import('@gdbots/schemas/gdbots/iam/request/GetUserRequestV1.js'),
  'gdbots:iam:request:get-user-response:v1': () => import('@gdbots/schemas/gdbots/iam/request/GetUserResponseV1.js'),
  'gdbots:iam:request:search-apps-request:v1': () => import('@gdbots/schemas/gdbots/iam/request/SearchAppsRequestV1.js'),
  'gdbots:iam:request:search-apps-response:v1': () => import('@gdbots/schemas/gdbots/iam/request/SearchAppsResponseV1.js'),
  'gdbots:iam:request:search-roles-request:v1': () => import('@gdbots/schemas/gdbots/iam/request/SearchRolesRequestV1.js'),
  'gdbots:iam:request:search-roles-response:v1': () => import('@gdbots/schemas/gdbots/iam/request/SearchRolesResponseV1.js'),
  'gdbots:iam:request:search-users-request:v1': () => import('@gdbots/schemas/gdbots/iam/request/SearchUsersRequestV1.js'),
  'gdbots:iam:request:search-users-response:v1': () => import('@gdbots/schemas/gdbots/iam/request/SearchUsersResponseV1.js'),
  'gdbots:ncr:command:create-edge:v1': () => import('@gdbots/schemas/gdbots/ncr/command/CreateEdgeV1.js'),
  'gdbots:ncr:command:create-node:v1': () => import('@gdbots/schemas/gdbots/ncr/command/CreateNodeV1.js'),
  'gdbots:ncr:command:delete-edge:v1': () => import('@gdbots/schemas/gdbots/ncr/command/DeleteEdgeV1.js'),
  'gdbots:ncr:command:delete-node:v1': () => import('@gdbots/schemas/gdbots/ncr/command/DeleteNodeV1.js'),
  'gdbots:ncr:command:expire-node:v1': () => import('@gdbots/schemas/gdbots/ncr/command/ExpireNodeV1.js'),
  'gdbots:ncr:command:lock-node:v1': () => import('@gdbots/schemas/gdbots/ncr/command/LockNodeV1.js'),
  'gdbots:ncr:command:mark-node-as-draft:v1': () => import('@gdbots/schemas/gdbots/ncr/command/MarkNodeAsDraftV1.js'),
  'gdbots:ncr:command:mark-node-as-pending:v1': () => import('@gdbots/schemas/gdbots/ncr/command/MarkNodeAsPendingV1.js'),
  'gdbots:ncr:command:publish-node:v1': () => import('@gdbots/schemas/gdbots/ncr/command/PublishNodeV1.js'),
  'gdbots:ncr:command:rename-node:v1': () => import('@gdbots/schemas/gdbots/ncr/command/RenameNodeV1.js'),
  'gdbots:ncr:command:unlock-node:v1': () => import('@gdbots/schemas/gdbots/ncr/command/UnlockNodeV1.js'),
  'gdbots:ncr:command:unpublish-node:v1': () => import('@gdbots/schemas/gdbots/ncr/command/UnpublishNodeV1.js'),
  'gdbots:ncr:command:update-node-labels:v1': () => import('@gdbots/schemas/gdbots/ncr/command/UpdateNodeLabelsV1.js'),
  'gdbots:ncr:command:update-node-tags:v1': () => import('@gdbots/schemas/gdbots/ncr/command/UpdateNodeTagsV1.js'),
  'gdbots:ncr:command:update-node:v1': () => import('@gdbots/schemas/gdbots/ncr/command/UpdateNodeV1.js'),
  'gdbots:ncr:event:edge-created:v1': () => import('@gdbots/schemas/gdbots/ncr/event/EdgeCreatedV1.js'),
  'gdbots:ncr:event:edge-deleted:v1': () => import('@gdbots/schemas/gdbots/ncr/event/EdgeDeletedV1.js'),
  'gdbots:ncr:event:node-created:v1': () => import('@gdbots/schemas/gdbots/ncr/event/NodeCreatedV1.js'),
  'gdbots:ncr:event:node-deleted:v1': () => import('@gdbots/schemas/gdbots/ncr/event/NodeDeletedV1.js'),
  'gdbots:ncr:event:node-expired:v1': () => import('@gdbots/schemas/gdbots/ncr/event/NodeExpiredV1.js'),
  'gdbots:ncr:event:node-labels-updated:v1': () => import('@gdbots/schemas/gdbots/ncr/event/NodeLabelsUpdatedV1.js'),
  'gdbots:ncr:event:node-locked:v1': () => import('@gdbots/schemas/gdbots/ncr/event/NodeLockedV1.js'),
  'gdbots:ncr:event:node-marked-as-draft:v1': () => import('@gdbots/schemas/gdbots/ncr/event/NodeMarkedAsDraftV1.js'),
  'gdbots:ncr:event:node-marked-as-pending:v1': () => import('@gdbots/schemas/gdbots/ncr/event/NodeMarkedAsPendingV1.js'),
  'gdbots:ncr:event:node-published:v1': () => import('@gdbots/schemas/gdbots/ncr/event/NodePublishedV1.js'),
  'gdbots:ncr:event:node-renamed:v1': () => import('@gdbots/schemas/gdbots/ncr/event/NodeRenamedV1.js'),
  'gdbots:ncr:event:node-scheduled:v1': () => import('@gdbots/schemas/gdbots/ncr/event/NodeScheduledV1.js'),
  'gdbots:ncr:event:node-tags-updated:v1': () => import('@gdbots/schemas/gdbots/ncr/event/NodeTagsUpdatedV1.js'),
  'gdbots:ncr:event:node-unlocked:v1': () => import('@gdbots/schemas/gdbots/ncr/event/NodeUnlockedV1.js'),
  'gdbots:ncr:event:node-unpublished:v1': () => import('@gdbots/schemas/gdbots/ncr/event/NodeUnpublishedV1.js'),
  'gdbots:ncr:event:node-updated:v1': () => import('@gdbots/schemas/gdbots/ncr/event/NodeUpdatedV1.js'),
  'gdbots:ncr:request:get-node-batch-request:v1': () => import('@gdbots/schemas/gdbots/ncr/request/GetNodeBatchRequestV1.js'),
  'gdbots:ncr:request:get-node-batch-response:v1': () => import('@gdbots/schemas/gdbots/ncr/request/GetNodeBatchResponseV1.js'),
  'gdbots:ncr:request:get-node-history-request:v1': () => import('@gdbots/schemas/gdbots/ncr/request/GetNodeHistoryRequestV1.js'),
  'gdbots:ncr:request:get-node-history-response:v1': () => import('@gdbots/schemas/gdbots/ncr/request/GetNodeHistoryResponseV1.js'),
  'gdbots:ncr:request:get-node-request:v1': () => import('@gdbots/schemas/gdbots/ncr/request/GetNodeRequestV1.js'),
  'gdbots:ncr:request:get-node-response:v1': () => import('@gdbots/schemas/gdbots/ncr/request/GetNodeResponseV1.js'),
  'gdbots:pbjx::envelope:v1': () => import('@gdbots/schemas/gdbots/pbjx/EnvelopeV1.js'),
  'gdbots:pbjx:command:check-health:v1': () => import('@gdbots/schemas/gdbots/pbjx/command/CheckHealthV1.js'),
  'gdbots:pbjx:event:event-execution-failed:v1': () => import('@gdbots/schemas/gdbots/pbjx/event/EventExecutionFailedV1.js'),
  'gdbots:pbjx:event:health-checked:v1': () => import('@gdbots/schemas/gdbots/pbjx/event/HealthCheckedV1.js'),
  'gdbots:pbjx:request:echo-request:v1': () => import('@gdbots/schemas/gdbots/pbjx/request/EchoRequestV1.js'),
  'gdbots:pbjx:request:echo-response:v1': () => import('@gdbots/schemas/gdbots/pbjx/request/EchoResponseV1.js'),
  'gdbots:pbjx:request:request-failed-response:v1': () => import('@gdbots/schemas/gdbots/pbjx/request/RequestFailedResponseV1.js'),
  'triniti:apollo:command:add-reactions:v1': () => import('@triniti/schemas/triniti/apollo/command/AddReactionsV1.js'),
  'triniti:apollo:command:cast-vote:v1': () => import('@triniti/schemas/triniti/apollo/command/CastVoteV1.js'),
  'triniti:apollo:event:reactions-added:v1': () => import('@triniti/schemas/triniti/apollo/event/ReactionsAddedV1.js'),
  'triniti:apollo:event:vote-casted:v1': () => import('@triniti/schemas/triniti/apollo/event/VoteCastedV1.js'),
  'triniti:apollo:request:search-polls-request:v1': () => import('@triniti/schemas/triniti/apollo/request/SearchPollsRequestV1.js'),
  'triniti:apollo:request:search-polls-response:v1': () => import('@triniti/schemas/triniti/apollo/request/SearchPollsResponseV1.js'),
  'triniti:boost:request:search-sponsors-request:v1': () => import('@triniti/schemas/triniti/boost/request/SearchSponsorsRequestV1.js'),
  'triniti:boost:request:search-sponsors-response:v1': () => import('@triniti/schemas/triniti/boost/request/SearchSponsorsResponseV1.js'),
  'triniti:canvas:request:search-pages-request:v1': () => import('@triniti/schemas/triniti/canvas/request/SearchPagesRequestV1.js'),
  'triniti:canvas:request:search-pages-response:v1': () => import('@triniti/schemas/triniti/canvas/request/SearchPagesResponseV1.js'),
  'triniti:common::render-context:v1': () => import('@triniti/schemas/triniti/common/RenderContextV1.js'),
  'triniti:curator::slot:v1': () => import('@triniti/schemas/triniti/curator/SlotV1.js'),
  'triniti:curator:command:remove-teaser-slotting:v1': () => import('@triniti/schemas/triniti/curator/command/RemoveTeaserSlottingV1.js'),
  'triniti:curator:command:sync-teaser:v1': () => import('@triniti/schemas/triniti/curator/command/SyncTeaserV1.js'),
  'triniti:curator:command:update-gallery-image-count:v1': () => import('@triniti/schemas/triniti/curator/command/UpdateGalleryImageCountV1.js'),
  'triniti:curator:event:gallery-image-count-updated:v1': () => import('@triniti/schemas/triniti/curator/event/GalleryImageCountUpdatedV1.js'),
  'triniti:curator:event:teaser-slotting-removed:v1': () => import('@triniti/schemas/triniti/curator/event/TeaserSlottingRemovedV1.js'),
  'triniti:curator:request:render-promotion-request:v1': () => import('@triniti/schemas/triniti/curator/request/RenderPromotionRequestV1.js'),
  'triniti:curator:request:render-promotion-response:v1': () => import('@triniti/schemas/triniti/curator/request/RenderPromotionResponseV1.js'),
  'triniti:curator:request:render-widget-request:v1': () => import('@triniti/schemas/triniti/curator/request/RenderWidgetRequestV1.js'),
  'triniti:curator:request:render-widget-response:v1': () => import('@triniti/schemas/triniti/curator/request/RenderWidgetResponseV1.js'),
  'triniti:curator:request:search-galleries-request:v1': () => import('@triniti/schemas/triniti/curator/request/SearchGalleriesRequestV1.js'),
  'triniti:curator:request:search-galleries-response:v1': () => import('@triniti/schemas/triniti/curator/request/SearchGalleriesResponseV1.js'),
  'triniti:curator:request:search-promotions-request:v1': () => import('@triniti/schemas/triniti/curator/request/SearchPromotionsRequestV1.js'),
  'triniti:curator:request:search-promotions-response:v1': () => import('@triniti/schemas/triniti/curator/request/SearchPromotionsResponseV1.js'),
  'triniti:curator:request:search-teasers-request:v1': () => import('@triniti/schemas/triniti/curator/request/SearchTeasersRequestV1.js'),
  'triniti:curator:request:search-teasers-response:v1': () => import('@triniti/schemas/triniti/curator/request/SearchTeasersResponseV1.js'),
  'triniti:curator:request:search-timelines-request:v1': () => import('@triniti/schemas/triniti/curator/request/SearchTimelinesRequestV1.js'),
  'triniti:curator:request:search-timelines-response:v1': () => import('@triniti/schemas/triniti/curator/request/SearchTimelinesResponseV1.js'),
  'triniti:curator:request:search-widgets-request:v1': () => import('@triniti/schemas/triniti/curator/request/SearchWidgetsRequestV1.js'),
  'triniti:curator:request:search-widgets-response:v1': () => import('@triniti/schemas/triniti/curator/request/SearchWidgetsResponseV1.js'),
  'triniti:dam:command:link-assets:v1': () => import('@triniti/schemas/triniti/dam/command/LinkAssetsV1.js'),
  'triniti:dam:command:patch-assets:v1': () => import('@triniti/schemas/triniti/dam/command/PatchAssetsV1.js'),
  'triniti:dam:command:reorder-gallery-assets:v1': () => import('@triniti/schemas/triniti/dam/command/ReorderGalleryAssetsV1.js'),
  'triniti:dam:command:unlink-assets:v1': () => import('@triniti/schemas/triniti/dam/command/UnlinkAssetsV1.js'),
  'triniti:dam:event:asset-linked:v1': () => import('@triniti/schemas/triniti/dam/event/AssetLinkedV1.js'),
  'triniti:dam:event:asset-patched:v1': () => import('@triniti/schemas/triniti/dam/event/AssetPatchedV1.js'),
  'triniti:dam:event:asset-unlinked:v1': () => import('@triniti/schemas/triniti/dam/event/AssetUnlinkedV1.js'),
  'triniti:dam:event:gallery-asset-reordered:v1': () => import('@triniti/schemas/triniti/dam/event/GalleryAssetReorderedV1.js'),
  'triniti:dam:request:get-upload-urls-request:v1': () => import('@triniti/schemas/triniti/dam/request/GetUploadUrlsRequestV1.js'),
  'triniti:dam:request:get-upload-urls-response:v1': () => import('@triniti/schemas/triniti/dam/request/GetUploadUrlsResponseV1.js'),
  'triniti:dam:request:search-assets-request:v1': () => import('@triniti/schemas/triniti/dam/request/SearchAssetsRequestV1.js'),
  'triniti:dam:request:search-assets-response:v1': () => import('@triniti/schemas/triniti/dam/request/SearchAssetsResponseV1.js'),
  'triniti:migrator:command:sync-cf-nodes:v1': () => import('@triniti/schemas/triniti/migrator/command/SyncCfNodesV1.js'),
  'triniti:news:command:collect-article-stats:v1': () => import('@triniti/schemas/triniti/news/command/CollectArticleStatsV1.js'),
  'triniti:news:command:remove-article-slotting:v1': () => import('@triniti/schemas/triniti/news/command/RemoveArticleSlottingV1.js'),
  'triniti:news:command:sync-facebook-instant-article:v1': () => import('@triniti/schemas/triniti/news/command/SyncFacebookInstantArticleV1.js'),
  'triniti:news:event:apple-news-article-synced:v1': () => import('@triniti/schemas/triniti/news/event/AppleNewsArticleSyncedV1.js'),
  'triniti:news:event:article-slotting-removed:v1': () => import('@triniti/schemas/triniti/news/event/ArticleSlottingRemovedV1.js'),
  'triniti:news:event:article-stats-collected:v1': () => import('@triniti/schemas/triniti/news/event/ArticleStatsCollectedV1.js'),
  'triniti:news:event:facebook-instant-article-synced:v1': () => import('@triniti/schemas/triniti/news/event/FacebookInstantArticleSyncedV1.js'),
  'triniti:news:request:search-articles-request:v1': () => import('@triniti/schemas/triniti/news/request/SearchArticlesRequestV1.js'),
  'triniti:news:request:search-articles-response:v1': () => import('@triniti/schemas/triniti/news/request/SearchArticlesResponseV1.js'),
  'triniti:notify::notifier-result:v1': () => import('@triniti/schemas/triniti/notify/NotifierResultV1.js'),
  'triniti:notify:command:send-notification:v1': () => import('@triniti/schemas/triniti/notify/command/SendNotificationV1.js'),
  'triniti:notify:event:notification-failed:v1': () => import('@triniti/schemas/triniti/notify/event/NotificationFailedV1.js'),
  'triniti:notify:event:notification-sent:v1': () => import('@triniti/schemas/triniti/notify/event/NotificationSentV1.js'),
  'triniti:notify:request:search-notifications-request:v1': () => import('@triniti/schemas/triniti/notify/request/SearchNotificationsRequestV1.js'),
  'triniti:notify:request:search-notifications-response:v1': () => import('@triniti/schemas/triniti/notify/request/SearchNotificationsResponseV1.js'),
  'triniti:ovp.jwplayer:command:sync-media:v1': () => import('@triniti/schemas/triniti/ovp.jwplayer/command/SyncMediaV1.js'),
  'triniti:ovp.jwplayer:event:media-synced:v1': () => import('@triniti/schemas/triniti/ovp.jwplayer/event/MediaSyncedV1.js'),
  'triniti:ovp.kaltura::caption:v1': () => import('@triniti/schemas/triniti/ovp.kaltura/CaptionV1.js'),
  'triniti:ovp.kaltura::entry:v1': () => import('@triniti/schemas/triniti/ovp.kaltura/EntryV1.js'),
  'triniti:ovp.kaltura::flavor:v1': () => import('@triniti/schemas/triniti/ovp.kaltura/FlavorV1.js'),
  'triniti:ovp.kaltura:command:sync-entry:v1': () => import('@triniti/schemas/triniti/ovp.kaltura/command/SyncEntryV1.js'),
  'triniti:ovp.medialive:command:start-channel:v1': () => import('@triniti/schemas/triniti/ovp.medialive/command/StartChannelV1.js'),
  'triniti:ovp.medialive:command:stop-channel:v1': () => import('@triniti/schemas/triniti/ovp.medialive/command/StopChannelV1.js'),
  'triniti:ovp.medialive:event:channel-started:v1': () => import('@triniti/schemas/triniti/ovp.medialive/event/ChannelStartedV1.js'),
  'triniti:ovp.medialive:event:channel-stopped:v1': () => import('@triniti/schemas/triniti/ovp.medialive/event/ChannelStoppedV1.js'),
  'triniti:ovp:command:update-transcoding-status:v1': () => import('@triniti/schemas/triniti/ovp/command/UpdateTranscodingStatusV1.js'),
  'triniti:ovp:command:update-transcription-status:v1': () => import('@triniti/schemas/triniti/ovp/command/UpdateTranscriptionStatusV1.js'),
  'triniti:ovp:event:transcoding-completed:v1': () => import('@triniti/schemas/triniti/ovp/event/TranscodingCompletedV1.js'),
  'triniti:ovp:event:transcoding-failed:v1': () => import('@triniti/schemas/triniti/ovp/event/TranscodingFailedV1.js'),
  'triniti:ovp:event:transcoding-started:v1': () => import('@triniti/schemas/triniti/ovp/event/TranscodingStartedV1.js'),
  'triniti:ovp:event:transcription-completed:v1': () => import('@triniti/schemas/triniti/ovp/event/TranscriptionCompletedV1.js'),
  'triniti:ovp:event:transcription-failed:v1': () => import('@triniti/schemas/triniti/ovp/event/TranscriptionFailedV1.js'),
  'triniti:ovp:event:transcription-started:v1': () => import('@triniti/schemas/triniti/ovp/event/TranscriptionStartedV1.js'),
  'triniti:ovp:request:search-videos-request:v1': () => import('@triniti/schemas/triniti/ovp/request/SearchVideosRequestV1.js'),
  'triniti:ovp:request:search-videos-response:v1': () => import('@triniti/schemas/triniti/ovp/request/SearchVideosResponseV1.js'),
  'triniti:people:request:search-people-request:v1': () => import('@triniti/schemas/triniti/people/request/SearchPeopleRequestV1.js'),
  'triniti:people:request:search-people-response:v1': () => import('@triniti/schemas/triniti/people/request/SearchPeopleResponseV1.js'),
  'triniti:sys:command:inspect-seo:v1': () => import('@triniti/schemas/triniti/sys/command/InspectSeoV1.js'),
  'triniti:sys:command:purge-cache:v1': () => import('@triniti/schemas/triniti/sys/command/PurgeCacheV1.js'),
  'triniti:sys:event:seo-inspected:v1': () => import('@triniti/schemas/triniti/sys/event/SeoInspectedV1.js'),
  'triniti:sys:request:get-redirect-request:v1': () => import('@triniti/schemas/triniti/sys/request/GetRedirectRequestV1.js'),
  'triniti:sys:request:get-redirect-response:v1': () => import('@triniti/schemas/triniti/sys/request/GetRedirectResponseV1.js'),
  'triniti:sys:request:search-flagsets-request:v1': () => import('@triniti/schemas/triniti/sys/request/SearchFlagsetsRequestV1.js'),
  'triniti:sys:request:search-flagsets-response:v1': () => import('@triniti/schemas/triniti/sys/request/SearchFlagsetsResponseV1.js'),
  'triniti:sys:request:search-picklists-request:v1': () => import('@triniti/schemas/triniti/sys/request/SearchPicklistsRequestV1.js'),
  'triniti:sys:request:search-picklists-response:v1': () => import('@triniti/schemas/triniti/sys/request/SearchPicklistsResponseV1.js'),
  'triniti:sys:request:search-redirects-request:v1': () => import('@triniti/schemas/triniti/sys/request/SearchRedirectsRequestV1.js'),
  'triniti:sys:request:search-redirects-response:v1': () => import('@triniti/schemas/triniti/sys/request/SearchRedirectsResponseV1.js'),
  'triniti:taxonomy:request:search-categories-request:v1': () => import('@triniti/schemas/triniti/taxonomy/request/SearchCategoriesRequestV1.js'),
  'triniti:taxonomy:request:search-categories-response:v1': () => import('@triniti/schemas/triniti/taxonomy/request/SearchCategoriesResponseV1.js'),
  'triniti:taxonomy:request:search-channels-request:v1': () => import('@triniti/schemas/triniti/taxonomy/request/SearchChannelsRequestV1.js'),
  'triniti:taxonomy:request:search-channels-response:v1': () => import('@triniti/schemas/triniti/taxonomy/request/SearchChannelsResponseV1.js'),
  'triniti:taxonomy:request:suggest-hashtags-request:v1': () => import('@triniti/schemas/triniti/taxonomy/request/SuggestHashtagsRequestV1.js'),
  'triniti:taxonomy:request:suggest-hashtags-response:v1': () => import('@triniti/schemas/triniti/taxonomy/request/SuggestHashtagsResponseV1.js'),
};
