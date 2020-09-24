# CHANGELOG


## v2.0.0
__BREAKING CHANGES__

* Use gdbots/pbjc v1.x and gdbots/pbj v3.x.
* Replace all identifier fields using NodeRef with new node-ref type.
* Use PHP7 typehinting in all insertion points for php.
* Use new fget method where possible in insertion points.
* Remove use of identifier classes where uuid can be used, e.g. UserId, AppId.
* __Deprecated Schemas:__ (these will be removed in 3.x)
  * `triniti:apollo:mixin:cast-vote`
  * `triniti:apollo:mixin:search-polls-request`
  * `triniti:apollo:mixin:search-polls-response`
  * `triniti:apollo:mixin:vote-casted`
  * `triniti:boost:mixin:search-sponsors-request`
  * `triniti:boost:mixin:search-sponsors-response`
  * `triniti:canvas:mixin:search-pages-request`
  * `triniti:canvas:mixin:search-pages-response`
  * `triniti:curator:mixin:gallery-image-count-updated`
  * `triniti:curator:mixin:remove-teaser-slotting`
  * `triniti:curator:mixin:render-promotion-request`
  * `triniti:curator:mixin:render-promotion-response`
  * `triniti:curator:mixin:render-widget-request`
  * `triniti:curator:mixin:render-widget-response`
  * `triniti:curator:mixin:search-galleries-request`
  * `triniti:curator:mixin:search-galleries-response`
  * `triniti:curator:mixin:search-promotions-request`
  * `triniti:curator:mixin:search-promotions-response`
  * `triniti:curator:mixin:search-teasers-request`
  * `triniti:curator:mixin:search-teasers-response`
  * `triniti:curator:mixin:search-timelines-request`
  * `triniti:curator:mixin:search-timelines-response`
  * `triniti:curator:mixin:search-widgets-request`
  * `triniti:curator:mixin:search-widgets-response`
  * `triniti:curator:mixin:sync-teaser`
  * `triniti:curator:mixin:teaser-slotting-removed`
  * `triniti:curator:mixin:update-gallery-image-count`
  * `triniti:dam:mixin:asset-linked`
  * `triniti:dam:mixin:asset-patched`
  * `triniti:dam:mixin:asset-unlinked`
  * `triniti:dam:mixin:gallery-asset-reordered`
  * `triniti:dam:mixin:get-upload-urls-request`
  * `triniti:dam:mixin:get-upload-urls-response`
  * `triniti:dam:mixin:link-assets`
  * `triniti:dam:mixin:patch-assets`
  * `triniti:dam:mixin:reorder-gallery-assets`
  * `triniti:dam:mixin:search-assets-request`
  * `triniti:dam:mixin:search-assets-response`
  * `triniti:dam:mixin:unlink-assets`
  * `triniti:news:mixin:apple-news-article-synced`
  * `triniti:news:mixin:article-slotting-removed`
  * `triniti:news:mixin:article-stats-collected`
  * `triniti:news:mixin:collect-article-stats`
  * `triniti:news:mixin:remove-article-slotting`
  * `triniti:news:mixin:search-articles-request`
  * `triniti:news:mixin:search-articles-response`
  * `triniti:notify:mixin:notification-failed`
  * `triniti:notify:mixin:notification-sent`
  * `triniti:notify:mixin:search-notificatons-request`
  * `triniti:notify:mixin:search-notificatons-response`
  * `triniti:notify:mixin:send-notification`
  * `triniti:ovp:mixin:search-videos-request`
  * `triniti:ovp:mixin:search-videos-response`
  * `triniti:people:mixin:search-people-request`
  * `triniti:people:mixin:search-people-response`
  * `triniti:sys:mixin:get-redirect-response`
  * `triniti:sys:mixin:list-all-flagsets-request`
  * `triniti:sys:mixin:list-all-flagsets-response`
  * `triniti:sys:mixin:list-all-picklists-request`
  * `triniti:sys:mixin:list-all-picklists-response`
  * `triniti:sys:mixin:search-redirects-request`
  * `triniti:sys:mixin:search-redirects-response`
  * `triniti:taxonomy:mixin:get-all-channels-request`
  * `triniti:taxonomy:mixin:get-all-channels-response`
  * `triniti:taxonomy:mixin:search-categories-request`
  * `triniti:taxonomy:mixin:search-categories-response`
  * `triniti:taxonomy:mixin:suggest-hashtags-request`
  * `triniti:taxonomy:mixin:suggest-hashtags-response`
* __Add Schemas:__
  * `triniti:apollo:command:cast-vote`
  * `triniti:apollo:event:vote-casted`
  * `triniti:apollo:request:search-polls-request`
  * `triniti:apollo:request:search-polls-response`
  * `triniti:boost:request:search-sponsors-request`
  * `triniti:boost:request:search-sponsors-response`
  * `triniti:canvas:request:search-pages-request`
  * `triniti:canvas:request:search-pages-response`
  * `triniti:curator:command:remove-teaser-slotting`
  * `triniti:curator:command:sync-teaser`
  * `triniti:curator:command:update-gallery-image-count`
  * `triniti:curator:event:gallery-image-count-updated`
  * `triniti:curator:event:teaser-slotting-removed`
  * `triniti:curator:request:render-promotion-request`
  * `triniti:curator:request:render-promotion-response`
  * `triniti:curator:request:render-widget-request`
  * `triniti:curator:request:render-widget-response`
  * `triniti:curator:request:search-galleries-request`
  * `triniti:curator:request:search-galleries-response`
  * `triniti:curator:request:search-promotions-request`
  * `triniti:curator:request:search-promotions-response`
  * `triniti:curator:request:search-teasers-request`
  * `triniti:curator:request:search-teasers-response`
  * `triniti:curator:request:search-timelines-request`
  * `triniti:curator:request:search-timelines-response`
  * `triniti:curator:request:search-widgets-request`
  * `triniti:curator:request:search-widgets-response`
  * `triniti:dam:command:link-assets`
  * `triniti:dam:command:patch-assets`
  * `triniti:dam:command:reorder-gallery-assets`
  * `triniti:dam:command:unlink-assets`
  * `triniti:dam:event:asset-linked`
  * `triniti:dam:event:asset-patched`
  * `triniti:dam:event:asset-unlinked`
  * `triniti:dam:event:gallery-asset-reordered`
  * `triniti:dam:request:get-upload-urls-request`
  * `triniti:dam:request:get-upload-urls-response`
  * `triniti:dam:request:search-assets-request`
  * `triniti:dam:request:search-assets-response`
  * `triniti:news:command:collect-article-stats`
  * `triniti:news:command:remove-article-slotting`
  * `triniti:news:event:apple-news-article-synced`
  * `triniti:news:event:article-slotting-removed`
  * `triniti:news:event:article-stats-collected`
  * `triniti:news:request:search-articles-request`
  * `triniti:news:request:search-articles-response`
  * `triniti:notify:command:send-notification`
  * `triniti:notify:event:notification-failed`
  * `triniti:notify:event:notification-sent`
  * `triniti:notify:request:search-notifications-request`
  * `triniti:notify:request:search-notifications-response`
  * `triniti:ovp:request:search-videos-request`
  * `triniti:ovp:request:search-videos-response`
  * `triniti:people:request:search-people-request`
  * `triniti:people:request:search-people-response`
  * `triniti:sys:request:get-redirect-request`
  * `triniti:sys:request:get-redirect-response`
  * `triniti:sys:request:search-redirects-request`
  * `triniti:sys:request:search-redirects-response`
  * `triniti:taxonomy:request:search-categories-request`
  * `triniti:taxonomy:request:search-categories-response`
  * `triniti:taxonomy:request:suggest-hashtags-request`
  * `triniti:taxonomy:request:suggest-hashtags-response`


## v1.1.13
* __Modify Schemas:__
  * `triniti:common:aspect-ratio`
    * Add `R5by6` and `R6by5` to enum.


## v1.1.12
* Use `gdbots/schemas` v1.6.6.
* __Modify Schemas:__
  * `triniti:news:command:sync-facebook-instant-article` patch revision `1-0-1`
    * Add `fbia_operation` string field.
    * Add `gdbots:common:mixin:taggable`
  * `triniti:news:event:facebook-instant-article-synced` patch revision `1-0-1`
    * Add `fbia_operation` string field.
  * `triniti:ovp:mixin:video` patch revision `1-0-5`
    * Add `recommendations_enabled` boolean field.


## v1.1.11
* __Modify Schemas:__
  * `triniti:ovp.jwplayer:event:media-synced` patch revision `1-0-2`
    * Mark `thumbnail_ref` field as not required.


## v1.1.10
* __Add Schemas:__
  * `triniti:ovp:command:update-transcoding-status`
  * `triniti:ovp:command:update-transcription-status`
  * `triniti:ovp:event:transcoding-completed`
  * `triniti:ovp:event:transcoding-failed`
  * `triniti:ovp:event:transcoding-started`
  * `triniti:ovp:event:transcription-completed`
  * `triniti:ovp:event:transcription-failed`
  * `triniti:ovp:event:transcription-started`
  * `triniti:ovp:mixin:transcodeable`
  * `triniti:ovp:mixin:transcribable`
  * `triniti:ovp:transcoding-status`
  * `triniti:ovp:transcription-status`
