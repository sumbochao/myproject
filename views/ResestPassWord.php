<?php
require_once 'header.php';
require_once 'views/navigation.php';

?>
    <div class="content">
        <?php if (isset($_SESSION['errorps'])): ?>
            <div class="ui segment">
                <?php echo $_SESSION['errorps']; ?>
            </div>
        <?php endif; ?>
        <form class="ui form" method="POST" action="<?php \MyProject\Core\URL::uri('resertPass'); ?>">
            <div class="fields three">
                <div class="field">
                    <label for="email">Nhap Password Moi</label>
                    <input id="email" type="password" name="pass" placeholder="password" required>
                    <input id="id" hidden name="id" value="<?php echo $_SESSION['id'];?>"  >
                </div>
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form>
    </div>
<?php
require_once 'views/footer.php';
?>