<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Genero extends Enum
{
    const Masculino = 1;
    const Feminino = 2;

    /**
     * Get the description for an enum value
     *
     * @param  int  $value
     * @return string
     */
    public static function getDescricao(int $value): string {

        return self::getKey($value);
    }
}
