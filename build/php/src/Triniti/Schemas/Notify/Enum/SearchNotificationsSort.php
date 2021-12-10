<?php
declare(strict_types=1);

namespace Triniti\Schemas\Notify\Enum;

enum SearchNotificationsSort: string
{
    case UNKNOWN = 'unknown';
    case CREATED_AT_ASC = 'created-at-asc';
    case CREATED_AT_DESC = 'created-at-desc';
    case UPDATED_AT_ASC = 'updated-at-asc';
    case UPDATED_AT_DESC = 'updated-at-desc';
    case SEND_AT_ASC = 'send-at-asc';
    case SEND_AT_DESC = 'send-at-desc';
    case SENT_AT_ASC = 'sent-at-asc';
    case SENT_AT_DESC = 'sent-at-desc';
}