* __Modify Schemas:__
  * `triniti:ovp.jwplayer:command:sync-media` patch revision `1-0-1`
    * Add `fields` string set field with pattern `^[\w]+$`.
    * Add `gdbots:common:mixin:taggable`
  * `triniti:ovp.jwplayer:event:media-synced` patch revision `1-0-1`
    * Add `jwplayer_caption_keys` string map field with pattern `^[\w]+$`.
    * Add `thumbnail_ref` identifier (NodeRef) field.


## v1.1.9
* __Add Schemas:__
  * `triniti:news:command:sync-facebook-instant-article`
  * `triniti:news:event:facebook-instant-article-synced`
* __Modify Schemas:__
  * `triniti:news:mixin:article` patch revision `1-0-3`
    * Add `facebook_instant_articles_enabled` boolean field.
  * `triniti:canvas:mixin:article-block` patch revision `1-0-1`
    * Add `cta_text` string field.
  * `triniti:canvas:mixin:node-ref-block` patch revision `1-0-1`
    * Add `title` string field.
  * `triniti:curator:mixin:playlist-widget` patch revision `1-0-1`
    * Add `autoplay` boolean field with default true.


## v1.1.8
* Use `gdbots/schemas` v1.6.5.
* __Add Schemas:__
  * `triniti:canvas:mixin:tumblr-post-block`
  * `triniti:curator::slot`
  * `triniti:curator:slot-rendering`
* __Modify Schemas:__
  * `triniti:canvas:mixin:iframe-block` patch revision `1-0-1`
    * Add `scrolling_enabled` boolean field.
  * `triniti:curator:mixin:promotion` patch revision `1-0-1`
    * Add `slots` message list field with `any-of` to `triniti:curator::slot`.
  * `triniti:notify:mixin:browser-notification` patch revision `1-0-2`
    * Add `require_interaction` boolean field.
  * `triniti:ovp:mixin:video` patch revision `1-0-4`
    * Add `source_urls` text map field with format url.


## v1.1.7
* Use `gdbots/schemas` v1.6.4 with optimized PHP class for NodeRef.


## v1.1.6
* __Modify Schemas:__
  * `triniti:canvas:mixin:document-block` patch revision `1-0-1`
    * Add `aspect_ratio` string-enum field using enum `triniti:common:aspect-ratio`.
  * `triniti:canvas:mixin:gallery-block` patch revision `1-0-2`
    * Add `aspect_ratio` string-enum field using enum `triniti:common:aspect-ratio`.
  * `triniti:ovp:mixin:video` patch revision `1-0-3`
    * Add `youtube_custom_id` string field with pattern `^[\w@#-]+$`.
    * Add `youtube_video_id` string field with pattern `^[\w-]+$`.
* __Add Schemas:__
  * `triniti:ovp.jwplayer:command:sync-media`
  * `triniti:ovp.jwplayer:event:media-synced`
  * `triniti:ovp.jwplayer:mixin:has-media`


## v1.1.5
* __Modify Schemas:__
  * `triniti:canvas:mixin:youtube-playlist-block` _(no version changes as there is no production use yet)_
    * Mark `video_id` field as not required.
  * `triniti:common:ad-size`
    * Add `INSTREAM` and `OUTSTREAM` to enum.
  * `triniti:news:mixin:article` patch revision `1-0-2`
    * Add `smartnews_enabled` boolean field.


## v1.1.4
* Use `gdbots/schemas` v1.6.3.
* __Add Schemas:__
  * `triniti:ovp.medialive:channel-state`


## v1.1.3
* Use `gdbots/schemas` v1.6.2.
* __Add Schemas:__
  * `triniti:ovp.medialive:command:start-channel`
  * `triniti:ovp.medialive:command:stop-channel`
  * `triniti:ovp.medialive:event:channel-started`
  * `triniti:ovp.medialive:event:channel-stopped`
  * `triniti:ovp.medialive:mixin:has-channel`


## v1.1.2
* __Add Schemas:__
  * `triniti:canvas:mixin:spotify-embed-block`
  * `triniti:canvas:mixin:tiktok-embed-block`
* Mark `triniti:canvas:mixin:spotify-track-block` as deprecated, use the more betterer `spotify-embed-block`.


## v1.1.1
* __Modify Schemas:__
  * `triniti:news:mixin:article` patch revision `1-0-2`
    * Add `author_ref` identifier (NodeRef) field.
  * `triniti:ovp:mixin:video` patch revision `1-0-2`
    * Add `live_m3u8_url` text field with format url.


## v1.1.0
* Use `gdbots/schemas` v1.6.0.
* __Modify Schemas:__
  * `triniti:canvas:mixin:image-block` patch revision `1-0-1`
    * Add `launch_text` string field.


## v1.0.7
* __Add Schemas:__
  * `triniti:canvas:mixin:divider-block`
  * `triniti:curator:mixin:has-related-teasers`
  * `triniti:curator:mixin:remove-teaser-slotting`
  * `triniti:curator:mixin:teaser-slotting-removed`
* __Modify Schemas:__
  * `triniti:curator:mixin:search-teasers-request` patch revision `1-0-1`
    * Add `slotting_key` string field with.
  * `triniti:curator:mixin:teaser` patch revision `1-0-2`
    * Add `slotting` tiny-map map field.
  * `triniti:notify:mixin:browser-notification` patch revision `1-0-1`
     * Add `fcm_topics` string set field with pattern `^[\w\/\.:~%#-]+$`.


## v1.0.6
* __Add Schemas:__
  * `triniti:curator:mixin:asset-teaser`
* __Modify Schemas:__
  * `triniti:dam:mixin:asset` patch revision `1-0-1`
    * Add `display_title` string field.
    * Add `credit_url` text field with format url.
    * Add `cta_text` string field.
    * Add `cta_url` text field with format url.
  * `triniti:dam:mixin:asset-patched` patch revision `1-0-2`
    * Add `credit_url` string field.
    * Add `description` text field.
  * `triniti:curator:mixin:gallery` patch revision `1-0-1`
    * Add `credit_url` text field.
  * `triniti:curator:mixin:teaser` patch revision `1-0-1`
    * Add `caption` string field.
    * Add `credit` string field.
    * Add `credit_url` text field with format url.
  * `triniti:curator:mixin:timeline` patch revision `1-0-1`
    * Add `display_title` string field.
  * `triniti:curator:mixin:youtube-video-teaser` patch revision `1-0-1`
    * Add `youtube_custom_id` string field.


## v1.0.5
* __Modify Schemas:__
  * `triniti:dam:mixin:asset-patched` patch revision `1-0-1`
    * Add `title` string field.
    * Add `description` text field.
  * `triniti:dam:mixin:patch-assets` patch revision `1-0-1`
    * Add `title` string field.
    * Add `description` text field.


## v1.0.4
* __Modify Schemas:__
  * `triniti:canvas:mixin:gallery-block` patch revision `1-0-1`
    * Add `start_at_poster` boolean field.
  * `triniti:curator:mixin:gallery` patch revision `1-0-1`
    * Add `next_gallery_ref` identifier (NodeRef) field.
    * Add `prev_gallery_ref` identifier (NodeRef) field.


## v1.0.3
* Use `gdbots/schemas` v1.5.13.
* __Add Schemas:__
  * `triniti:sys:command:purge-cache`
* __Modify Schemas:__
  * `triniti:canvas:mixin:block` patch revision `1-0-1`
    * Add `aside` boolean field.
  * `triniti:common::render-context` patch revision `1-0-1`
    * Add `format` string field with format slug.
  * `triniti:dam:mixin:audio-asset` patch revision `1-0-1`
    * Add `duration` small-int field.
  * `triniti:dam:mixin:video-asset` patch revision `1-0-1`
    * Add `duration` small-int field.
  * `triniti:ovp:mixin:video` patch revision `1-0-1`
    * Add `audio_ref` identifier (NodeRef) field.


## v1.0.2
* __Add Schemas:__
  * `triniti:curator:mixin:gallery-image-count-updated`
  * `triniti:curator:mixin:update-gallery-image-count`
* __Modify Schemas:__
  * `triniti:common:mixin:seo` patch revision `1-0-1`
    * Add `seo_updated_at` date-time field.


## v1.0.1
* __Modify Schemas:__
  * `triniti:news:mixin:article` patch revision `1-0-1`
    * Change `show_related_articles` field default to true.


## v1.0.0
* Peg stable version.


## v0.15.7
* __Modify Schemas:__
  * `triniti:dam:mixin:gallery-assets-reordered`
    * Add `old_gallery_ref` identifier (NodeRef) field.
  * `triniti:dam:mixin:reorder-gallery-assets`
    * Add `old_gallery_refs` identifier (NodeRef) map field.


## v0.15.6
* Use `gdbots/schemas` v1.5.12.


## v0.15.5
* Use `gdbots/schemas` v1.5.11.
* __Modify Schemas:__
  * `triniti:notify:mixin:ios-notification`
    * Add `fcm_topics` string set field with pattern `^[\w\/\.:~%#-]+$`.
  * `triniti:notify:mixin:android-notification`
    * Add `fcm_topics` string set field with pattern `^[\w\/\.:~%#-]+$`.


## v0.15.4
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:news:mixin:article-stats`
    * Add `fb_engagement` int field.


## v0.15.3
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:ovp:mixin:video`
    * Add `is_promo` boolean field.


## v0.15.2
* Use `gdbots/schemas` v1.5.10.
* Use `DateTimeInterface` in `AssetId` for php language.


## v0.15.1
* Use `gdbots/schemas` v1.5.8.


