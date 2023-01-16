<?php

class Connection {
    public static function make($config) {
        
        // 'host' => 'd107209.mysql.zonevs.eu',
        // 'db' => 'd107209_mytodo',
        // 'user' => 'd107209_main',
        // 'password' => 'saoledloll1234',
        // 'charset' => 'utf8mb4',
        // 'options' => []

        try {
            return new PDO(
                "mysql:host={$config['host']};dbname={$config['db']};charset={$config['charset']}",
                $config['user'],
                $config['password']
            );
       } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
       }
    }
}

// Connection::make();