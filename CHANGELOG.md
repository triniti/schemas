# CHANGELOG


## v0.1.5
* __Add Schemas:__
  * `triniti:canvas:mixin:has-blocks`
  * `triniti:canvas:mixin:headline-block`
  * `triniti:canvas:mixin:quote-block`
  * `triniti:canvas:mixin:pull-quote-block`
  * `triniti:canvas:mixin:text-block`
  * `triniti:common:mixin:custom-code`
  * `triniti:common:mixin:seo`
  * `triniti:news:mixin:headline-fragments`
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
    * Add `related_articles` identifier (NodeRef) list field.
  * `triniti:news:mixin:search-articles-request`
    * Add `is_unlisted` trinary field.
  * `triniti:ovp:mixin:search-videos-request`
    * Add `is_unlisted` trinary field.
  * `triniti:ovp:mixin:video`
    * Add `duration` small-int field.
    * Add `is_private` boolean field.
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