## v0.15.0
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:common:mixin:swipeable`
    * Remove `soft_swipe` field, yes, i know, srsly, wth.


## v0.14.0
__BREAKING CHANGES__

* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:apollo:mixin:poll-stats`
    * Rename `answers` field to `answer_votes` so it doesn't conflict with answers field on poll in elasticsearch.
  * `triniti:notify:mixin:email-notification`
    * Add `subject` string field.
  * `triniti:ovp:mixin:video`
    * Add `sharing_enabled` boolean field.


## v0.13.2
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:apollo:mixin:vote-casted`
    * Add `s16` tiny-int field.
    * Add `s32` tiny-int field.
    * Add `s256` tiny-int field.
  * `triniti:news:mixin:apple-news-article-synced`
    * Change `apple_news_operation` string field pattern to `^(notification|create|update|delete)$`.
    * Set default for `apple_news_operation` field to `notification`.
  * `triniti:news:mixin:article-stats`
    * Add `disqus_comments` int field.
    * Add `disqus_dislikes` int field.
    * Add `disqus_likes` int field.
    * Add `fb_comments` int field.
    * Add `fb_reactions` int field.
    * Add `fb_shares` int field.
    * Add `ga_entrances` int field.
    * Add `ga_entrance_rate` int field.
    * Add `ga_pageviews` int field.
    * Add `ga_unique_pageviews` int field.
    * Add `ga_time_on_page` int field.
    * Add `ga_avg_time_on_page` int field.
    * Add `ga_exits` int field.
    * Add `ga_exit_rate` int field.
  * `triniti:notify:mixin:apple-news-notification`
    * Change `apple_news_operation` string field pattern to `^(notification|create|update|delete)$`.
    * Set default for `apple_news_operation` field to `notification`.


## v0.13.1
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:news:mixin:apple-news-article-synced`
    * Change `apple_news_revision` string field pattern to `^[\w\/\.\\\:=+-]+$`.
  * `triniti:news:mixin:article`
    * Change `apple_news_revision` string field pattern to `^[\w\/\.\\\:=+-]+$`.
  * `triniti:notify:mixin:apple-news-notification`
    * Change `apple_news_revision` string field pattern to `^[\w\/\.\\\:=+-]+$`.


## v0.13.0
__BREAKING CHANGES__

* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:apollo:mixin:search-polls-response`
    * Add mixin `triniti:apollo:mixin:poll-stats` to `nodes` field `any-of`.
  * `triniti:canvas:mixin:search-pages-request`
    * Remove default for `is_unlisted` field.
  * `triniti:curator:mixin:search-galleries-request`
    * Remove default for `is_unlisted` field.
  * `triniti:curator:mixin:search-teasers-request`
    * Remove default for `is_unlisted` field.
  * `triniti:curator:mixin:search-timelines-request`
    * Remove default for `is_unlisted` field.
  * `triniti:migrator:command:sync-cf-nodes`
    * Change field `cf_node_refs` to rule set.
  * `triniti:news:mixin:collect-article-stats`
    * Add `provider` string field with format slug.
  * `triniti:news:mixin:search-articles-request`
    * Remove default for `is_unlisted` field.
  * `triniti:news:mixin:search-articles-response`
    * Add mixin `triniti:news:mixin:article-stats` to `nodes` field `any-of`.
  * `triniti:notify:mixin:apple-news-notification`
    * Remove `apple_news_share_url` field.
  * `triniti:ovp:mixin:search-videos-request`
    * Remove default for `is_unlisted` field.
  * `triniti:ovp.kaltura:command:sync-entry`
    * Add `entry_id` string field with pattern `^[\w-]+$`.
    * Add `partner_id` string field with pattern `^[\w-]+$`.
  * `triniti:people:mixin:search-people-request`
    * Remove default for `is_unlisted` field.
    * Add `is_celebrity` trinary field.


## v0.12.3
* __Add Schemas:__
  * `triniti:news:mixin:article-stats-collected`
  * `triniti:news:mixin:collect-article-stats`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:apollo:mixin:search-polls-request`
    * Add `category_refs` identifier (NodeRef) set field.
    * Add `channel_ref` identifier (NodeRef) field.
    * Add `person_refs` identifier (NodeRef) set field.
  * `triniti:canvas:mixin:search-pages-request`
    * Add `category_refs` identifier (NodeRef) set field.
    * Add `channel_ref` identifier (NodeRef) field.
    * Add `person_refs` identifier (NodeRef) set field.
  * `triniti:curator:mixin:search-galleries-request`
    * Add `category_refs` identifier (NodeRef) set field.
    * Add `channel_ref` identifier (NodeRef) field.
    * Add `person_refs` identifier (NodeRef) set field.
  * `triniti:curator:mixin:search-teasers-request`
    * Add `category_refs` identifier (NodeRef) set field.
    * Add `channel_ref` identifier (NodeRef) field.
    * Add `person_refs` identifier (NodeRef) set field.
  * `triniti:curator:mixin:search-timelines-request`
    * Add `category_refs` identifier (NodeRef) set field.
    * Add `channel_ref` identifier (NodeRef) field.
    * Add `person_refs` identifier (NodeRef) set field.
  * `triniti:dam:mixin:search-assets-request`
    * Add `category_refs` identifier (NodeRef) set field.
    * Add `channel_ref` identifier (NodeRef) field.
    * Add `person_refs` identifier (NodeRef) set field.
  * `triniti:news:mixin:search-articles-request`
    * Add `category_refs` identifier (NodeRef) set field.
    * Add `channel_ref` identifier (NodeRef) field.
    * Add `person_refs` identifier (NodeRef) set field.
  * `triniti:ovp:mixin:search-videos-request`
    * Add `category_refs` identifier (NodeRef) set field.
    * Add `channel_ref` identifier (NodeRef) field.
    * Add `person_refs` identifier (NodeRef) set field.
  * `triniti:notify:mixin:apple-news-notification`
    * Add `apple_news_id` uuid field.
    * Add `apple_news_revision` string field with pattern `^[\w\\\/\.:=-]+$`.
    * Add `apple_news_share_url` text field with format url.
    * Add `apple_news_operation` string field with pattern `^(create|update|delete)$`.


## v0.12.2
* __Add Schemas:__
  * `triniti:common:aspect-ratio`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:image-block`
    * Add `aspect_ratio` string-enum field using enum `triniti:common:aspect-ratio`.
  * `triniti:common:ad-size`
    * Add `skin` to enum.  mmmmm skin.
  * `triniti:common:mixin:advertising`
    * Add `dfp_ad_unit_path` string field with pattern `^[\w\/\.:-]+$`.
    * Add pattern `^[\w\/\.:-]+$` to `dfp_cust_params` field.
  * `triniti:common:mixin:swipeable`
    * Add `soft_swipe` string field.
  * `triniti:curator:mixin:ad-widget`
    * Add `dfp_ad_unit_path` string field with pattern `^[\w\/\.:-]+$`.
  * `triniti:news:search-articles-sort`
    * Add `comments` to enum.


## v0.12.1
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:curator:mixin:teaser`
    * Add `partner_url` text field with format url.
    * Add `partner_text` string field.
  * `triniti:ovp:mixin:search-videos-request`
    * Add `show` string field with format slug.
  * `triniti:ovp:mixin:video`
    * Add `show` string field with format slug.


## v0.12.0
__BREAKING CHANGES__

* __Add Schemas:__
  * `triniti:apollo:mixin:poll-stats`
  * `triniti:migrator:command:sync-cf-nodes`
  * `triniti:news:mixin:article-stats`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:curator:mixin:showtimes-widget`
    * Add `include_latest_episode` boolean field.
    * Add `include_latest_promo` boolean field.
    * Add `headline` string field.
    * Add `excerpt` text field.
    * Add `image_ref` identifier (NodeRef) field.
  * `triniti:curator:mixin:tetris-widget`
    * Add `layout` string field with format slug.
  * `triniti:curator:mixin:widget`
    * Add `show_border` boolean field.
    * Add `partner_url` text field with format url.
    * Add `partner_text` string field.
  * `triniti:curator:mixin:widget-has-search-request`
    * Add `prefetched_nodes` message list field with `any-of` to `gdbots:ncr:mixin:node`.
    * Add `show_pagination` boolean field.
    * Add `show_item_cta_text` boolean field.
    * Add `show_item_date` boolean field.
    * Add `show_item_duration` boolean field.
    * Add `show_item_excerpt` boolean field.
    * Add `show_item_icon` boolean field.
    * Add `show_item_media_count` boolean field.
  * `triniti:news:mixin:article`
    * Add `word_count` small-int field.
* __Delete Schemas:__
  * `triniti:migrator:command:sync-cf-node`


## v0.11.2
* __Add Schemas:__
  * `triniti:curator:mixin:alert-widget`
  * `triniti:curator:mixin:gallery-widget`
  * `triniti:curator:mixin:playlist-widget`
  * `triniti:migrator:command:sync-cf-node`
  * `triniti:news:mixin:apple-news-article-synced`
  * `triniti:news:mixin:article-slotting-removed`
  * `triniti:news:mixin:remove-article-slotting`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:news:mixin:article`
    * Add `apple_news_enabled` boolean field.
    * Add `apple_news_id` uuid field.
    * Add `apple_news_revision` string field with pattern `^[\w\\\/\.:=-]+$`.
    * Add `apple_news_share_url` text field with format url.
    * Add `apple_news_updated_at` timestamp field.
    * Add `slotting` tiny-int map field.
  * `triniti:news:mixin:headline-fragments`
    * Add `hf_sizes` tiny-int list field with max of 6.
  * `triniti:news:mixin:search-articles-request`
    * Add `slotting_key` string field with format slug.
    * Remove `timeline_ref` field.
  * `triniti:ovp:mixin:video`
    * Add `show_related_videos` boolean field.
    * Add `related_videos_heading` string field.


