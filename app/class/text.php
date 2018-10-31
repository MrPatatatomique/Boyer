<?php

namespace Tutoriel;

class Text{

    const CURRENCY = " €";

    public static function withZero($chiffre){
        if($chiffre > 9){
            return $chiffre;
        }
    return '0' . $chiffre;
    }

    public static function withEuro($chiffre){
        return self::withZero($chiffre) . self::CURRENCY;
    }
}