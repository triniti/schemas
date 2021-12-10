<?php
declare(strict_types=1);

namespace Triniti\Schemas\Common\Enum;

enum AspectRatio: string
{
    case UNKNOWN = 'unknown';
    case AUTO = 'auto';
    case R1BY1 = '1by1';
    case R2BY3 = '2by3';
    case R3BY2 = '3by2';
    case R3BY4 = '3by4';
    case R4BY3 = '4by3';
    case R4BY5 = '4by5';
    case R5BY4 = '5by4';
    case R5BY6 = '5by6';
    case R6BY5 = '6by5';
    case R9BY16 = '9by16';
    case R16BY9 = '16by9';
    case ORIGINAL = 'original';
    case CUSTOM = 'custom';
}
