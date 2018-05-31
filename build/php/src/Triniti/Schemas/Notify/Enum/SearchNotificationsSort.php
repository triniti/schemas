<?php

namespace Triniti\Schemas\Notify\Enum;

use Gdbots\Common\Enum;

/**
 * @method static SearchNotificationsSort UNKNOWN()
 * @method static SearchNotificationsSort CREATED_AT_ASC()
 * @method static SearchNotificationsSort CREATED_AT_DESC()
 * @method static SearchNotificationsSort UPDATED_AT_ASC()
 * @method static SearchNotificationsSort UPDATED_AT_DESC()
 * @method static SearchNotificationsSort SEND_AT_ASC()
 * @method static SearchNotificationsSort SEND_AT_DESC()
 * @method static SearchNotificationsSort SENT_AT_ASC()
 * @method static SearchNotificationsSort SENT_AT_DESC()
 */
final class SearchNotificationsSort extends Enum
{
    const UNKNOWN = 'unknown';
    const CREATED_AT_ASC = 'created-at-asc';
    const CREATED_AT_DESC = 'created-at-desc';
    const UPDATED_AT_ASC = 'updated-at-asc';
    const UPDATED_AT_DESC = 'updated-at-desc';
    const SEND_AT_ASC = 'send-at-asc';
    const SEND_AT_DESC = 'send-at-desc';
    const SENT_AT_ASC = 'sent-at-asc';
    const SENT_AT_DESC = 'sent-at-desc';
}