## v0.11.1
* __Add Schemas:__
  * `triniti:canvas:mixin:spotify-track-block`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:curator:mixin:render-promotion-response`
    * Remove `from_cache` field.
  * `triniti:curator:mixin:render-widget-response`
    * Remove `from_cache` field.
  * `triniti:people:mixin:person`
    * Add `twitter_username` string field with pattern `^\w{1,15}$`.
    * Add `is_celebrity` boolean field.


## v0.11.0
__BREAKING CHANGES__

* __Add Schemas:__
  * `triniti:common:ad-size`
  * `triniti:curator:mixin:ad-widget`
  * `triniti:curator:mixin:media-list-widget`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * Change all string fields with format url to text to allow for increasingly more common urls longer than 255 bytes.
  * `triniti:curator:mixin:render-widget-response`
    * Change `html` text field to medium-text field.
  * `triniti:curator:mixin:search-promotions-request`
    * Add `render_at` date-time field.
  * `triniti:curator:search-promotions-sort`
    * Add `priority-asc` and `priority-desc` to enum.


## v0.10.0
__BREAKING CHANGES__

* __Add Schemas:__
  * `triniti:curator:mixin:showtimes-widget`
  * `triniti:curator:mixin:spotlight-widget`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:curator:mixin:widget`
    * Add `pre_render_code` text field.
    * Add `post_render_code` text field.
* __Delete Schemas:__
  * `triniti:curator:mixin:card-widget`


## v0.9.0
__BREAKING CHANGES__

* __Add Schemas:__
  * `triniti:curator:mixin:card-widget`
  * `triniti:curator:mixin:code-widget`
  * `triniti:curator:mixin:hero-bar-widget`
  * `triniti:curator:mixin:render-promotion-request`
  * `triniti:curator:mixin:render-promotion-response`
  * `triniti:curator:mixin:render-widget-request`
  * `triniti:curator:mixin:render-widget-response`
  * `triniti:curator:mixin:slider-widget`
  * `triniti:curator:mixin:tag-cloud-widget`
  * `triniti:curator:mixin:widget-has-search-request`
  * `triniti:curator:mixin:widget-search-response`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:audio-block`
    * Add `fallback_src_url` string field with format url.
  * `triniti:canvas:mixin:document-block`
    * Add `fallback_src_url` string field with format url.
  * `triniti:canvas:mixin:poll-grid-block`
    * Rename `poll_refs` field to `node_refs`.
  * `triniti:curator:mixin:blogroll-widget`
    * Rename `promotion_slot` to `promotion_slot_prefix`.
  * `triniti:curator:mixin:widget`
    * Remove `search_request` field.
  * `triniti:common::render-context`
    * Add `promotion_slot` string field with format slug.
* __Delete Schemas:__
  * `triniti:curator:mixin:card-deck-widget`


## v0.8.0
__BREAKING CHANGES__

* __Add Schemas:__
  * `triniti:apollo:mixin:has-poll`
  * `triniti:apollo:mixin:has-polls`
  * `triniti:common::render-context`
  * `triniti:curator:mixin:widget-search-request`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:dam:mixin:get-upload-urls-request`
    * Add `asset_id` identifier (AssetId) field.
  * `triniti:common:mixin:seo`
    * Add `seo_published_at` date-time field.
  * `triniti:curator:mixin:gallery`
    * Add `image_count` medium-int field.
    * Rename `related_galleries` field to `related_gallery_refs`.
  * `triniti:curator:mixin:timeline`
    * Rename `related_timelines` field to `related_timeline_refs`.
  * `triniti:curator:mixin:widget`
    * Change `search_request` message field `any-of` to `triniti:curator:mixin:widget-search-request`.
  * `triniti:news:mixin:article`
    * Rename `related_articles` field to `related_article_refs`.
  * `triniti:news:mixin:search-articles-request`
    * Add `timeline_ref` identifier (NodeRef) field.
  * `triniti:ovp:mixin:video`
    * Add `caption_ref` identifier (NodeRef) field.
    * Rename `related_videos` field to `related_video_refs`.
  * `triniti:people:mixin:has-people`
    * Add `primary_person_refs` identifier (NodeRef) set field.
* __Delete Schemas:__
  * `triniti:canvas:block:render-context`
  * `triniti:curator::widget-render-context`


## v0.7.0
__BREAKING CHANGES__

* Use `gdbots/schemas` v1.5.7.
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:image-block`
    * Add `fallback_src_url` string form with format url.
  * `triniti:notify:mixin:email-notification`
    * Add `sender` string field with format email.
* __Delete Schemas:__
  * `triniti:canvas:mixin:pinterest-board-block`
  * `triniti:canvas:mixin:pinterest-profile-block`
  * `triniti:canvas:mixin:twitter-collection-timeline-block`
  * `triniti:canvas:mixin:twitter-follow-button-block`
  * `triniti:canvas:mixin:twitter-hashtag-button-block`
  * `triniti:canvas:mixin:twitter-likes-timeline-block`
  * `triniti:canvas:mixin:twitter-list-timeline-block`
  * `triniti:canvas:mixin:twitter-mention-button-block`
  * `triniti:canvas:mixin:twitter-moment-block`
  * `triniti:canvas:mixin:twitter-search-timeline-block`
  * `triniti:canvas:mixin:twitter-user-timeline-block`
  * `triniti:canvas:mixin:twitter-video-block`
  * `triniti:canvas:mixin:vevo-video-block`


## v0.6.5
* Use `gdbots/schemas` v1.5.6.
* __Add Schemas:__
  * `triniti:curator:mixin:gridler-widget`
  * `triniti:curator:mixin:tetris-widget`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:curator:mixin:sync-teaser`
    * Remove `target` message field, will use new `ctx_causator` field on commands instead.


## v0.6.4
* Use `gdbots/schemas` v1.5.5.
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:gallery-block`
    * Add `launch_text` string field.
    * Add `poster_image_ref` identifier (NodeRef) field.
  * `triniti:canvas:mixin:video-block`
    * Add `launch_text` string field.
  * `triniti:curator:mixin:gallery`
    * Add `launch_text` string field.
  * `triniti:curator:mixin:sync-teaser`
    * Add `target` message field with `any-of` to `triniti:curator:mixin:teaserable`.
  * `triniti:ovp:mixin:video`
    * Add `launch_text` string field.
  * `triniti:ovp.kaltura::entry`
    * Add `thumbnail_id` string field with pattern `^[\w-]+$`
    * Add `thumbnail_created_at` timestamp field.
    * Add `thumbnail_ext` string field with pattern `^[\w\.-]+$`.


## v0.6.3
* __Add Schemas:__
  * `triniti:curator:mixin:sync-teaser`


## v0.6.2
* __Add Schemas:__
  * `triniti:sys:mixin:flagset`
  * `triniti:sys:mixin:get-redirect-response`
  * `triniti:sys:mixin:list-all-flagsets-request`
  * `triniti:sys:mixin:list-all-flagsets-response`
  * `triniti:sys:mixin:vanity-urlable`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:article-block`
    * Set default to `true` for `show_image` field.
  * `triniti:news:mixin:search-articles-request`
    * Add `is_locked` trinary field.


## v0.6.1
* __Add Schemas:__
  * `triniti:sys:mixin:redirect`
  * `triniti:sys:mixin:search-redirects-request`
  * `triniti:sys:mixin:search-response-request`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:article-block`
    * Add `image_ref` identifier (NodeRef) field.
    * Add `link_text` string field.
    * Add `show_image` boolean field.
  * `triniti:canvas:mixin:audio-block`
    * Add `image_ref` identifier (NodeRef) field.
    * Add `launch_text` string field.
  * `triniti:common:mixin:swipeable`
    * Remove `soft_swipe` string field.
  * `triniti:dam:mixin:get-upload-urls-request`
    * Add `quality` string field with pattern `^[\w\.-]+$`.
    * Add `version` string field with pattern `^[\w\.-]+$`.


## v0.6.0
__BREAKING CHANGES__

* __Add Schemas:__
  * `triniti:common:mixin:swipeable`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:curator:mixin:teaser`
    * Add `cta_text` string field.
    * Remove `related_teasers` identifier list field.
    * Remove `show_only_in_timeline` boolean field.
  * `triniti:news:mixin:article`
    * Remove `swipe` string field.
  * `triniti:ovp:mixin:video`
    * Remove `swipe` string field.


## v0.5.0
__BREAKING CHANGES__

