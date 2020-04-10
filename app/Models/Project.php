<?php

require_once 'BaseElement.php';
require_once 'Printable.php';

class Project extends BaseElement{

    public function getDescription(){
        return $this->description;
    }

}