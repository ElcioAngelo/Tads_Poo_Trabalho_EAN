<?php 

class Passageiros
{
    private string $nome;
    private int $CPF;
    private string $nacionalidade;
    private string $data_nascimento;
    private string $bagagem;

    public function __construct($nome,$CPF,$nacionalidade,$data_nascimento,$bagagem)
    {
        $this->nome = $nome;
        $this->CPF = $CPF;
        $this->nacionalidade = $nacionalidade;
        $this->data_nascimento = $data_nascimento;
        $this->bagagem = $bagagem;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCPF()
    {
        return $this->CPF;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function getData_Nascimento()
    {
        return $this->data_nascimento;
    }

    public function getBagagem()
    {
        return $this->bagagem;
    }

}