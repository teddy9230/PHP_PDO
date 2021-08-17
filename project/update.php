<?php

include_once 'Database.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $data = $_POST['data'];
    $column = trim($_POST['column']);

    try{
        $updateQuery = "UPDATE shops SET {$column} = :placeholder
                        WHERE id = :id";

        $statement = $conn->prepare($updateQuery);
        
        $statement->execute(array(":placeholder" => $data, ":id" => $id));
        
        if($statement->rowCount() === 1){
            echo "商品 更新成功";
        }else{
            echo "商品 沒有更新";
        }

    }catch (PDOException $ex){
        echo "商品 更新失敗" .$ex->getMessage();
    }
}
else if(isset($_POST['id']) && isset($_POST['description'])){
    $id = $_POST['id'];
    $description = trim($_POST['description']);

    try{
        $updateQuery = "UPDATE shop SET description = :description
                        WHERE id = :id";

        $statement = $conn->prepare($updateQuery);
        $statement->execute(array(":description" => $description, ":id" => $id));

        if($statement->rowCount() === 1){
            echo "商品 更新成功";
        }else{
            echo "商品 沒有更新";
        }

    }catch (PDOException $ex){
        echo "商品 更新失敗" .$ex->getMessage();
    }
}
else if(isset($_POST['id']) && isset($_POST['price'])){
    $id = $_POST['id'];
    $price = trim($_POST['price']);

    try{
    $updateQuery = "UPDATE shops SET price = :price
                        WHERE id = :id";

        $statement = $conn->prepare($updateQuery);
        $statement->execute(array(":price" => $price, ":id" => $id));
        
        if($statement->rowCount() === 1){
            echo "商品 更新成功";
        }else{
            echo "商品 沒有更新";
        }

    }catch (PDOException $ex){
        echo "商品 更新失敗" .$ex->getMessage();
    }
}
else if(isset($_POST['id']) && isset($_POST['status'])){
    $id = $_POST['id'];
    $status = trim($_POST['status']);

    try{
    $updateQuery = "UPDATE shops SET status = :status
                        WHERE id = :id";

        $statement = $conn->prepare($updateQuery);
        $statement->execute(array(":status" => $status, ":id" => $id));

        if($statement->rowCount() === 1){
            echo "商品 更新成功";
        }else{
            echo "商品 沒有更新";
        }

    }catch (PDOException $ex){
        echo "商品 更新失敗" .$ex->getMessage();
    }
}