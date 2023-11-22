<?php 

require_once 'Core/core.php';
require_once 'Controllers/homeController.php';
require_once 'Controllers/erroController.php';
require_once 'Models/Aluno.php';

$template = file_get_contents('Template/index.html');


ob_start();
    $core = new core;
    $core->start($_GET);

    $saida = ob_get_contents();
ob_end_clean();

$tempPronto = str_replace('{{Area}}',$saida,$template);
echo $tempPronto

?>