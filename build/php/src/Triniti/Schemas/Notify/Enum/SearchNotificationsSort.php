<?php

namespace Triniti\Schemas\Notify\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchNotificationsSort UNKNOWN()
 * @method static SearchNotificationsSort RELEVANCE()
 * @method static SearchNotificationsSort CREATED_AT_ASC()
 * @method static SearchNotificationsSort CREATED_AT_DESC()
 * @method static SearchNotificationsSort UPDATED_AT_ASC()
 * @method static SearchNotificationsSort UPDATED_AT_DESC()
 * @method static SearchNotificationsSort SENT_AT_ASC()
 * @method static SearchNotificationsSort SENT_AT_DESC()
 * @method static SearchNotificationsSort TITLE_ASC()
 * @method static SearchNotificationsSort TITLE_DESC()
 */
final class SearchNotificationsSort extends Enum
{
    const UNKNOWN = 'unknown';
    const RELEVANCE = 'relevance';
    const CREATED_AT_ASC = 'created-at-asc';
    const CREATED_AT_DESC = 'created-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const SENT_AT_ASC = 'sent-at-asc';
    const SENT_AT_DESC = 'sent-at-desc';
    const TITLE_ASC = 'title-asc';
    const TITLE_DESC = 'title-desc';
}
