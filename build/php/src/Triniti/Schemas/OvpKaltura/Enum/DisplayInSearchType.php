<?php

namespace Triniti\Schemas\OvpKaltura\Enum;

use Gdbots\Common\Enum;

/**
 * @method static DisplayInSearchType UNKNOWN()
 * @method static DisplayInSearchType SYSTEM()
 * @method static DisplayInSearchType NONE()
 * @method static DisplayInSearchType PARTNER_ONLY()
 * @method static DisplayInSearchType KALTURA_NETWORK()
 */
final class DisplayInSearchType extends Enum
{
    const UNKNOWN = 'unknown';
    const SYSTEM = '-1';
    const NONE = '0';
    const PARTNER_ONLY = '1';
    const KALTURA_NETWORK = '2';
}
