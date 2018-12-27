<?php

namespace last;

use PDO;

class QueryBuilder
{
    public $pdo;

    function __construct()
    {
        //1. Подключение к БД
        $this->pdo = new PDO ("mysql:host=localhost; dbname=tasks", "root", "root");
    }

    function all($table)
    {
        //2. Подготовить SQL запрос
        $sql = "SELECT * FROM $table";                                              
        $statement = $this->pdo->prepare($sql);                                     
        $statement->execute();                                                
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);                          

        return $results;                                                             
    }

    function add($table, $data)
    {
        

        // 1) Подготовить массив с ключами
        $keys = array_keys($data);
        // 2) Сформировать ключи в строке чтобы подставить в SQL
        $getKeysInString = implode(',', $keys);

        // 3) Сформировать метки в строке чтобы подставить в SQL
        $tags = ":" . implode(', :', $keys);

        // 4) Подготовить SQL запрос
        $sql = "INSERT INTO $table ($getKeysInString) VALUES ($tags)";

        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);      
    }

    function getOne($table, $id)
    {
        //2. Подготовить SQL запрос
        $sql = "SELECT * FROM $table WHERE id=:id";              
        $statement = $this->pdo->prepare($sql);                               
        $statement->bindParam(':id', $id);
        $statement->execute();                                           
        $task = $statement->fetch(PDO::FETCH_ASSOC);          

        return $task;                     
    }
    function update($table, $data)
    {
        $fields = '';
        // $key => $value - удобно использовать для использования ключей в массиве
        foreach($data as $key => $value){     
               
            // точка . это конкотинация (связывание)
            $fields .= $key . "=:" . $key . ","; 

        }
        // обрезаем справа запятую
        $fields = rtrim($fields, ',');    

        //2. Подготовить SQL запрос
        $sql = "UPDATE $table SET $fields WHERE id=:id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);   
        return true;
    }

    function delete($table, $id)
    {
        //2. Подготовить SQL запрос
        $sql = "DELETE FROM $table WHERE id=:id";                                       
        $statement = $this->pdo->prepare($sql);                                         
        $statement->bindParam(':id', $id);
        $statement->execute();                                                         
    }

    function getOneFrom($table, $data)
    {
        $fields = '';
        foreach($data as $key => $value){
            $fields .= $key . '=:' . $key . ' '. 'AND'. ' ';
        }

        $fields = rtrim($fields, 'AND ');
        $sql = "SELECT * FROM $table WHERE $fields LIMIT 1";
        $statement = $this->pdo->prepare($sql);
        $statement->execute($data);
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
}
 
