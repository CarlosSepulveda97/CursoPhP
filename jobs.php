<?php

class job{
    private $title;
    public $description;
    public $visible;
    public $months;

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title=$title;
    }
}

$job1=new job();
$job1->setTitle=('PHP Developer');
$job1->description='This is an awesome job!!';
$job1->visible=true;
$job1->months=16;

$job2=new job();
$job2->setTitle('Python Developer');
$job2->description='This is an awesome job!!';
$job2->visible=true;
$job2->months=20;


$jobs=[

    $job1,
    $job2

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
        echo '<p>' . getDuration($job->months) . '</p>';
        echo '<strong>Achievements:</strong>';
        echo '<ul>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '</ul>';
        echo '</li>';
    }

    function getDuration($months){
        $years=floor($months/12);
        $extraMonths=$months%12;
        if ($years>=1){
            return "$years years $months months";
        }else{
            return "$months months";
        }
    }



