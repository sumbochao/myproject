<?php
require_once "header.php";

use MyProject\Core\URL;
?>
    <div id="content">
        <?php if (isset($_SESSION['erroradd'])): ?>
            <div class="ui segment">
                <?php echo $_SESSION['erroradd']; ?>
            </div>
        <?php endif; ?>
        <form class="ui form" method="post" action="<?php echo URL::uri('add'); ?>">
            <div class="fields three">
                <div class="field">
                    <label for="reg-username">Username</label>
                    <input id="reg-username"
                           type="text"
                           name="username"
                           placeholder="Username" required>
                </div>
                <div class="field">
                    <label for="reg-email">Email</label>
                    <input id="reg-email" type="email" name="email" placeholder="Email" required>
                </div>
                <div class="field">
                    <label for="reg-password">Password</label>
                    <input id="reg-password" type="password" name="password" placeholder="Password" required>
                </div>
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form>
    </div>
<?php
require_once "footer.php";
