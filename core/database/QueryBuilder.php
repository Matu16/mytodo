<?php

class QueryBuilder {

    protected $pdo;

    public function __construct( PDO $pdo ) {
        $this->pdo = $pdo;
    }

    public function selectAll( $table ) {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table};");
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert( $table, $parameters, $route ) {
    
        $sql = sprintf (
            'INSERT INTO %s (%s) VALUES (%s);',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters)),
            'lol'
        );

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute($parameters);
            header('Location: ' . $route);
        } 
        catch (Exeption $e) {
            die('Woops, something went wrong!');
        }

    
    }

}