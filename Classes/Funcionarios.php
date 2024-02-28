<?php 

class Funcionarios 
{
    private int $id = 0;
    private string $nome;
    private string $cargo;

    public function __construct($id,$nome,$cargo)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cargo = $cargo;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getNome() 
    {
        return $this->nome;
    }

    public function getCargo()
    {
        return $this->cargo;
    }
}