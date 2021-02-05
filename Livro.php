<?php 
require_once 'Pessoa.php';
require_once 'Publicacao.php';
class Livro implements Publicacao{

    //Atributos
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $paginaAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totalPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPaginas = $totalPaginas;
        $this->paginaAtual = 0;
        $this->aberto = false;  
        $this->leitor = $leitor;
    }

    public function detalhes(){
        
        $this->getAutor();
        $this->getTitulo();
        $this->getTotalPaginas();
        $this->totalPaginas = 100;
    }
    
    public function abrirLivro(){
        $this->aberto = true;
        echo "Livro aberto.";
    }
    public function fecharLivro(){
        $this->aberto = false;
        echo "Livro fechado";
    }
    public function folhearLivro($pag){
        if ($this->getTotalPaginas()<$pag){
            $this->setPaginaAtual(0);
            echo "A página solicitada passou do número total.";
        }else{
            $this->setPaginaAtual($pag);
            echo "Página atual: ".$this->getPaginaAtual();  
        }
            
    }
    public function avancarPag(){

        $this->paginaAtual++;
        echo "Página atual: ".$this->getPaginaAtual();


    }
    public function voltarPag(){

        $this->paginaAtual--;
        echo "Página atual: ".$this->getPaginaAtual();
        
    }
    
    //Getters e Setters

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    public function getTotalPaginas()
    {
        return $this->totalPaginas;
    }

    public function setTotalPaginas($totalPaginas)
    {
        $this->totalPaginas = $totalPaginas;

        return $this;
    }

    public function getPaginaAtual()
    {
        return $this->paginaAtual;
    }

    public function setPaginaAtual($paginaAtual)
    {
        $this->paginaAtual = $paginaAtual;

        return $this;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($aberto)
    {
        $this->aberto = $aberto;

        return $this;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;

        return $this;
    }







}









































