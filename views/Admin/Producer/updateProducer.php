<?php
if (!isset($_SESSION['login_true'])) {
    header('location:' . URL::uri('admin'));
} else {
    require_once 'views/Admin/header.php';
    require_once 'views/Admin/navigation.php';
    $id = \MyProject\Core\Request::uri()[1];
    $values_producer = \MyProject\Model\AdminModel::selectOneProducer($id)->fetch_assoc();
    ?>
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Nhà Sản Xuất
                        <small>Sửa</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    <form action="<?php echo \MyProject\Core\URL::uri('updateProducer'); ?>" method="POST">
                        <input name="id" type="hidden" value="<?php echo $values_producer['MaNSX'] ?>"/>
                        <div class="form-group">
                            <label>Tên Nhà Sản Xuất</label>
                            <input class="form-control" name="TenNSX" value="<?php echo $values_producer['TenNSX'] ?>"
                                   required/>
                        </div>
                        <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input class="form-control" name="DiaChi" required
                                   value="<?php echo $values_producer['DiaChi'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input class="form-control" name="Sdt" required
                                   value="<?php echo $values_producer['Sdt'] ?>"/>
                        </div>
                        <button type="submit" class="btn btn-default">Sửa Nhà Sản Xuất</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    <?php
    require_once 'views/Admin/footer.php';
}