<?php

namespace Triniti\Schemas\Ovp\Enum;

use Gdbots\Common\Enum;

/**
 * @method static MediaconvertErrorCode UNKNOWN()
 * @method static MediaconvertErrorCode INPUT_ERROR()
 * @method static MediaconvertErrorCode VIDEO_ERROR()
 * @method static MediaconvertErrorCode AUDIO_ERROR()
 * @method static MediaconvertErrorCode UNSUPPORTED_CODEC()
 * @method static MediaconvertErrorCode SETTINGS_ERROR()
 * @method static MediaconvertErrorCode ACCELERATION_SETTINGS_ERROR()
 * @method static MediaconvertErrorCode JOB_DOESNT_REQUIRE_ENOUGH_PROCESSING_POWER_FOR_ACCELERATED_TRANSCODING()
 * @method static MediaconvertErrorCode DISK_FULL()
 * @method static MediaconvertErrorCode FILE_OPEN_ERROR()
 * @method static MediaconvertErrorCode CLIPPING_ERROR()
 * @method static MediaconvertErrorCode DEMUXER_PARSE_ERROR()
 * @method static MediaconvertErrorCode SOURCE_READ_ERROR()
 * @method static MediaconvertErrorCode MXF_OUTPUT_ERROR()
 * @method static MediaconvertErrorCode ENCRYPTION_ERROR()
 * @method static MediaconvertErrorCode PERMISSIONS_ISSUE()
 * @method static MediaconvertErrorCode IAM_ROLE_ERROR_NOT_PERMITTED_OR_ANOTHER_PROBLEM()
 * @method static MediaconvertErrorCode IAM_ROLE_ERROR_DOESNT_EXIST()
 * @method static MediaconvertErrorCode IAM_ROLE_ERROR_NOT_PERMITTED()
 * @method static MediaconvertErrorCode DISK_FULL_BUT_DIFFERENT()
 * @method static MediaconvertErrorCode IAM_ROLE_ERROR_NOT_PERMITTED_OR_MALFORMED()
 * @method static MediaconvertErrorCode ACCELERATION_FAULT()
 * @method static MediaconvertErrorCode UNKNOWN_ERROR()
 * @method static MediaconvertErrorCode HTTP_FILE_ACCESS_NOT_AUTHORIZED()
 * @method static MediaconvertErrorCode HTTP_ACCESS_FORBIDDEN()
 * @method static MediaconvertErrorCode HTTP_FILE_NOT_FOUND()
 * @method static MediaconvertErrorCode HTTP_UPLOAD_ERROR()
 * @method static MediaconvertErrorCode HTTP_SERVER_ERROR()
 * @method static MediaconvertErrorCode HTTP_SERVER_CONNECTION_ERROR()
 * @method static MediaconvertErrorCode HTTP_UNKNOWN_ERROR()
 */
final class MediaconvertErrorCode extends Enum
{
    const UNKNOWN = 0;
    const INPUT_ERROR = 1010;
    const VIDEO_ERROR = 1020;
    const AUDIO_ERROR = 1021;
    const UNSUPPORTED_CODEC = 1030;
    const SETTINGS_ERROR = 1040;
    const ACCELERATION_SETTINGS_ERROR = 1041;
    const JOB_DOESNT_REQUIRE_ENOUGH_PROCESSING_POWER_FOR_ACCELERATED_TRANSCODING = 1042;
    const DISK_FULL = 1050;
    const FILE_OPEN_ERROR = 1404;
    const CLIPPING_ERROR = 1060;
    const DEMUXER_PARSE_ERROR = 1075;
    const SOURCE_READ_ERROR = 1076;
    const MXF_OUTPUT_ERROR = 1080;
    const ENCRYPTION_ERROR = 1091;
    const PERMISSIONS_ISSUE = 1401;
    const IAM_ROLE_ERROR_NOT_PERMITTED_OR_ANOTHER_PROBLEM = 1432;
    const IAM_ROLE_ERROR_DOESNT_EXIST = 1433;
    const IAM_ROLE_ERROR_NOT_PERMITTED = 1434;
    const DISK_FULL_BUT_DIFFERENT = 1507;
    const IAM_ROLE_ERROR_NOT_PERMITTED_OR_MALFORMED = 1515;
    const ACCELERATION_FAULT = 1550;
    const UNKNOWN_ERROR = 1999;
    const HTTP_FILE_ACCESS_NOT_AUTHORIZED = 3401;
    const HTTP_ACCESS_FORBIDDEN = 3403;
    const HTTP_FILE_NOT_FOUND = 3404;
    const HTTP_UPLOAD_ERROR = 3408;
    const HTTP_SERVER_ERROR = 3450;
    const HTTP_SERVER_CONNECTION_ERROR = 3451;
    const HTTP_UNKNOWN_ERROR = 3999;
}
