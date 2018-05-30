<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class TipoPessoa extends Enum
{
    const Jurídica = 1;
    const Física = 2;

    /**
     * Get the description for an enum value
     *
     * @param  int  $value
     * @return string
     */
    public static function getDescricao(int $value): string
    {
        return self::getKey($value);
    }
}