* __Add Schemas:__
  * `triniti:canvas:mixin:page-break-block`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:quote-block`
    * Add `is_pull_quote` boolean field.
  * `triniti:curator:mixin:teaser`
    * Add `gallery_ref` identifier (NodeRef) field.
    * Add `timeline_ref` identifier (NodeRef) field.
    * Add `show_only_in_timeline` boolean field.
* __Delete Schemas:__
  * `triniti:canvas:mixin:pull-quote-block`


## v0.4.0
__BREAKING CHANGES__

* Use `gdbots/schemas` v1.5.4.
* __Add Schemas:__
  * `triniti:curator::widget-render-context`
  * `triniti:curator:mixin:card-deck-widget`
  * `triniti:notify:mixin:email-notification`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:block`
    * Add `updated_date` date-time field.
  * `triniti:curator:mixin:carousel-widget`
    * Add `show_captions` boolean field.
    * Add `show_controls` boolean field.
    * Add `show_position_indicators` boolean field.
  * `triniti:curator:mixin:widget`
    * Add `show_header` boolean field.
    * Add `header_text` string field.
    * Add `view_all_url` string field with format url.
    * Add `view_all_text` string field.
  * `triniti:news:mixin:article`
    * Remove `description` field.
  * `triniti:notify:mixin:notification`
    * Set default to `unknown` for `send_status` field.
  * `triniti:notify:mixin:notification-failed`
    * Remove `response` field.
    * Add `notifier_result` message field with `any-of` to `triniti:notify::notifier-result`.
  * `triniti:notify:mixin:notification-sent`
    * Remove `response` field.
    * Add `notifier_result` message field with `any-of` to `triniti:notify::notifier-result`.
* __Delete Schemas:__
  * `triniti:canvas:mixin:update-block`


## v0.3.2
* __Add Schemas:__
  * `triniti:common:mixin:advertising`
  * `triniti:curator:mixin:blogroll-widget`
  * `triniti:dam:mixin:gallery-asset-reordered`
  * `triniti:dam:mixin:reorder-gallery-assets`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:curator:mixin:widget`
    * Add `search_request` message field with `any-of` to `gdbots:ncr:mixin:search-nodes-request`.
  * `triniti:dam:mixin:asset`
    * Add `gallery_ref` identifier (NodeRef) field.
    * Add `gallery_seq` int field.
  * `triniti:dam:mixin:search-assets-request`
    * Add `gallery_ref` identifier (NodeRef) field.
    * Add `gallery_seq_min` int field.
    * Add `gallery_seq_max` int field.
  * `triniti:dam:search-assets-sort`
    * Add `GALLERY_SEQ_ASC`
    * Add `GALLERY_SEQ_DESC`
  * `triniti:ovp:mixin:video`
    * Add `is_full_episode` boolean field.


## v0.3.1
* __Add Schemas:__
  * `triniti:boost:mixin:sponsorable`


## v0.3.0
__BREAKING CHANGES__

* __Add Schemas:__
  * `triniti:boost:mixin:search-sponsors-request`
  * `triniti:boost:mixin:search-sponsors-response`
  * `triniti:boost:mixin:sponsor`
  * `triniti:canvas:mixin:poll-grid-block`
  * `triniti:common:mixin:themeable`
  * `triniti:notify:mixin:alexa-notification`
  * `triniti:notify:mixin:android-notification`
  * `triniti:notify:mixin:apple-news-notification`
  * `triniti:notify:mixin:browser-notification`
  * `triniti:notify:mixin:has-notifications`
  * `triniti:notify:mixin:ios-notification`
  * `triniti:notify:mixin:notification`
  * `triniti:notify:mixin:notification-failed`
  * `triniti:notify:mixin:notification-sent`
  * `triniti:notify:mixin:search-notifications-request`
  * `triniti:notify:mixin:search-notifications-response`
  * `triniti:notify:mixin:send-notification`
  * `triniti:notify:mixin:slack-notification`
  * `triniti:notify:mixin:sms-notification`
  * `triniti:ovp.kaltura::caption`
  * `triniti:ovp.kaltura::entry`
  * `triniti:ovp.kaltura::flavor`
  * `triniti:ovp.kaltura:command:sync-entry`
  * `triniti:ovp.kaltura:mixin:has-entry`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:curator:mixin:promotion`
    * Change type on `%dow%_start_at` and `%dow%_end_at` fields to string with pattern `^([01]?[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$`.
  * `triniti:curator:mixin:search-promotions-request`
    * Add `slot` string field with format slug.
  * `triniti:curator:mixin:teaser`
    * Remove `content_type` field.
* __Delete Schemas:__
  * `triniti:curator:content-type`
  * `triniti:ovp.kaltura:mixin:media-entry`


## v0.2.5
* __Add Schemas:__
  * `triniti:canvas:mixin:document-block`
  * `triniti:dam:mixin:asset-patched`
  * `triniti:dam:mixin:patch-assets`
  * `triniti:sys:mixin:list-all-picklists-request`
  * `triniti:sys:mixin:list-all-picklists-response`
  * `triniti:sys:mixin:picklist`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:image-block`
    * Add `url` string field with format url.
  * `triniti:canvas:mixin:vimeo-video-block`
    * Add `user_id` string field.
    * Change pattern on `user_name` field to allow spaces.
  * `triniti:curator:mixin:gallery`
    * Add `credit` string field.
    * Change pattern on `user_name` field to allow spaces.
  * `triniti:people:mixin:person`
    * Add `bio` text field.
    * Add `bio_source` string field with format slug.
    * Add `imdb_url` string field with format url.


## v0.2.4
* __Add Schemas:__
  * `triniti:canvas:mixin:soundcloud-audio-block`
  * `triniti:canvas:mixin:vimeo-video-block`
  * `triniti:curator:content-type`
  * `triniti:taxonomy:mixin:suggest-hashtags-request`
  * `triniti:taxonomy:mixin:suggest-hashtags-response`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:apollo:mixin:poll`
    * Add `question` string field.
    * Add `question_url` string field with format url.
  * `triniti:apollo:mixin:poll-answer`
    * Add `url` string field with format url.
  * `triniti:canvas:mixin:imgur-post-block`
    * Rename `context` boolean field to `show_context`.
  * `triniti:canvas:mixin:image-block`
    * Add `caption` text field.
  * `triniti:curator:mixin:promotion`
    * Add `priority` small-int field.
    * Add `%dow%_start_at` and `%dow%_end_at` date-time fields, e.g. `mon_[start|end]_at`.
  * `triniti:curator:mixin:search-teasers-request`
    * Add `content_types` string-enum set field with id `triniti:curator:content-type`.
  * `triniti:curator:mixin:search-widgets-request`
    * Add `types` string set field with format slug.
  * `triniti:curator:mixin:teaser`
    * Add `order_date` date-time field.
    * Add `content_type` string-enum with id `triniti:curator:content-type`.
  * `triniti:dam:mixin:asset`
    * Add `credit` string field.
  * `triniti:people:mixin:search-people-request`
    * Change default on `sort` field to `title-asc`.
  * `triniti:taxonomy:mixin:search-categories-request`
    * Change default on `sort` field to `title-asc`.


## v0.2.3
* __Add Schemas:__
  * `triniti:canvas:mixin:article-block`
  * `triniti:canvas:mixin:audio-block`
  * `triniti:canvas:mixin:poll-block`
  * `triniti:canvas:mixin:update-block`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:facebook-video-block`
    * Add `poster_image_ref` identifier (NodeRef) field.
  * `triniti:canvas:mixin:twitter-video-block`
    * Add `poster_image_ref` identifier (NodeRef) field.
  * `triniti:canvas:mixin:vevo-video-block`
    * Add `poster_image_ref` identifier (NodeRef) field.
  * `triniti:canvas:mixin:video-block`
    * Add `muted` boolean field.
    * Add `show_more_videos` boolean field.
    * Add `poster_image_ref` identifier (NodeRef) field.
  * `triniti:canvas:mixin:youtube-playlist-block`
    * Add `poster_image_ref` identifier (NodeRef) field.
  * `triniti:canvas:mixin:youtube-video-block`
    * Add `poster_image_ref` identifier (NodeRef) field.
  * `triniti:news:mixin:article`
    * Add `classification` string field with format slug.
    * Add `show_related_articles` boolean field.
  * `triniti:ovp:mixin:video`
    * Add `is_live` boolean field.
    * Add `original_air_date` date-time field.


## v0.2.2
* __Add Schemas:__
  * `triniti:curator:mixin:carousel-widget`
  * `triniti:curator:mixin:category-teaser`
  * `triniti:curator:mixin:channel-teaser`
  * `triniti:curator:mixin:link-teaser`
  * `triniti:curator:mixin:page-teaser`
  * `triniti:curator:mixin:person-teaser`
  * `triniti:curator:mixin:poll-teaser`
  * `triniti:dam:mixin:asset-linked`
  * `triniti:dam:mixin:asset-unlinked`
  * `triniti:dam:mixin:link-assets`
  * `triniti:dam:mixin:unlink-assets`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:dam:search-assets-sort`
    * Add sort by `mime-type-desc` and `mime-type-asc`.
  * `triniti:dam:mixin:asset`
    * Rename `associated_refs` field to `linked_refs`.
  * `triniti:dam:mixin:search-assets-request`
    * Rename `associated_ref` field to `linked_ref`.


