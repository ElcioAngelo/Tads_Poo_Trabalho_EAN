<?php

class Disponibilidade 
{
    private $Voo = [];
    private string $clima;
    private string $horario;

    public function __construct($clima,$horario)
    {
        $this->clima = $clima;
        $this->horario = $horario;
    }
    public function getClima(){
        return $this->clima;
    }
    
    public function adcionarVoo(Voo $Voo)
    {
        $this->Voo[] = $Voo;
    }

    public function verificarDisponibilidade(Capacidade $capacidade, Disponibilidade $disponivel)
    { 
        if($capacidade->getCombustivel() == 'Vazio'){
            return false;
        }else if($disponivel->getClima() == 'Chuvoso'){
            return false;
        }else{
            return true;
        }
    }
}