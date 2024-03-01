<?php 

class Localizacao 
{
    private string $estado;
    private string $aeroporto;
    private string $destino;
    private string $aeroportoDestino;


    public function __construct($estado,$aeroporto,$destino, $aeroportoDestino)
    {
        $this->estado = $estado;
        $this->aeroporto = $aeroporto;
        $this->destino = $destino;
        $this->aeroportoDestino = $aeroportoDestino;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getAeroporto()
    {
        return $this->aeroporto;
    }

    public function getDestino()
    {
        return $this->destino;
    }
    public function getAeroportoDestino()
    {
        return $this->aeroportoDestino;
    }

    public function Cronometrar()
    {
        $Velocidade = 100;
        $Distancia = 448;
        $tempo = $Distancia / $Velocidade;
        return round($tempo) . " Horas";
    }


}
