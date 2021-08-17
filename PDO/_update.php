<?php

include_once 'Database.php';


$update = "UPDATE books SET name = 'book00002' WHERE id = 2";
$update = "UPDATE books SET description = 'book00002' WHERE id = 2";

try{
    $result = $conn->exec($update);
    echo 'UPDATE';
}catch(PDOException $ex){
    echo 'ERROR'.$ex->getmessage();
}