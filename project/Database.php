<?php
// 設定 資料庫 使用者名稱 使用者密碼
define("MYSQL", "mysql:host=localhost;dbname=PDO_shop");
define("USERNAME", "teddy");
define("PASSWORD", "password");

// 允許連線
$options = array(PDO::ATTR_PERSISTENT => true);

try{
    $conn = new PDO(MYSQL, USERNAME, PASSWORD, $options);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "資料庫 連線成功 <br>";
}catch (PDOException $ex){
    echo "資料庫 連線失敗 ".$ex->getMessage();
}