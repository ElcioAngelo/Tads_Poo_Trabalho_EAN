<?php

class Disponibilidade 
{
    private $Voo = []; //vetor que representa a classe Voo
    private string $clima;
    private string $horario;

    public function __construct($clima,$horario)//inicializa as variaveis 
    {
        $this->clima = $clima;
        $this->horario = $horario;
    }
    public function getClima(){ //retorna o valor clima
        return $this->clima;
    }
    
    public function adcionarVoo(Voo $Voo)// adciona a classe Voo em Disponibilidade
    {
        $this->Voo[] = $Voo;
    }

    public function verificarDisponibilidade(Capacidade $capacidade, Disponibilidade $disponivel)
    { //Verifica os valores de combustivel, na classe Capacidade, e em Disponibilidade verifica o clima.
        if($capacidade->getCombustivel() == 'Vazio'){//se for vazio, falso.
            return false;
        }else if($disponivel->getClima() == 'Chuvoso'){//se for chuvoso, falso.
            return false;
        }else{
            return true;
        }
    }
}