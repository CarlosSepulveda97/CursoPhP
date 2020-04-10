<?php

namespace App\Models;

require_once 'BaseElement.php';
require_once 'Printable.php';

class Job extends BaseElement{

    public function __construct($title, $description){
        $newTitle='Job: '.$title;
        parent::__construct($newTitle,$description);
        
    }
    
    public function getDuration(){
       
        $years=floor($this->months/12);
        $extraMonths=$this->months%12;
        if ($years>=1){
            return "Job duration: $years years $extraMonths months";
        }else{
            return "job duration: $this->months months";
        }
    }

    public function getDescription(){
        return $this->description;
    }

}