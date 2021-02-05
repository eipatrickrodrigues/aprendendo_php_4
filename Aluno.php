<?php 
require_once 'Pessoa.php';

class Aluno extends Pessoa{

    //Atributor
    private $matricula;
    private $curso;

    //Método constutor
    public function __construct($curso)
    {
        $this->curso = $curso;
    }

    public function matricular(){
        $this->setMatricula(true);
        echo "Matrícula efetivada para {$this->getNome()}.";
    }

    public function cancelarMatricula(){
        $this->setMatricula(false);
        echo "Matrícula cancelada para {$this->getNome()}.";
    }

    // Getters e Setters
    
    public function getMatricula()
    {
        return $this->matricula;
    }
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }
    public function getCurso()
    {
        return $this->curso;
    }
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }
}

require_once 'Aluno.php';
class Bolsista extends Aluno{

    //Atributos
    private $bolsa;
    
    //Método
    public function renovarBolsa($numeromatricula){
        if ($this->getMatricula()==true){
            $this->bolsa = $numeromatricula;
            echo "Matrícula renovada.";
        }else{
            echo "Matrícula inexistente, verifique.";
        }
    }

    public function pagarMensalidade(){
        if ($this->getMatricula() == true){
        echo "Aluno bolsista com bolsa renovada";
        }else{
            echo "Matrícula inexistente, verifique.";
        }
        
    }    

    // Getters e Setters

    public function getBolsa()
    {
        return $this->bolsa;
    }

    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;

        return $this;
    }
}
























