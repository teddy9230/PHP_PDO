<?php $pageTitle = '商品列表'?>

<?php 
    include_once 'components/header.php';
    include_once 'read.php';
?>


<div class="container-fluid">
    <section class="col .col-xs-12 .col-sm-6 .col-md-8 col-lg-12 main">
        <h3 class="text-primary">商品列表</h3>
        <hr>

        <table class="table table-striped table-bordered table-responsive">
            <thead>
                <tr>
                    <th>商品編號</th>
                    <th>商品名稱</th>
                    <th>商品描述</th>
                    <th>商品價格</th>
                    <th>商品狀態</th>
                    <th>商品建立時間</th>
                    <th>刪除</th>
                </tr>
            </thead>

            <tbody class="shop-list">
                <?php foreach ( $shops as $shop): ?>
                <tr>
                    <td title='Click to edit'>
                        <div>
                            <?= $shop['id'] ?> </div>
                    </td>

                    <td title='Click to edit'>
                        <div class='editable' onclick="edit(this)" onblur="update(this, '<?= $shop['id'] ?>', 'name')">
                            <?= $shop['name'] ?> </div>
                    </td>

                    <td title='Click to edit'>
                        <div class='editable' onclick="edit(this)"
                            onblur="update(this, '<?= $shop['id'] ?>', 'description')"> <?= $shop['description'] ?>
                        </div>
                    </td>

                    <td title='Click to edit'>
                        <div class='editable' onclick="edit(this)" onblur="update(this, '<?= $shop['id'] ?>', 'price')">
                            <?= $shop['price'] ?>
                        </div>
                    </td>

                    <td title='Click to edit'>
                        <div class='editable' onclick="edit(this)"
                            onblur="update(this, '<?= $shop['id'] ?>', 'status')"> <?= $shop['status'] ?> </div>
                    </td>

                    <td> <?= strftime("%b %d, %Y", strtotime($shop['created_at'])) ?> </td>

                    <td style="width: 5%;">
                        <button class='btn-danger' onclick="deleteShop('<?= $shop['id'] ?>')">
                            <i class="fa fa-times"></i>
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php 
                echo$paginate->page_links(); 
            ?>
    </section>
</div>

<?php include_once 'components/footer.php'?>