<?php

namespace Triniti\Schemas\Common\Enum;

use Gdbots\Common\Enum;

/**
 * @method static AspectRatio UNKNOWN()
 * @method static AspectRatio AUTO()
 * @method static AspectRatio R1BY1()
 * @method static AspectRatio R2BY3()
 * @method static AspectRatio R3BY2()
 * @method static AspectRatio R3BY4()
 * @method static AspectRatio R4BY3()
 * @method static AspectRatio R4BY5()
 * @method static AspectRatio R5BY4()
 * @method static AspectRatio R5BY6()
 * @method static AspectRatio R6BY5()
 * @method static AspectRatio R9BY16()
 * @method static AspectRatio R16BY9()
 * @method static AspectRatio ORIGINAL()
 * @method static AspectRatio CUSTOM()
 */
final class AspectRatio extends Enum
{
    const UNKNOWN = 'unknown';
    const AUTO = 'auto';
    const R1BY1 = '1by1';
    const R2BY3 = '2by3';
    const R3BY2 = '3by2';
    const R3BY4 = '3by4';
    const R4BY3 = '4by3';
    const R4BY5 = '4by5';
    const R5BY4 = '5by4';
    const R5BY6 = '5by6';
    const R6BY5 = '6by5';
    const R9BY16 = '9by16';
    const R16BY9 = '16by9';
    const ORIGINAL = 'original';
    const CUSTOM = 'custom';
}
