<?php
//clase: molde para drear mas objetos

class carro{
    //atributos o propiedades (variables)
    public $color= 'rojo';
    public $marca= 'Ferrari';
    public $modelo= 'aventador';
    public $velocidad= 500;
    public $caballaje=300;
    public $puestos=2;

    //metodo ->   acciones que hace el carro(funciones)
    
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color=$color;
    }
    public function getVelocidad(){
        return $this->velocidad;
    }
    public function setVelocidad(){
        $this->velocidad=$velocidad;
    }
    public function acelerar(){
        $this->velocidad++;
    }
    public function frenar(){
        $this->velocidad--;
    }
}
//crear un objeto
$carroEspecial=new carro();

// var_dump($carroEspecial);
echo $carroEspecial->getVelocidad(). '<br>';
echo 'la velocidad de mi carro es:'. $carroEspecial->getVelocidad().'<br>';
echo 'El color de mi carro es:' .$carroEspecial->getColor().'<br>';

$carroEspecial->setColor('amarillo');
echo $carroEspecial->getColor().'<br>';
$carroEspecial->acelerar();
echo 'Ahora la velocidad de mi carro es:'. $carroEspecial->getVelocidad().'<br>';

$carroEspecial->acelerar();
$carroEspecial->acelerar();
$carroEspecial->acelerar();
$carroEspecial->acelerar();
echo 'Ahora la velocidad de mi carro es:'. $carroEspecial->getVelocidad().'<br>';

$carroEspecial->frenar();
$carroEspecial->frenar();
echo 'Ahora la velocidad de mi carro es:'. $carroEspecial->getVelocidad().'<br>';

