<?php
use Tutoriel\Autoloader;
require '../app/class/autoloader.php';
Autoloader::register();

if(isset($_GET['p'])){
    $p = $_GET['p'];
} else {
    $p = 'home';
}

ob_start();
if($p === 'home'){
    require '../views/home.php';
} elseif($p === 'single'){
    require '../views/single.php';
}
$content = ob_get_clean();
require'../views/templates/default.php';