<?php
// Crie uma classe base 'Animal' com um método 'emitirSom'.
// Crie duas classes derivadas, 'Cachorro' e 'Gato', que herdam de 'Animal'.
// Sobrescreva o método 'emitirSom' em ambas as classes derivadas para representar o som característico.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

class Animal{
    protected $name;
    protected $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($new_age){
        if($new_age >=   0){
            $this->age = $new_age;
        }
        else{
            echo "Idade inválida";
        }
    }
    public function setName($new_name){
        $this->name = $new_name;
    }

    public function emitSound(){
       echo "qualquer som. ";
    }
}
class Dog extends Animal{
    public function emitSound(){
        echo "o cachorro diz: Au au! <br/>";
    }

}
class Cat extends Animal{
    public function emitSound(){
        echo "O gato diz: MEOW! <br/>";
    }
}
$cat = new Cat("Odeio",   14);
$dog = new Dog("Php",10);

echo "Nome do gato: ". $cat->getName(). ", idade: ". $cat->getAge(). "<br/>";
$cat->emitSound();
echo "<br/> <hr/> <br/>";
echo "Nome do cão: ". $dog->getName(). ", idade: ".$dog->getAge(). "<br/>";
$dog ->emitSound();
?>