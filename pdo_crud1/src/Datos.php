<?php
namespace Clases;
require "../vendor/autoload.php";
use Faker\Factory;

class Datos{
    public $faker;

    public function __construct($table, $cantidad){
        $this->faker=Factory::create('es_ES');
        switch($table){
            case "users":
                $this->crearUsuarios($cantidad);
                break; 
        }
    }

    public function crearUsuarios($cantidad){

        $usuario=New Users();
        $usuario->setNombre("Jose");
        $usuario->setApellidos("Yepes");
        $usuario->setUsername("admin");
        $usuario->setMail("jose@gmail.com");
        $pass=hash('sha256', "admin");
        $usuario->setPass($pass);
        $usuario->create();
        $usuario=New Users();

        for($i=0; $i<$cantidad-1;$i++){
            $usuario->setNombre($this->faker->firstName());
            $usuario->setApellidos($this->faker->lastName()." ".$this->faker->lastName());
            $usuario->setUsername($this->faker->unique()->userName);
            $usuario->setMail($this->faker->unique()->email);
            $usuario->setPass($this->faker->sha256);
            $usuario->create();
        }
        $usuario=null;
    }
}