<?php 

class Passageiros
{
    private string $nome;
    private int $CPF;
    private string $nacionalidade;
    private string $data_nascimento;
    private string $bagagem;

    public function __construct($nome,$CPF,$nacionalidade,$data_nascimento,$bagagem)//inicializa as variaveis
    {
        $this->nome = $nome;
        $this->CPF = $CPF;
        $this->nacionalidade = $nacionalidade;
        $this->data_nascimento = $data_nascimento;
        $this->bagagem = $bagagem;
    }

    public function getNome()// retorna o nome
    {
        return $this->nome;
    }

    public function getCPF()//retorna o CPF
    {
        return $this->CPF;
    }

    public function getNacionalidade()// retorna a nacionalidade
    {
        return $this->nacionalidade;
    }

    public function getData_Nascimento()// retorna a data_nascimento
    {
        return $this->data_nascimento;
    }

    public function getBagagem()//retorna a bagagem do passageiro
    {
        return $this->bagagem;
    }

}