<?php  
use voku\helper\Paginator;

require __DIR__ . '/vendor/autoload.php';

include_once 'Database.php';

$shops = '';

try{
    
    $paginate = new Paginator(5, 'page');

    $read= "SELECT * FROM shops";

    
    $statement = $conn->query($read);

    $total = $statement->rowCount();
    
    $paginate->set_total($total);
    
    $shops = $conn->query("SELECT * FROM shops" . $paginate->get_limit());


}catch(PDOException $ex){
    echo '資料庫 查詢失敗'.$ex->getMessage();
}