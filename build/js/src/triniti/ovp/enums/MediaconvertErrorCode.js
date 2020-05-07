import Enum from '@gdbots/common/Enum';

export default class MediaconvertErrorCode extends Enum {
}

MediaconvertErrorCode.configure({
  UNKNOWN: 0,
  INPUT_ERROR: 1010,
  VIDEO_ERROR: 1020,
  AUDIO_ERROR: 1021,
  UNSUPPORTED_CODEC: 1030,
  SETTINGS_ERROR: 1040,
  ACCELERATION_SETTINGS_ERROR: 1041,
  JOB_DOESNT_REQUIRE_ENOUGH_PROCESSING_POWER_FOR_ACCELERATED_TRANSCODING: 1042,
  DISK_FULL: 1050,
  FILE_OPEN_ERROR: 1404,
  CLIPPING_ERROR: 1060,
  DEMUXER_PARSE_ERROR: 1075,
  SOURCE_READ_ERROR: 1076,
  MXF_OUTPUT_ERROR: 1080,
  ENCRYPTION_ERROR: 1091,
  PERMISSIONS_ISSUE: 1401,
  IAM_ROLE_ERROR_NOT_PERMITTED_OR_ANOTHER_PROBLEM: 1432,
  IAM_ROLE_ERROR_DOESNT_EXIST: 1433,
  IAM_ROLE_ERROR_NOT_PERMITTED: 1434,
  DISK_FULL_BUT_DIFFERENT: 1507,
  IAM_ROLE_ERROR_NOT_PERMITTED_OR_MALFORMED: 1515,
  ACCELERATION_FAULT: 1550,
  UNKNOWN_ERROR: 1999,
  HTTP_FILE_ACCESS_NOT_AUTHORIZED: 3401,
  HTTP_ACCESS_FORBIDDEN: 3403,
  HTTP_FILE_NOT_FOUND: 3404,
  HTTP_UPLOAD_ERROR: 3408,
  HTTP_SERVER_ERROR: 3450,
  HTTP_SERVER_CONNECTION_ERROR: 3451,
  HTTP_UNKNOWN_ERROR: 3999,
}, 'triniti:ovp:mediaconvert-error-code');
