<?php

include_once 'Database.php';

$form_errors = [];
$data = [];

if( isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) ){
    
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if(!$name || $name == null ){
        $form_errors['name'] = '商品名字 必須要填寫'; 
    }

    if(!$description || $description == null ){
        $form_errors['description'] = '商品描述 必須要填寫'; 
    }
    
    if(!$price || $price == null ){
        $form_errors['price'] = '商品價格 必須要填寫'; 
    }

    if(count($form_errors) < 1 ){
        try{
            // 語法
            $insert = 'INSERT INTO shops (name, description, price, created_at) VALUES (:name, :description, :price, now())';
    
            // 準備
            $statement = $conn->prepare($insert);
    
            // 建立(資料庫)
            $statement->execute(array(':name' => $name, ':description' => $description, ':price' => $price));
    
            if($statement){
                // echo "商品 建立成功";
                $data['success'] = true;
                $data['message'] = '商品 建立成功';
            }
            
        }catch(PDOException $ex){
            $data['success'] = false;
            $data['message'] = $form_errors;
        }
    }else{
        $data['success'] = false;
        $data['message'] = $form_errors;
    }

    echo json_encode($data);
}