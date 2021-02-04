<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpMedialive\Enum;

use Gdbots\Pbj\Enum;

/**
 * @method static ChannelState UNKNOWN()
 * @method static ChannelState CREATE_FAILED()
 * @method static ChannelState CREATING()
 * @method static ChannelState DELETED()
 * @method static ChannelState DELETING()
 * @method static ChannelState IDLE()
 * @method static ChannelState RECOVERING()
 * @method static ChannelState RUNNING()
 * @method static ChannelState STARTING()
 * @method static ChannelState STOPPING()
 * @method static ChannelState UPDATE_FAILED()
 * @method static ChannelState UPDATING()
 */
final class ChannelState extends Enum
{
    const UNKNOWN = 'unknown';
    const CREATE_FAILED = 'CREATE_FAILED';
    const CREATING = 'CREATING';
    const DELETED = 'DELETED';
    const DELETING = 'DELETING';
    const IDLE = 'IDLE';
    const RECOVERING = 'RECOVERING';
    const RUNNING = 'RUNNING';
    const STARTING = 'STARTING';
    const STOPPING = 'STOPPING';
    const UPDATE_FAILED = 'UPDATE_FAILED';
    const UPDATING = 'UPDATING';
}
