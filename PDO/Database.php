<?php


define('MYSQL','mysql:host=localhost;dbname=library');
define('USERNAME','teddy');
define('PASSWORD','password');

$options = array(PDO::ATTR_PERSISTENT => true);

try{
    $conn = new PDO(MYSQL,USERNAME,PASSWORD,$options);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo 'connection successful';
}catch(PDOException $ex){
    // echo 'ERROR'.$ex->getMessage();
}