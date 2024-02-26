<?php
// Modifique a classe 'Cachorro' do exercício anterior.
// Torne as propriedades 'nome' e 'idade' protegidas e utilize métodos getters e setters para acessá-las e modificá-las.
class Animal
{
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNomeIdade()
    {
        echo "Nome: " . $this->nome . "</br>";
        echo "Idade: " . $this->idade . "</br>";
    }
}

class Cachorro extends Animal
{

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

$cachorro = new Cachorro("Rex", "1");
$cachorro->getNomeIdade();

$cachorro->setNome("Novo Nome");
$cachorro->setIdade("Nova Idade");
$cachorro->getNomeIdade();
