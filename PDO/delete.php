<?php

include_once 'Database.php';

$delete = 'DELETE FROM books WHERE id = 3';
// $delete = 'DELETE FROM books WHERE id = 8';

try{
    $result = $conn->exec($delete);
    echo 'DELETE';
    
}catch(PDOException $ex){
    echo 'ERROR'.$ex->getMessage();
}