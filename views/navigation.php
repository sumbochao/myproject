<div class="ui secondary pointing menu">
    <?php

    use MyProject\Core\App;
    use MyProject\Core\Request;
    use MyProject\Core\URL;

    $uri = Request::uri()[0];
    require_once 'function/islogin.php';
    foreach (App::get('config/app')['navigation'] as $route => $aItem) :
        ?>
        <?php
        if (isset($aItem['conditional'])) {
            $compare = strpos($aItem['conditional'], '!') !== false ? false : true;
            $func = str_replace('!', '', $aItem['conditional']);
            if (call_user_func($func) !== $compare) {
                continue;
            }
        }
        ?>
        <a href="<?php echo URL::uri($route); ?>"
           class="<?php echo $aItem['route'] === $uri ? 'active' : ''; ?> item">
            <?php echo $aItem['name']; ?>
        </a>
    <?php endforeach; ?>
</div>
