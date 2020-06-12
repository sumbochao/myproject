<div class="ui secondary pointing menu">
    <?php
    foreach (\MyProject\Core\App::get('config/app')['navigation'] as $route => $aItem) :
        ?>
        <a href="<?php echo \MyProject\Core\URL::uri($route); ?>"
           class="<?php echo $currentRoute === $route ? 'active' : ''; ?> item">
            <?php echo $aItem['name']; ?>
        </a>
    <?php endforeach; ?>
</div>
