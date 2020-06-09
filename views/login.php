<?php
require_once "header.php";
require_once "navigation.php";
?>
    <div id="content">
        <form class="ui form" method="post" action="http://127.0.0.1:8888/dev.php.com/myproject/handlelogin">
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
