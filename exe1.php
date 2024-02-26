<?php
// Crie uma classe chamada 'Livro' com propriedades privadas 'titulo' e 'autor'.
// Implemente um método construtor para inicializar essas propriedades.
// Em seguida, crie um objeto da classe 'Livro' e exiba suas propriedades.

class Livro
{
    public $title;
    public $author;

    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    public function getLivro(){
        echo "Titulo: ".$this->title."</br>";
        echo "Autor: ".$this->author."";
    }
}

$livro = new Livro("Assis", "Machado");
$livro->getLivro();
