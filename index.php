<?php

require_once './vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader);

if(array_key_exists('url',$_GET)){
    $url=$_GET['url'];
    $array=explode('/',$url);
    if(!file_exists($array[0].".php")){
        echo "Sorry, wrong route";
        exit();
    }
    require_once($array[0].".php");
    $controller=new $array[0]($twig);
    $controller->print();
}
else{
    echo $twig->render('index.html', array('name' => 'Fabien'));
}


?>