<?php
use MyProject\Model\AdminModel;
if (!isset($_SESSION['login_true'])) {
    header('location:' . URL::uri('admin'));
} else {
    require_once 'views/Admin/header.php';
//<!-- Navigation -->
    require_once 'views/Admin/navigation.php';
    $row = AdminModel::selectAllProducer()->fetch_all();

    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <?php if (isset($_SESSION['success_addProducer'])): ?>
                    <div class="alert-success">
                        <?php echo $_SESSION['success_addProducer']; ?>
                    </div>
                <?php endif; ?>
                <?php if (isset($_SESSION['success_updateProducer'])): ?>
                    <div class="alert-success">
                        <?php echo $_SESSION['success_updateProducer']; ?>
                    </div>
                <?php endif; ?>
                <div class="col-lg-12">
                    <h1 class="page-header">Nhà Sản Xuất
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example"
                       style="text-align: center">
                    <thead>
                    <tr align="center">
                        <th>MaNSX</th>
                        <th>Tên NSX</th>
                        <th>Địa Chỉ</th>
                        <th>SDT</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($row as $item): ?>
                        <tr class="odd gradeX" align="center">
                            <td><?php echo $item[0]; ?></td>
                            <td><?php echo $item[1]; ?></td>
                            <td><?php echo $item[2]; ?></td>
                            <td><?php echo $item[3]; ?></td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                        href="<?php echo \MyProject\Core\URL::uri('deleteProducer'); ?>/<?= $item[0]; ?>">
                                    Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                        href="<?php echo \MyProject\Core\URL::uri('updateProducer'); ?>/<?= $item[0]; ?>">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach;
                    ?>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php
    require_once 'views/Admin/footer.php';
}
?>