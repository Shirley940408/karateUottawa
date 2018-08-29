<?php
class beginner{
    private $twig;
    function __construct($twig){
        $this->twig=$twig;
    }
    public function print(){
        echo $this->twig->render('beginner.html', array('name' => 'Fabien'));
    }
}


?>