## v0.2.1
* __Add Schemas:__
  * `triniti:curator:mixin:gallery-teaser`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:video-block`
    * Add `start_at` small-int field.
  * `triniti:canvas:mixin:youtube-video-block`
    * Add `start_at` small-int field.


## v0.2.0
__BREAKING CHANGES__

* __Delete Schemas:__ all Ncr crud (and expire, mark-as-X, publish, etc.) mixins, resolve schemas by convention instead to eliminate extra code (primarily in javascript apps where bundle size is critical).  It is still possible to define a custom mixin and use it but it's optional now.
  * `triniti:apollo:mixin:create-poll`
  * `triniti:apollo:mixin:delete-poll`
  * `triniti:apollo:mixin:expire-poll`
  * `triniti:apollo:mixin:get-poll-batch-request`
  * `triniti:apollo:mixin:get-poll-batch-response`
  * `triniti:apollo:mixin:get-poll-history-request`
  * `triniti:apollo:mixin:get-poll-history-response`
  * `triniti:apollo:mixin:get-poll-request`
  * `triniti:apollo:mixin:get-poll-response`
  * `triniti:apollo:mixin:mark-poll-as-draft`
  * `triniti:apollo:mixin:mark-poll-as-pending`
  * `triniti:apollo:mixin:poll-created`
  * `triniti:apollo:mixin:poll-deleted`
  * `triniti:apollo:mixin:poll-expired`
  * `triniti:apollo:mixin:poll-marked-as-draft`
  * `triniti:apollo:mixin:poll-marked-as-pending`
  * `triniti:apollo:mixin:poll-published`
  * `triniti:apollo:mixin:poll-scheduled`
  * `triniti:apollo:mixin:poll-unpublished`
  * `triniti:apollo:mixin:poll-updated`
  * `triniti:apollo:mixin:publish-poll`
  * `triniti:apollo:mixin:unpublish-poll`
  * `triniti:apollo:mixin:update-poll`
  * `triniti:canvas:mixin:create-page`
  * `triniti:canvas:mixin:delete-page`
  * `triniti:canvas:mixin:expire-page`
  * `triniti:canvas:mixin:get-page-batch-request`
  * `triniti:canvas:mixin:get-page-batch-response`
  * `triniti:canvas:mixin:get-page-history-request`
  * `triniti:canvas:mixin:get-page-history-response`
  * `triniti:canvas:mixin:get-page-request`
  * `triniti:canvas:mixin:get-page-response`
  * `triniti:canvas:mixin:mark-page-as-draft`
  * `triniti:canvas:mixin:mark-page-as-pending`
  * `triniti:canvas:mixin:page-created`
  * `triniti:canvas:mixin:page-deleted`
  * `triniti:canvas:mixin:page-expired`
  * `triniti:canvas:mixin:page-marked-as-draft`
  * `triniti:canvas:mixin:page-marked-as-pending`
  * `triniti:canvas:mixin:page-published`
  * `triniti:canvas:mixin:page-renamed`
  * `triniti:canvas:mixin:page-scheduled`
  * `triniti:canvas:mixin:page-unpublished`
  * `triniti:canvas:mixin:page-updated`
  * `triniti:canvas:mixin:page`
  * `triniti:canvas:mixin:publish-page`
  * `triniti:canvas:mixin:rename-page`
  * `triniti:canvas:mixin:search-pages-request`
  * `triniti:canvas:mixin:search-pages-response`
  * `triniti:canvas:mixin:unpublish-page`
  * `triniti:canvas:mixin:update-page`
  * `triniti:dam:mixin:asset-created`
  * `triniti:dam:mixin:asset-deleted`
  * `triniti:dam:mixin:asset-expired`
  * `triniti:dam:mixin:asset-updated`
  * `triniti:dam:mixin:create-asset`
  * `triniti:dam:mixin:delete-asset`
  * `triniti:dam:mixin:expire-asset`
  * `triniti:dam:mixin:get-asset-batch-request`
  * `triniti:dam:mixin:get-asset-batch-response`
  * `triniti:dam:mixin:get-asset-history-request`
  * `triniti:dam:mixin:get-asset-history-response`
  * `triniti:dam:mixin:get-asset-request`
  * `triniti:dam:mixin:get-asset-response`
  * `triniti:dam:mixin:update-asset`
  * `triniti:news:mixin:article-created`
  * `triniti:news:mixin:article-deleted`
  * `triniti:news:mixin:article-expired`
  * `triniti:news:mixin:article-locked`
  * `triniti:news:mixin:article-marked-as-draft`
  * `triniti:news:mixin:article-marked-as-pending`
  * `triniti:news:mixin:article-published`
  * `triniti:news:mixin:article-renamed`
  * `triniti:news:mixin:article-scheduled`
  * `triniti:news:mixin:article-unlocked`
  * `triniti:news:mixin:article-unpublished`
  * `triniti:news:mixin:article-updated`
  * `triniti:news:mixin:create-article`
  * `triniti:news:mixin:delete-article`
  * `triniti:news:mixin:expire-article`
  * `triniti:news:mixin:get-article-batch-request`
  * `triniti:news:mixin:get-article-batch-response`
  * `triniti:news:mixin:get-article-history-request`
  * `triniti:news:mixin:get-article-history-response`
  * `triniti:news:mixin:get-article-request`
  * `triniti:news:mixin:get-article-response`
  * `triniti:news:mixin:lock-article`
  * `triniti:news:mixin:mark-article-as-draft`
  * `triniti:news:mixin:mark-article-as-pending`
  * `triniti:news:mixin:publish-article`
  * `triniti:news:mixin:rename-article`
  * `triniti:news:mixin:unlock-article`
  * `triniti:news:mixin:unpublish-article`
  * `triniti:news:mixin:update-article`
  * `triniti:ovp:mixin:create-video`
  * `triniti:ovp:mixin:delete-video`
  * `triniti:ovp:mixin:expire-video`
  * `triniti:ovp:mixin:get-video-batch-request`
  * `triniti:ovp:mixin:get-video-batch-response`
  * `triniti:ovp:mixin:get-video-history-request`
  * `triniti:ovp:mixin:get-video-history-response`
  * `triniti:ovp:mixin:get-video-request`
  * `triniti:ovp:mixin:get-video-response`
  * `triniti:ovp:mixin:mark-video-as-draft`
  * `triniti:ovp:mixin:mark-video-as-pending`
  * `triniti:ovp:mixin:publish-video`
  * `triniti:ovp:mixin:rename-video`
  * `triniti:ovp:mixin:unpublish-video`
  * `triniti:ovp:mixin:update-video`
  * `triniti:ovp:mixin:video-created`
  * `triniti:ovp:mixin:video-deleted`
  * `triniti:ovp:mixin:video-expired`
  * `triniti:ovp:mixin:video-marked-as-draft`
  * `triniti:ovp:mixin:video-marked-as-pending`
  * `triniti:ovp:mixin:video-published`
  * `triniti:ovp:mixin:video-renamed`
  * `triniti:ovp:mixin:video-scheduled`
  * `triniti:ovp:mixin:video-unpublished`
  * `triniti:ovp:mixin:video-updated`
  * `triniti:people:mixin:create-person`
  * `triniti:people:mixin:delete-person`
  * `triniti:people:mixin:get-person-history-request`
  * `triniti:people:mixin:get-person-history-response`
  * `triniti:people:mixin:get-person-request`
  * `triniti:people:mixin:get-person-response`
  * `triniti:people:mixin:person-created`
  * `triniti:people:mixin:person-deleted`
  * `triniti:people:mixin:person-renamed`
  * `triniti:people:mixin:person-updated`
  * `triniti:people:mixin:rename-person`
  * `triniti:taxonomy:mixin:category-created`
  * `triniti:taxonomy:mixin:category-deleted`
  * `triniti:taxonomy:mixin:category-renamed`
  * `triniti:taxonomy:mixin:category-updated`
  * `triniti:taxonomy:mixin:channel-created`
  * `triniti:taxonomy:mixin:channel-deleted`
  * `triniti:taxonomy:mixin:channel-renamed`
  * `triniti:taxonomy:mixin:channel-updated`
  * `triniti:taxonomy:mixin:create-category`
  * `triniti:taxonomy:mixin:create-channel`
  * `triniti:taxonomy:mixin:delete-category`
  * `triniti:taxonomy:mixin:delete-channel`
  * `triniti:taxonomy:mixin:get-category-history-request`
  * `triniti:taxonomy:mixin:get-category-history-response`
  * `triniti:taxonomy:mixin:get-category-request`
  * `triniti:taxonomy:mixin:get-category-response`
  * `triniti:taxonomy:mixin:get-channel-history-request`
  * `triniti:taxonomy:mixin:get-channel-history-response`
  * `triniti:taxonomy:mixin:get-channel-request`
  * `triniti:taxonomy:mixin:get-channel-response`
  * `triniti:taxonomy:mixin:rename-category`
  * `triniti:taxonomy:mixin:rename-channel`
  * `triniti:taxonomy:mixin:update-category`
  * `triniti:taxonomy:mixin:update-channel`
* Add `toNodeRef` method to `AssetId` in php and javascript.
* Add identifier for all node `_id` fields in this repo so site level doesn't require a custom id.  Still overridable if desired.
* __Add Schemas:__
  * `triniti:canvas:mixin:image-block`
  * `triniti:canvas:mixin:video-block`
  * `triniti:curator:mixin:article-teaser`
  * `triniti:curator:mixin:gallery`
  * `triniti:curator:mixin:promotion`
  * `triniti:curator:mixin:search-galleries-request`
  * `triniti:curator:mixin:search-galleries-response`
  * `triniti:curator:mixin:search-promotions-request`
  * `triniti:curator:mixin:search-promotions-response`
  * `triniti:curator:mixin:search-teasers-request`
  * `triniti:curator:mixin:search-teasers-response`
  * `triniti:curator:mixin:search-timelines-request`
  * `triniti:curator:mixin:search-timelines-response`
  * `triniti:curator:mixin:search-widgets-request`
  * `triniti:curator:mixin:search-widgets-response`
  * `triniti:curator:mixin:teaser`
  * `triniti:curator:mixin:teaser-has-target`
  * `triniti:curator:mixin:teaserable`
  * `triniti:curator:mixin:timeline`
  * `triniti:curator:mixin:timeline-teaser`
  * `triniti:curator:mixin:video-teaser`
  * `triniti:curator:mixin:widget`
  * `triniti:curator:mixin:youtube-video-teaser`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:has-blocks`
    * Extend `gdbots:ncr:mixin:node:v1` to force concrete message to also be a node.
  * `triniti:dam:mixin:asset`
    * Add `description` text field with with 5000 limit.
  * `triniti:ovp.kaltura:mixin:media-entry`
    * Extend `triniti:ovp:mixin:video:v1` to force concrete message to also be a video.
  * `triniti:people:mixin:has-people`
    * Extend `gdbots:ncr:mixin:node:v1` to force concrete message to also be a node.
  * `triniti:taxonomy:mixin:categorizable`
    * Extend `gdbots:ncr:mixin:node:v1` to force concrete message to also be a node.
  * `triniti:taxonomy:mixin:has-channel`
    * Extend `gdbots:ncr:mixin:node:v1` to force concrete message to also be a node.
  * `triniti:taxonomy:mixin:hashtaggable`
    * Extend `gdbots:ncr:mixin:node:v1` to force concrete message to also be a node.
  * `triniti:taxonomy:mixin:search-categories-request`
    * Add `sort` string-enum field using enum `triniti:taxonomy:search-categories-sort`.


