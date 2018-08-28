<?php
class instructors{
    private $twig;
    function __construct($twig){
        $this->twig=$twig;
    }
    public function print(){
        echo $this->twig->render('instructors.html', array('name' => 'Fabien'));
    }
}


?>