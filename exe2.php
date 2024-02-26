<?php
// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.

class Livro
{
    public $titulo;
    public $autor;

    public function __construct($titulo, $autor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }
    
    public function getLivro(){
        echo "Titulo: ".$this->titulo."</br>";
        echo "Autor: ".$this->autor."</br>";
    }

    public function setTitulo($newTitulo){
        $this->titulo = $newTitulo;
    }
    
    public function setAutor($newAutor){
        $this->autor = $newAutor;
    }

}

$livro = new Livro("Assis", "Machado");
$livro->getLivro();

$livro ->setTitulo("NovoLivro");
$livro ->setAutor("NovoAutor");
$livro->getLivro();