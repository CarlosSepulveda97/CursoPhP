<?php

namespace App\Models;

class Project extends BaseElement{

    public function getDescription(){
        return $this->description;
    }

}