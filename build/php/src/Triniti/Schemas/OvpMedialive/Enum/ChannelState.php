<?php

namespace Triniti\Schemas\OvpMedialive\Enum;

use Gdbots\Common\Enum;

/**
 * @method static ChannelState CREATE_FAILED()
 * @method static ChannelState CREATING()
 * @method static ChannelState DELETED()
 * @method static ChannelState DELETING()
 * @method static ChannelState IDLE()
 * @method static ChannelState RECOVERING()
 * @method static ChannelState RUNNING()
 * @method static ChannelState STARTING()
 * @method static ChannelState STOPPING()
 * @method static ChannelState UNKNOWN()
 * @method static ChannelState UPDATE_FAILED()
 * @method static ChannelState UPDATING()
 */
final class ChannelState extends Enum
{
    const CREATE_FAILED = 'create-failed';
    const CREATING = 'creating';
    const DELETED = 'deleted';
    const DELETING = 'deleting';
    const IDLE = 'idle';
    const RECOVERING = 'recovering';
    const RUNNING = 'running';
    const STARTING = 'starting';
    const STOPPING = 'stopping';
    const UNKNOWN = 'unknown';
    const UPDATE_FAILED = 'update-failed';
    const UPDATING = 'updating';
}
