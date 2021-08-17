<?php

include_once 'Database.php';


$update = "UPDATE books SET name = :name, description = :description WHERE id = :id";

try{
    $statement = $conn->prepare($update);

    $statement->execute(array(':name' => 'bindname',':description' => 'binddescriptoin','id' => 9));

    echo $statement->rowCount().'個UPDATE';
}catch(PDOException $ex){
    echo 'ERROR'.$ex->getmessage();
}