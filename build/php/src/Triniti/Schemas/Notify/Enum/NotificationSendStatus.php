<?php
declare(strict_types=1);

namespace Triniti\Schemas\Notify\Enum;

enum NotificationSendStatus: string
{
    case UNKNOWN = 'unknown';
    case DRAFT = 'draft';
    case SCHEDULED = 'scheduled';
    case SENT = 'sent';
    case CANCELED = 'canceled';
    case FAILED = 'failed';
}
