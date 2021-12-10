<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpKaltura\Enum;

enum DisplayInSearchType: string
{
    case UNKNOWN = 'unknown';
    case SYSTEM = '-1';
    case NONE = '0';
    case PARTNER_ONLY = '1';
    case KALTURA_NETWORK = '2';
}
