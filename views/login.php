<?php

use MyProject\Core\URL;

require_once "header.php";
require_once "navigation.php";
?>
    <div id="content">
        <form class="ui form" method="POST" action="<?php echo URL::uri('login'); ?>">
            <div class="fields three">
                <div class="field">
                    <label for="login-username">Username / Email</label>
                    <input id="login-username" type="text" name="username" placeholder="Username" required>
                </div>
                <div class="field">
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" placeholder="Password" required>
                </div>
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form>
    </div>
<?php
require_once "footer.php";
