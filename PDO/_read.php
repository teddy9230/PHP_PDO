<?php

include_once 'Database.php';

$select = "SELECT * FROM books";

try{
    $statement = $conn->query($select);

    while($row = $statement->fetch()){
        echo 'NAME:'.$row['name']." <br> ".'DESCRIPTION:'.$row['description'].'<br>';
    } 

}catch(PDOException $ex){
    echo 'ERROR'.$ex->getMessage();
}