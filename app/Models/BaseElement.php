<?php

class BaseElement{
    protected $title;
    public $description;
    public $visible=true;
    public $months;

    public function __construct($title, $description)
    {
        if($title==""){
            $this->title="Sin titulo";
        }else{
            $this->title=$title;
        }
        $this->description=$description;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title=$title;
    }

    public function getDuration(){
        $years=floor($this->months/12);
        $extraMonths=$this->months%12;
        if ($years>=1){
            return "$years years $extraMonths months";
        }else{
            return "$this->months months";
        }
    }


}