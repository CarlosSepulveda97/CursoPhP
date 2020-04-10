<?php

require_once 'app/Models/Job.php';
require_once 'app/Models/BaseElement.php';
require_once 'app/Models/Project.php';
require_once 'app/Models/Printable.php';

$job1=new job('PHP Developer','This is an awesome job!!');
$job1->months=16;

$job2=new job('Python Developer','This is an awesome job!!');
$job2->months=20;

$job3=new job('','This is an awesome job!!');
$job3->months=20;

$project1=new Project('Project 1', 'Description 1');


$jobs=[
    $job1,
    $job2,
    $job3    
];

$projects=[
    $project1,
];


    function printElement(Printable $job){
            
        if ($job->visible==false){
            return;
        }

        echo '<li class="work-position">';
        echo '<h5>' . $job->getTitle() . '</h5>';
        echo '<p>' . $job->getDescription() . '</p>';
        echo '<p>' . $job->getDuration() . '</p>';
        echo '<strong>Achievements:</strong>';
        echo '<ul>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
        echo '</ul>';
        echo '</li>';
    }
