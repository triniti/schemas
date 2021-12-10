<?php
declare(strict_types=1);

namespace Triniti\Schemas\OvpKaltura\Enum;

enum CaptionType: string
{
    case UNKNOWN = 'unknown';
    case SRT = '1';
    case DFXP = '2';
    case WEBVTT = '3';
    case CAP = '4';
}
