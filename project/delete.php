<?php

include_once 'Database.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];


    try {
        // SQL語法
        $delete = "DELETE FROM shops WHERE id = :id";
        
        // 準備
        $statement = $conn->prepare($delete);
        
        // 執行
        $statement->execute(array(":id" => $id));

        if($statement){
            echo ('商品 刪除成功');
        }
        
    }catch(PDOException $ex){
        echo "商品 刪除失敗".$ex->getmessage();
    }
}