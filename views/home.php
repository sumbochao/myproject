<?php
use MyProject\Model\User;
use MyProject\Core\URL;

require_once "header.php";
require_once "navigation.php";
require_once 'src/Model/User.php';
if (isset($_SESSION['isLogin'])) {
    echo 'Xin Chào Bạn ' . $_SESSION['isLogin'];
    ?>
    <br>
    <video width="320" height="240" autoplay controls loop>
        <source src="./assets/video/11.webm">
    </video>
    <br>
    <a href="./assets/111111.jpg"><img width="230" height="240" src="" alt=""><br>Phượt SaPa</a><br>


    <?php if ($_SESSION['isLogin'] == 'admin') {
        $a = User::SelectAll()->fetch_all();
        ?>
        <div class="ui button">
            <a href="<?php echo URL::uri('add'); ?>">Thêm Thành Viên</a>
        </div>
        <br>
        <table width="600px" border="1" style="color: #00b5ad; text-align: center">
            <tr>
                <th>id</th>
                <th>username</th>
                <th>email</th>
                <td>Thao tác</td>
                <td>Thao tác</td>
            </tr>
            <?php
            foreach ($a as $item => $row) {
                ?>
                <tr>
                    <th><?php echo $row[0]; ?></th>
                    <th><?php echo $row[1]; ?></th>
                    <th><?php echo $row[2]; ?></th>
                    <td><a href="<?php echo URL::uri('update');?>/<?= $row[0];?>">Sửa</a></td>
                    <td><a href="<?php echo URL::uri('delete');?>/<?= $row[0];?>">Xóa</a></td>
                </tr>
            <?php } ?>
        </table>

        <?php

    }
}
?>
    <div id="content" style="background-image: ">
        Homepage
    </div>
<?php
require_once "footer.php";
