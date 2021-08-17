<?php $pageTitle = '建立商品'?>

<?php include_once 'components/header.php'?>

<div class="container-fluid">
    <section class="col .col-xs-12 .col-sm-6 .col-md-8 col-lg-6 white">
        <h3 class="text-primary">建立商品</h3>
        <hr>
        <form action="" method="post" id="create-shop">
            <div class="form-group">
                <label for="name" class="col-md-2 control-label">商品名稱</label>
                <div class="col-md-10">
                    <input name="name" class="form-control" id="name" type="text">
                    <span class="help-block" id="name_error"></span>
                </div>
            </div>

            <div class="form-group">
                <label for="description" class="col-md-2 control-label">商品描述</label>
                <div class="col-md-10">
                    <input name="description" class="form-control" id="description" type="text">
                    <span class="help-block" id="description_error"></span>
                </div>
            </div>

            <div class="form-group">
                <label for="price" class="col-md-2 control-label">商品價格</label>
                <div class="col-md-10">
                    <input name="price" class="form-control" id="price" type="text">
                    <span class="help-block" id="price_error"></span>
                </div>
            </div>

            <button type="submit" name="createBtn" class="btn btn-success pull-right">
                建立商品<i class="fa fa-plus"></i></button>
        </form>
    </section>
</div>

<?php include_once 'components/footer.php'?>