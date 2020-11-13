<?php
session_start();

require 'import.php';

$import = new Import();
$router = new Router();

$view = $router->getPage();


ob_start();
    $import->getBaseTemplate();
    $template = new Template($view);

    $html = $template->show(ob_get_contents());

ob_end_clean();

echo $html;