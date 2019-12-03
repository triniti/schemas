<?php

namespace Triniti\Schemas\OvpMedialive\Enum;

use Gdbots\Common\Enum;

/**
 * @method static MedialiveChannelStatus UNKNOWN()
 * @method static MedialiveChannelStatus CREATE_FAILED()
 * @method static MedialiveChannelStatus CREATING()
 * @method static MedialiveChannelStatus DELETED()
 * @method static MedialiveChannelStatus DELETING()
 * @method static MedialiveChannelStatus IDLE()
 * @method static MedialiveChannelStatus RECOVERING()
 * @method static MedialiveChannelStatus RUNNING()
 * @method static MedialiveChannelStatus STARTING()
 * @method static MedialiveChannelStatus STOPPING()
 * @method static MedialiveChannelStatus UPDATE_FAILED()
 * @method static MedialiveChannelStatus UPDATING()
 */
final class MedialiveChannelStatus extends Enum
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
