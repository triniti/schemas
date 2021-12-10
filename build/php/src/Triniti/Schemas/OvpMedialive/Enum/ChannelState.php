<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpMedialive\Enum;

enum ChannelState: string
{
    case UNKNOWN = 'unknown';
    case CREATE_FAILED = 'CREATE_FAILED';
    case CREATING = 'CREATING';
    case DELETED = 'DELETED';
    case DELETING = 'DELETING';
    case IDLE = 'IDLE';
    case RECOVERING = 'RECOVERING';
    case RUNNING = 'RUNNING';
    case STARTING = 'STARTING';
    case STOPPING = 'STOPPING';
    case UPDATE_FAILED = 'UPDATE_FAILED';
    case UPDATING = 'UPDATING';
}