## v0.1.11
* __Add Schemas:__
  * `triniti:canvas:mixin:twitter-follow-button-block`
  * `triniti:canvas:mixin:twitter-hashtag-button-block`
  * `triniti:canvas:mixin:twitter-likes-timeline-block`
  * `triniti:canvas:mixin:twitter-mention-button-block`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:page`
    * Add `layout` string field with format slug.
  * `triniti:canvas:mixin:twitter-collection-timeline-block`
    * Remove `show_replies` field.
    * Add `grid_view` boolean field.
  * `triniti:canvas:mixin:twitter-list-timeline-block`
    * Remove `show_replies` field.
  * `triniti:canvas:mixin:twitter-search-timeline-block`
    * Remove `show_replies` field.
  * `triniti:canvas:mixin:twitter-user-timeline-block`
    * Remove `show_replies` field.
  * `triniti:canvas:mixin:twitter-video-block`
    * Remove `hide_tweet` field.
  * `triniti:ovp.kaltura:mixin:media-entry`
    * Change `kaltura_sync_enabled` field default to true.


## v0.1.10
* __Add Schemas:__
  * `triniti:people:mixin:has-people`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:ovp:mixin:video`
    * Add `max="50"` to `mpm` string field.


## v0.1.9
* Fix invalid schema definition on the dam schemas where `extends="pbj:triniti:dam:mixin:asset:1-0-0"` should be `extends="triniti:dam:mixin:asset:v1"`.


## v0.1.8
* __Add Schemas:__
  * `triniti:dam:mixin:archive-asset`
  * `triniti:dam:mixin:code-asset`
  * `triniti:dam:mixin:unknown-asset`
  * `triniti:people:mixin:create-person`
  * `triniti:people:mixin:delete-person`
  * `triniti:people:mixin:get-person-history-request`
  * `triniti:people:mixin:get-person-history-response`
  * `triniti:people:mixin:get-person-request`
  * `triniti:people:mixin:get-person-response`
  * `triniti:people:mixin:person`
  * `triniti:people:mixin:person-created`
  * `triniti:people:mixin:person-deleted`
  * `triniti:people:mixin:person-renamed`
  * `triniti:people:mixin:person-updated`
  * `triniti:people:mixin:rename-person`
  * `triniti:people:mixin:search-people-request`
  * `triniti:people:mixin:search-people-response`
  * `triniti:people:mixin:update-person`
  * `triniti:taxonomy:mixin:categorizable`
  * `triniti:taxonomy:mixin:category`
  * `triniti:taxonomy:mixin:category-created`
  * `triniti:taxonomy:mixin:category-deleted`
  * `triniti:taxonomy:mixin:category-renamed`
  * `triniti:taxonomy:mixin:category-updated`
  * `triniti:taxonomy:mixin:channel`
  * `triniti:taxonomy:mixin:channel-created`
  * `triniti:taxonomy:mixin:channel-deleted`
  * `triniti:taxonomy:mixin:channel-renamed`
  * `triniti:taxonomy:mixin:channel-updated`
  * `triniti:taxonomy:mixin:create-category`
  * `triniti:taxonomy:mixin:create-channel`
  * `triniti:taxonomy:mixin:delete-category`
  * `triniti:taxonomy:mixin:delete-channel`
  * `triniti:taxonomy:mixin:get-all-channels-request`
  * `triniti:taxonomy:mixin:get-all-channels-response`
  * `triniti:taxonomy:mixin:get-category-history-request`
  * `triniti:taxonomy:mixin:get-category-history-response`
  * `triniti:taxonomy:mixin:get-category-request`
  * `triniti:taxonomy:mixin:get-category-response`
  * `triniti:taxonomy:mixin:get-channel-history-request`
  * `triniti:taxonomy:mixin:get-channel-history-response`
  * `triniti:taxonomy:mixin:get-channel-request`
  * `triniti:taxonomy:mixin:get-channel-response`
  * `triniti:taxonomy:mixin:has-channel`
  * `triniti:taxonomy:mixin:hashtaggable`
  * `triniti:taxonomy:mixin:rename-category`
  * `triniti:taxonomy:mixin:rename-channel`
  * `triniti:taxonomy:mixin:search-categories-request`
  * `triniti:taxonomy:mixin:search-categories-response`
  * `triniti:taxonomy:mixin:update-category`
  * `triniti:taxonomy:mixin:update-channel`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:apollo:mixin:poll`
    * Add `image_ref` identifier (NodeRef) field.
  * `triniti:canvas:mixin:page`
    * Add `image_ref` identifier (NodeRef) field.
  * `triniti:common:mixin:seo`
    * Add `seo_image_ref` identifier (NodeRef) field.
  * `triniti:dam:mixin:asset`
    * Add `associated_refs` identifier (NodeRef) set field.
  * `triniti:dam:mixin:search-assets-request`
    * Add `associated_ref` identifier (NodeRef) field.
  * `triniti:news:mixin:article`
    * Add `image_ref` identifier (NodeRef) field.
  * `triniti:ovp:mixin:video`
    * Rename `mezzanine_id` field to `mezzanine_ref` and use NodeRef instead of AssetId.
    * Add `mpm` string field.
    * Add `image_ref` identifier (NodeRef) field.
    * Add `poster_image_ref` identifier (NodeRef) field.
* __Delete Schemas:__ _(not used and probably won't be needed due to lazy loading and derefs)_
  * `triniti:apollo:mixin:get-poll-batch-request`
  * `triniti:apollo:mixin:get-poll-batch-response`
  * `triniti:canvas:mixin:get-page-batch-request`
  * `triniti:canvas:mixin:get-page-batch-response`
  * `triniti:dam:mixin:get-asset-batch-request`
  * `triniti:dam:mixin:get-asset-batch-response`
  * `triniti:news:mixin:get-article-batch-request`
  * `triniti:news:mixin:get-article-batch-response`
  * `triniti:ovp:mixin:get-video-batch-request`
  * `triniti:ovp:mixin:get-video-batch-response`


## v0.1.7
* __Add Schemas:__
  * `triniti:canvas:mixin:google-map-block`
  * `triniti:ovp:tvpg-rating`
  * `triniti:ovp.kaltura:mixin:media-entry`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:ovp:mixin:video`
    * Add `credit` string field.
    * Add `caption_urls` string field.
    * Add `tvpg_rating` string-enum field using enum `triniti:ovp:tvpg-rating`.
    * Add `mezzanine_url` string field with format url.
    * Add `mezzanine_id` identifier (AssetId) field.
  * `triniti:dam:mixin:get-upload-urls-response`
    * Update `s3_presigned_urls` field type from string to text to allow for the long.


## v0.1.6
* Add missing namespace `triniti:common` to `pbjc.yml` and recompile.


