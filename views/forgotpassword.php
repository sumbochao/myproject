<?php
require_once 'views/header.php';
require_once 'views/navigation.php';
?>
    <div class="content">
        <?php if (isset($_SESSION['errorps'])): ?>
            <div class="ui segment">
                <?php echo $_SESSION['errorps']; ?>
            </div>
        <?php endif; ?>
        <form class="ui form" method="POST" action="<?php \MyProject\Core\URL::uri('forgot'); ?>">
            <div class="fields three">
                <div class="field">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" placeholder="email" required>
                 </div>
            </div>
            <button class="ui button" type="submit">Submit</button>
        </form>
    </div>
<?php
require_once 'views/footer.php';
?>