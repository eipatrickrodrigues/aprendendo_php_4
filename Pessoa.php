<?php 
require_once 'Livro.php';
require_once 'Publicacao.php';
class Pessoa {

    //Atributos
    protected $nome;
    private $idade;
    private $sexo;

    //Método construtor
    public function __construct($nome, $idade, $sexo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    //Métodos
    public function fazerAniver(){

        $this->setIdade($this->getIdade()+1);
    }

    //Setters
    
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;

        return $this;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    // Getters

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getSexo()
    {
        return $this->sexo;
    }
}




















































