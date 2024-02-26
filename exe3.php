<?php
// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.

class Animal
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }


    //Getters e Setters
    public function getNome()
    {
        return $this->nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function setNome($novoNome)
    {
        $this->nome = $novoNome;
    }
    public function setIdade($novaIdade)
    {
        $this->idade = $novaIdade;
    }

    public function getNomeIdade()
    {
        echo "Nome: " . $this->nome . "</br>";
        echo "Idade: " . $this->idade . "</br>";
    }
}

class Cachorro extends Animal
{

    public function setIdade($novaIdade)
    {
        $this->idade = $novaIdade;
    }
    public function getNomeIdade()
    {
        echo "Nome: " . $this->nome . "</br>";
        echo "Idade: " . $this->idade . "</br>";
    }
}

$cachorro = new Cachorro("Rex", "1");
$cachorro->getNomeIdade();

$animal = new Animal("Bob", "2");
$animal->getNomeIdade();
