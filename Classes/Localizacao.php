<?php 

class Localizacao 
{
    private string $estado;
    private string $aeroporto;
    private string $destino;
    private string $aeroportoDestino;
    private Porte $Porte; //verifica se o aeroporto comporta o avião.


    public function __construct($estado,$aeroporto,$destino, $aeroportoDestino)//inicializa as variaveis.
    {
        $this->estado = $estado;
        $this->aeroporto = $aeroporto;
        $this->destino = $destino;
        $this->aeroportoDestino = $aeroportoDestino;
    }

    public function getEstado()//retorna o estado.
    {
        return $this->estado;
    }

    public function getAeroporto()//retorna o aeroporto
    {
        return $this->aeroporto;
    }

    public function getDestino()//retorna o destino.
    {
        return $this->destino;
    }
    public function getAeroportoDestino()//reporta o aeroporto de destino.
    {
        return $this->aeroportoDestino;
    }

    public function Cronometrar()//com as duas variaveis criadas, calcula o tempo de voo (vou achar outro meio de calcular).
    {
        $Velocidade = 100;
        $Distancia = 448;
        $tempo = $Distancia / $Velocidade;
        return round($tempo) . " Horas";
    }

}
