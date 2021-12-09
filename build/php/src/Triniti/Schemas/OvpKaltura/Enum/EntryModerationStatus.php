<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpKaltura\Enum;

enum EntryModerationStatus: string
{
    case UNKNOWN = 'unknown';
    case PENDING_MODERATION = '1';
    case APPROVED = '2';
    case REJECTED = '3';
    case DELETED = '4';
    case FLAGGED_FOR_REVIEW = '5';
    case AUTO_APPROVED = '6';
}
