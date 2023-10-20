<?php

namespace Services;

class Db{

    private $pdo;

    public function __construct(){
        $dbOptions = require ('../src/settings.php');
        $this->pdo = new \Pdo(
            'mysql:host=' . $dbOptions['host'].';dbname='.$dbOptions['dbname'],
            $dbOptions['user'],
            $dbOptions['password'],
        );
        $this->pdo->exec('SET NAMES UTF8');
    }

    public function query(string $sql, $params = [],string $className = 'stdClass'):?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);
        if (!$result) {
            return null;
        }
        return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
    }
}