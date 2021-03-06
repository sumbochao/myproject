<?php
use MyProject\Core\URL;
use MyProject\Model\AdminModel;
if (!isset($_SESSION['login_true'])) {
    header('location:' . URL::uri('admin'));
} else {
    require_once 'views/Admin/header.php';
//<!-- Navigation -->
    require_once 'views/Admin/navigation.php';
    $row = AdminModel::selectAllType()->fetch_all();

    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <?php if (isset($_SESSION['success_updateType'])): ?>
                <div class="alert-success">
                    <?php echo $_SESSION['success_updateType']; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['delete_Type'])): ?>
                <div class="alert-success">
                    <?php echo $_SESSION['delete_Type']; ?>
                </div>
            <?php endif; ?>
            <?php if (isset($_SESSION['success_addType'])): ?>
                <div class="alert-success">
                    <?php echo $_SESSION['success_addType']; ?>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Loại
                        <small>Danh Sách</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example"
                       style="text-align: center">
                    <thead>
                    <tr align="center">
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($row as $item): ?>
                        <tr class="odd gradeX" align="center">
                            <td><?php echo $item[0]; ?></td>
                            <td><?php echo $item[1]; ?></td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a
                                        href="<?php echo URL::uri('deleteType'); ?>/<?= $item[0]; ?>">Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                        href="<?php echo URL::uri('updateType'); ?>/<?= $item[0]; ?>">Edit</a></td>
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