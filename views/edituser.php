<?php
require_once "header.php";

use MyProject\Core\Request;
use MyProject\Core\URL;
use MyProject\Model\User;

$id = Request::uri()[1];
$data = User::getaddUser($id)->fetch_all();

?>
    <div id="content">
        <!--        --><?php //if (isset($_SESSION['erroradd'])): ?>
        <!--            <div class="ui segment">-->
        <!--                --><?php //echo $_SESSION['erroradd']; ?>
        <!--            </div>-->
        <!--        --><?php //endif; ?>
        <!--        --><?php //if (isset($_SESSION['suss'])): ?>
        <!--            <div class="ui segment">-->
        <!--                --><?php //echo $_SESSION['suss']; ?>
        <!--            </div>-->
        <!--        --><?php //endif; ?>
        <form class="ui form" method="post" action="<?php echo URL::uri('update'); ?>">
            <div class="fields three">
                <div class="field">

                    <input id="id" hidden name="id" placeholder="id" value="<?php echo $data[0][0]; ?>">
                </div>
                <div class="field">
                    <label for="reg-username">Username</label>
                    <input id="reg-username" type="text" name="username" placeholder="Username"
                           value="<?php echo $data[0][1]; ?>">
                </div>
                <div class="field">
                    <label for="reg-email">Email</label>
                    <input id="reg-email" type="email" name="email" placeholder="Email"
                           value="<?php echo $data[0][2]; ?>">
                </div>
                <div class="field">
                    <label for="reg-password">Password</label>
                    <input id="reg-password" type="password" name="password" placeholder="Password" ">
                </div>
            </div>
            <button class="ui button" type="submit">Sửa</button>
        </form>
    </div>
<?php
require_once "footer.php";
