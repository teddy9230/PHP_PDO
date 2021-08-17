<?php

include_once 'Database.php';

try{
    // var_dump($statement->fetch());
    // echo $result = $conn->exec("ALTER TABLE books ENGINE = InnoDB");
    // $statement = $conn->query("SHOW TABLE STATUS FROM library");

    $name = 'My Book005';
    $description = "My Book description";

    $conn->beginTransaction();
    
    //建立
    $sql01 = "INSERT INTO books (name, description, created_at) VALUES (:name, :description, now())";
    
    //準備 
    $statement = $conn->prepare($sql01);

    $statement->execute(array(':name' => $name, ':description' => $description));
    
    if($statement){
        echo 'INSERT OK <br>';
    }
    
    
    //刪除
    $sqlDel = "DELETE FROM books WHERE id = :id";
    
    //準備 
    $statement = $conn->prepare($sqlDel);

    $statement->execute(array(':id' => 133));

    //提交
    $conn->commit();

    echo 'COMMIT OK';

}catch(PDOException $ex){
    $conn->rollBack();
    echo 'ERROR'.$ex->getMessage();
}