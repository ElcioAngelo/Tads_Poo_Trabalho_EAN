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
    
    public function adcionarVoo(Voo $Voo)
    {
        $this->Voo[] = $Voo;
    }

    public function verificarDisponibilidade(Aeronave $Aeronave, Capacidade $Capacidade)
    { 
    
}
}