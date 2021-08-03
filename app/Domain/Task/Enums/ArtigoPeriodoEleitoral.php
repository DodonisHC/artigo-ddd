<?php

namespace Domain\Task\Enums;

use MyCLabs\Enum\Enum;

class ArtigoPeriodoEleitoral extends Enum
{
    private const INVISIVEL = 0;
    private const VISIVEL   = 1;

    public static function visibilidade($value): string
    {
        switch ($value)
        {
            case self::INVISIVEL:
                return 'Visivel';
                break;
            case self::VISIVEL:
                return 'Invisivel';
                break;
        }
    }
}
