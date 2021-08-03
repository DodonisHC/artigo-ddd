<?php

namespace Domain\Task\Enums;

use MyCLabs\Enum\Enum;

class ArtigoTipo extends Enum
{
    private const ULTIMAS   = 0;
    private const DESTAQUE  = 1;
    private const ESPECIAL  = 2;

    public static function tipo($value): string
    {
        switch ($value)
        {
            case self::ULTIMAS:
                return 'Ultimas';
                break;
            case self::DESTAQUE:
                return 'Destaque';
                break;
            case self::ESPECIAL:
                return 'Especial';
                break;
        }
    }
}
