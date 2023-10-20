<?php
namespace src\Models;
use Services\Db;
abstract class ActiveRecordEntity{
    protected $id;

    public function __set(String $property, string $value){
        //echo'Creatr id '.$this->underscoreCamelCase($property).' created_at '.$this->underscoreCamelCase($value);
        $propertyName = $this-> underscoreCamelCase($property);
        $this->$propertyName = $value;
     }

    public function underscoreCamelCase(string $name) {
        return lcfirst(str_replace('_', '', ucwords($name, '_')));
    }

    
    public function getId(){
        return $this->id;
    } 

    public static function findAll(){
        $db = new Db();
        $sql = 'SELECT * FROM `'.static::getTableName();
        $articles = $db->query($sql, [], static::class);
    }
    abstract function getTableName();
}