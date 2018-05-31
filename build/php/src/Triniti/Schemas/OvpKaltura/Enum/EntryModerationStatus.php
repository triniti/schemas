<?php

namespace Triniti\Schemas\OvpKaltura\Enum;

use Gdbots\Common\Enum;

/**
 * @method static EntryModerationStatus UNKNOWN()
 * @method static EntryModerationStatus PENDING_MODERATION()
 * @method static EntryModerationStatus APPROVED()
 * @method static EntryModerationStatus REJECTED()
 * @method static EntryModerationStatus DELETED()
 * @method static EntryModerationStatus FLAGGED_FOR_REVIEW()
 * @method static EntryModerationStatus AUTO_APPROVED()
 */
final class EntryModerationStatus extends Enum
{
    const UNKNOWN = 'unknown';
    const PENDING_MODERATION = '1';
    const APPROVED = '2';
    const REJECTED = '3';
    const DELETED = '4';
    const FLAGGED_FOR_REVIEW = '5';
    const AUTO_APPROVED = '6';
}
