<?php
namespace src\Controllers;

class MainControllers{
    public function main(){
        echo 'Hello, word';
    }
    public function sayHello(string $name){
        echo 'Hello'.', '.$name;
    }
}

