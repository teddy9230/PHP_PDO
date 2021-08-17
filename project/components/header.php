<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php if(isset($pageTitle)) echo $pageTitle?></title>

    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

    <!-- Bootstrap CSS cdn -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Font Awesome CSS cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Material Design for Bootstrap css files -->
    <link rel="stylesheet" href="css/bootstrap-material-design.css">
    <link rel="stylesheet" href="css/ripples.css">

    <!-- Custom css -->
    <link rel="stylesheet" href="css/app.css" />
</head>

<!-- Navigation -->
<div class=" navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">PHP PDO Ajax 練習專案</a>
        </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php"><i class="fa fa-plus"></i>&nbsp; 建立商品</a></li>
                <li><a href="List.php"><i class="fa fa-eye-slash"></i>&nbsp;商品列表</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- App Alert-->
<div id="ajax_msg" class="alert alert-success"></div>