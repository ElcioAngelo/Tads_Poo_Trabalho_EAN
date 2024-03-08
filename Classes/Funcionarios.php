<?php 

class Funcionarios 
{
    private int $id = 0;
    private string $nome;
    private string $cargo;

    public function __construct($id,$nome,$cargo)//inicializa as variaveis 
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->cargo = $cargo;
    }

    public function getID()//retorna o id
    {
        return $this->id;
    }

    public function getNome()//retorna o nome.
    {
        return $this->nome;
    }

    public function getCargo()//retorna o cargo.
    {
        return $this->cargo;
    }
}