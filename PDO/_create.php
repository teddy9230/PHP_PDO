<?php

include_once 'Database.php';

$insertbook1 = "INSERT INTO books(name, description, created_at)VALUES('book001', 'book001', now())";

$insertbook2 = "INSERT INTO books(name, description, created_at)VALUES('book002', 'book002', now())";

try{
    $result = $conn->exec($createbook1);
    $result = $conn->exec($createbook2);
    echo 'CREATE';    

}catch(PDOException $ex){
    echo 'ERROR'.$ex->getMessage();
}