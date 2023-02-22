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

    public function delete( $table, $id ){

        $stmt = $this->pdo->prepare("DELETE FROM {$table} WHERE id=:id;");
        $stmt->execute(['id' => $id]);

        $stmt->fetchAll(PDO::FETCH_CLASS);

    }

    public function selectById( $table, $id ){

        $stmt = $this->pdo->prepare("SELECT * FROM {$table} WHERE id=:id;");
        $stmt->execute(['id' => $id]);

        return $stmt->fetch();
    }

    public function update( $table, $parameters, $id ){

        $stmt = $this->pdo->prepare("UPDATE {$table} SET {$parameters} WHERE id=$id;");
        $stmt->execute();

        $stmt->fetchAll(\PDO::FETCH_CLASS);

    }

}