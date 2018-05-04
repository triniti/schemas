# CHANGELOG


## v0.2.5
* __Add Schemas:__
  * `triniti:canvas:mixin:document-block`
  * `triniti:sys:mixin:list-all-picklists-request`
  * `triniti:sys:mixin:list-all-picklists-response`
  * `triniti:sys:mixin:picklist`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `triniti:canvas:mixin:vimeo-video-block`
    * Add `user_id` string field.
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
