<?php

namespace app\Services;

class DB
{
    private $pdo;

    public function __construct()
    {
        $user = "mysql";
        $pass = "mysql";

        $this->pdo = new \PDO('mysql:host=127.0.0.1;dbname=authOOP', $user, $pass);
    }

    public function query(string $sql, $params = []): ?array
    {

        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);

        return $sth->fetchAll();
    }
}