## v0.1.5
* __Add Schemas:__
  * `triniti:canvas:mixin:has-blocks`
  * `triniti:canvas:mixin:heading-block`
  * `triniti:canvas:mixin:pull-quote-block`
  * `triniti:canvas:mixin:quote-block`
  * `triniti:canvas:mixin:text-block`
  * `triniti:common:mixin:custom-code`
  * `triniti:common:mixin:seo`
  * `triniti:dam:mixin:asset`
  * `triniti:dam:mixin:asset-created`
  * `triniti:dam:mixin:asset-deleted`
  * `triniti:dam:mixin:asset-expired`
  * `triniti:dam:mixin:asset-updated`
  * `triniti:dam:mixin:audio-asset`
  * `triniti:dam:mixin:create-asset`
  * `triniti:dam:mixin:delete-asset`
  * `triniti:dam:mixin:document-asset`
  * `triniti:dam:mixin:expire-asset`
  * `triniti:dam:mixin:get-asset-batch-request`
  * `triniti:dam:mixin:get-asset-batch-response`
  * `triniti:dam:mixin:get-asset-history-request`
  * `triniti:dam:mixin:get-asset-history-response`
  * `triniti:dam:mixin:get-asset-request`
  * `triniti:dam:mixin:get-asset-response`
  * `triniti:dam:mixin:get-upload-urls-request`
  * `triniti:dam:mixin:get-upload-urls-response`
  * `triniti:dam:mixin:image-asset`
  * `triniti:dam:mixin:search-assets-request`
  * `triniti:dam:mixin:search-assets-response`
  * `triniti:dam:mixin:update-asset`
  * `triniti:dam:mixin:video-asset`
  * `triniti:news:mixin:headline-fragments`
  * `triniti:news:mixin:article-locked`
  * `triniti:news:mixin:article-unlocked`
  * `triniti:news:mixin:lock-article`
  * `triniti:news:mixin:unlock-article`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:page`
    * Add `description` text field.
    * Add `amp_enabled` boolean field.
  * `triniti:canvas:mixin:search-pages-request`
    * Add `is_unlisted` trinary field.
  * `triniti:news:mixin:article`
    * Add `is_homepage_news` boolean field.
    * Add `allow_comments` boolean field.
    * Add `description` text field.
    * Add `swipe` string field.
    * Add `amp_enabled` boolean field.
    * Add `related_articles_heading` string field.
    * Add `related_articles` identifier (NodeRef) list field.
  * `triniti:news:mixin:search-articles-request`
    * Add `is_unlisted` trinary field.
  * `triniti:ovp:mixin:search-videos-request`
    * Add `is_unlisted` trinary field.
  * `triniti:ovp:mixin:video`
    * Add `duration` small-int field.
    * Add `has_music` trinary field.
    * Add `allow_comments` boolean field.
    * Add `description` text field.
    * Add `swipe` string field.
    * Add `related_videos` identifier (NodeRef) list field.


## v0.1.4
* __Add Schemas:__
  * `triniti:apollo:mixin:cast-vote`
  * `triniti:apollo:mixin:create-poll`
  * `triniti:apollo:mixin:delete-poll`
  * `triniti:apollo:mixin:expire-poll`
  * `triniti:apollo:mixin:get-poll-batch-request`
  * `triniti:apollo:mixin:get-poll-batch-response`
  * `triniti:apollo:mixin:get-poll-history-request`
  * `triniti:apollo:mixin:get-poll-history-response`
  * `triniti:apollo:mixin:get-poll-request`
  * `triniti:apollo:mixin:get-poll-response`
  * `triniti:apollo:mixin:mark-poll-as-draft`
  * `triniti:apollo:mixin:mark-poll-as-pending`
  * `triniti:apollo:mixin:poll`
  * `triniti:apollo:mixin:poll-answer`
  * `triniti:apollo:mixin:poll-created`
  * `triniti:apollo:mixin:poll-deleted`
  * `triniti:apollo:mixin:poll-expired`
  * `triniti:apollo:mixin:poll-marked-as-draft`
  * `triniti:apollo:mixin:poll-marked-as-pending`
  * `triniti:apollo:mixin:poll-published`
  * `triniti:apollo:mixin:poll-scheduled`
  * `triniti:apollo:mixin:poll-unpublished`
  * `triniti:apollo:mixin:poll-updated`
  * `triniti:apollo:mixin:publish-poll`
  * `triniti:apollo:mixin:search-polls-request`
  * `triniti:apollo:mixin:search-polls-response`
  * `triniti:apollo:mixin:unpublish-poll`
  * `triniti:apollo:mixin:update-poll`
  * `triniti:apollo:mixin:vote-casted`


## v0.1.3
* Fix invalid schema option `insertion-options` to be `insertion-points` and recompile.


## v0.1.2
* __Add Schemas:__
  * `triniti:canvas:block:render-context`
  * `triniti:canvas:mixin:block`
  * `triniti:canvas:mixin:code-block`
  * `triniti:canvas:mixin:facebook-post-block`
  * `triniti:canvas:mixin:facebook-video-block`
  * `triniti:canvas:mixin:iframe-block`
  * `triniti:canvas:mixin:imgur-post-block`
  * `triniti:canvas:mixin:instagram-media-block`
  * `triniti:canvas:mixin:node-ref-block`
  * `triniti:canvas:mixin:pinterest-board-block`
  * `triniti:canvas:mixin:pinterest-pin-block`
  * `triniti:canvas:mixin:pinterest-profile-block`
  * `triniti:canvas:mixin:twitter-collection-timeline-block`
  * `triniti:canvas:mixin:twitter-list-timeline-block`
  * `triniti:canvas:mixin:twitter-moment-block`
  * `triniti:canvas:mixin:twitter-search-timeline-block`
  * `triniti:canvas:mixin:twitter-tweet-block`
  * `triniti:canvas:mixin:twitter-user-timeline-block`
  * `triniti:canvas:mixin:twitter-video-block`
  * `triniti:canvas:mixin:vevo-video-block`
  * `triniti:canvas:mixin:youtube-playlist-block`
  * `triniti:canvas:mixin:youtube-video-block`


## v0.1.1
* __Add Schemas:__
  * `triniti:canvas:mixin:page-renamed`
  * `triniti:canvas:mixin:rename-page`
  * `triniti:news:mixin:article-renamed`
  * `triniti:news:mixin:rename-article`
  * `triniti:ovp:mixin:rename-video`
  * `triniti:ovp:mixin:video-renamed`


## v0.1.0
* __Add Schemas:__
  * `triniti:canvas:mixin:create-page`
  * `triniti:canvas:mixin:delete-page`
  * `triniti:canvas:mixin:expire-page`
  * `triniti:canvas:mixin:get-page-batch-request`
  * `triniti:canvas:mixin:get-page-batch-response`
  * `triniti:canvas:mixin:get-page-history-request`
  * `triniti:canvas:mixin:get-page-history-response`
  * `triniti:canvas:mixin:get-page-request`
  * `triniti:canvas:mixin:get-page-response`
  * `triniti:canvas:mixin:mark-page-as-draft`
  * `triniti:canvas:mixin:mark-page-as-pending`
  * `triniti:canvas:mixin:page`
  * `triniti:canvas:mixin:page-created`
  * `triniti:canvas:mixin:page-deleted`
  * `triniti:canvas:mixin:page-expired`
  * `triniti:canvas:mixin:page-marked-as-draft`
  * `triniti:canvas:mixin:page-marked-as-pending`
  * `triniti:canvas:mixin:page-published`
  * `triniti:canvas:mixin:page-scheduled`
  * `triniti:canvas:mixin:page-unpublished`
  * `triniti:canvas:mixin:page-updated`
  * `triniti:canvas:mixin:publish-page`
  * `triniti:canvas:mixin:search-pages-request`
  * `triniti:canvas:mixin:search-pages-response`
  * `triniti:canvas:mixin:unpublish-page`
  * `triniti:canvas:mixin:update-page`
  * `triniti:news:mixin:article`
  * `triniti:news:mixin:article-created`
  * `triniti:news:mixin:article-deleted`
  * `triniti:news:mixin:article-expired`
  * `triniti:news:mixin:article-marked-as-draft`
  * `triniti:news:mixin:article-marked-as-pending`
  * `triniti:news:mixin:article-published`
  * `triniti:news:mixin:article-scheduled`
  * `triniti:news:mixin:article-unpublished`
  * `triniti:news:mixin:article-updated`
  * `triniti:news:mixin:create-article`
  * `triniti:news:mixin:delete-article`
  * `triniti:news:mixin:expire-article`
  * `triniti:news:mixin:get-article-batch-request`
  * `triniti:news:mixin:get-article-batch-response`
  * `triniti:news:mixin:get-article-history-request`
  * `triniti:news:mixin:get-article-history-response`
  * `triniti:news:mixin:get-article-request`
  * `triniti:news:mixin:get-article-response`
  * `triniti:news:mixin:mark-article-as-draft`
  * `triniti:news:mixin:mark-article-as-pending`
  * `triniti:news:mixin:publish-article`
  * `triniti:news:mixin:search-articles-request`
  * `triniti:news:mixin:search-articles-response`
  * `triniti:news:mixin:unpublish-article`
  * `triniti:news:mixin:update-article`
  * `triniti:ovp:mixin:create-video`
  * `triniti:ovp:mixin:delete-video`
  * `triniti:ovp:mixin:expire-video`
  * `triniti:ovp:mixin:get-video-batch-request`
  * `triniti:ovp:mixin:get-video-batch-response`
  * `triniti:ovp:mixin:get-video-history-request`
  * `triniti:ovp:mixin:get-video-history-response`
  * `triniti:ovp:mixin:get-video-request`
  * `triniti:ovp:mixin:get-video-response`
  * `triniti:ovp:mixin:mark-video-as-draft`
  * `triniti:ovp:mixin:mark-video-as-pending`
  * `triniti:ovp:mixin:publish-video`
  * `triniti:ovp:mixin:search-videos-request`
  * `triniti:ovp:mixin:search-videos-response`
  * `triniti:ovp:mixin:unpublish-video`
  * `triniti:ovp:mixin:update-video`
  * `triniti:ovp:mixin:video`
  * `triniti:ovp:mixin:video-created`
  * `triniti:ovp:mixin:video-deleted`
  * `triniti:ovp:mixin:video-expired`
  * `triniti:ovp:mixin:video-marked-as-draft`
  * `triniti:ovp:mixin:video-marked-as-pending`
  * `triniti:ovp:mixin:video-published`
  * `triniti:ovp:mixin:video-scheduled`
  * `triniti:ovp:mixin:video-unpublished`
  * `triniti:ovp:mixin:video-updated`
