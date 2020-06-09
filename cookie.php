<?php
session_start();
setcookie('mycookie3', 'wiloke', time() + 86400,  '/', false, false, true);
setcookie('mycookie3', '', time() - 1, '/', false, false, true);
