<?php

class job{
    private $title;
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

$job1=new job('PHP Developer','This is an awesome job!!');
$job1->months=16;

$job2=new job('Python Developer','This is an awesome job!!');
$job2->months=20;

$job3=new job('','This is an awesome job!!');
$job3->months=20;


$jobs=[

    $job1,
    $job2,
    $job3

    /*
    [
        'title'=>'PHP Developer',
        'description'=>'This in an awesome job!!',
        'visible'=>true,
        'months'=>12
    ],
    [
        'title'=>'Python Dev',
        'description'=>'This in an awesome job!!',
        'visible'=>false,
        'months'=>6
    ],
    [
        'title'=>'Devops',
        'description'=>'This in an awesome job!!',
        'visible'=>false,
        'months'=>16
    ],
    [
        'title'=>'Node Dev',
        'description'=>'This in an awesome job!!',
        'visible'=>true,
        'months'=>8
    ],
    [
        'title'=>'Frontend Dev',
        'description'=>'This in an awesome job!!',
        'visible'=>true,
        'months'=>10
    ]
        */
];

    function printJob($job){
            
        if ($job->visible==false){
            return;
        }

        echo '<li class="work-position">';
        echo '<h5>' . $job->getTitle() . '</h5>';
        echo '<p>' . $job->description . '</p>';
        echo '<p>' . $job->getDuration() . '</p>';
        echo '<strong>Achievements:</strong>';
        echo '<ul>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '</ul>';
        echo '</li>';
    }

    




