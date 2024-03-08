<?php 

enum Porte 
{
    const GRANDE = 3;
    const MEDIO = 2;
    const PEQUENO = 1;

    public static function VerificarTamanho($numero)
    {   
        switch ($numero){
            case self::PEQUENO:
                return 'Esse avião é de classe Pequena';
            case self::MEDIO:
                return 'Esse avião é de classe Media';
            case self::GRANDE:
                return 'Esse avião é de classe Grande';
        }
    }
}