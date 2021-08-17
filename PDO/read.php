<?php

include_once 'Database.php';
include_once 'Book.php';

$select = "SELECT * FROM books";

try{
    $statement = $conn->query($select);
    
    //FETCH_ASSOC
    // while($row = $statement->fetch(PDO::FETCH_ASSOC)){
    //     echo 'NAME:'.$row[1]." <br> ".'DESCRIPTION:'.$row[2].'<br>';

    //     var_dump($row);
    // } 
    
    //FETCH_BOTH
    // while($row = $statement->fetch(PDO::FETCH_BOTH)){
    //     echo 'NAME:'.$row[1]." <br> ".'DESCRIPTION:'.$row[2].'<br>';

    //     var_dump($row);
    // } 

    //FETCH_OBJ
    // while($row = $statement->fetch(PDO::FETCH_OBJ)){
    //     echo 'NAME:'.$row->name." <br> ".'DESCRIPTION:'.$row->descption.'<br>';

    //     var_dump($row);
    // } 

    // FETCH_CLASS
    $statement->setFetchMode(PDO::FETCH_CLASS, "Book");
    
    while($row = $statement->fetch()){
        echo 'NAME:'.$row->name." <br> ".'DESCRIPTION:'.$row->descption.'<br>';

        var_dump($row);
    } 


}catch(PDOException $ex){
    echo 'ERROR'.$ex->getMessage();
}