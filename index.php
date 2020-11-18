<?php

require 'inc/configuration.php';
require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {

        require_once("view/index.php");
        
    }
);
$app->get(
    '/home',
    function () {

        require_once("view/index.php");
        
    }
);
$app->get(
    '/vid',
    function () {

        $sql = new Sql();
        $data = $sql->select("SELECT id, title, dates, minister, image FROM videos order by dates desc limit 3;");

        foreach ($data as &$video) {
            $date = $video['dates'];
            $date_sep = explode("-", $date);
            $day = $date_sep[2];
            $month = $date_sep[1];
            $year = $date_sep[0];
            $newDate = $day.'/'.$month.'/'.$year;
            $video['dates'] = $newDate;
        }
        echo json_encode($data);
    }
);

$app->get(
    '/video-:id',
    function ($id) {
        
        $sql = new Sql();

        $data = $sql->select("SELECT * FROM videos WHERE id = $id;");

        foreach ($data as &$vids) {
            $date = $vids['dates'];
            $date_sep = explode("-", $date);
            $day = $date_sep[2];
            $month = $date_sep[1];
            $year = $date_sep[0];
            $newDate = $day.'/'.$month.'/'.$year;
            $vids['dates'] = $newDate;
        }

        $video = $data[0];

        require_once("view/videos.php");
        
    }
);

$app->get(
    '/midia',
    function () {

        require_once("view/Allvideos.php");
        
    }
);

$app->get('/recent-vid', function(){

    $sql = new Sql();
    $data = $sql->select("SELECT id, title, minister, image FROM videos ORDER BY DATES DESC LIMIT 6");

    echo json_encode($data);

});

$app->get('/persev-vid', function(){

    $sql = new Sql();
    $data = $sql->select("SELECT id, title, minister, image FROM videos WHERE assunto = 'Persev';");

    echo json_encode($data);

});

$app->get('/more-vid', function(){

    $sql = new Sql();
    $data = $sql->select("SELECT id, title, minister, image FROM videos;");

    echo json_encode($data);

});

$app->get(
    '/agenda',
    function () {

        require_once("view/schedule.php");
        
    }
);
$app->get('/agenda-event', function(){

    $sql = new Sql();
    $data = $sql->select("SELECT * FROM eventos WHERE eventDate > current_date();");

    foreach ($data as &$events) {
        $date = $events['eventDate'];
        $date_sep = explode("-", $date);
        $day = $date_sep[2];
        $month = $date_sep[1];
        $year = $date_sep[0];
        $newDate = $day.'/'.$month.'/'.$year;
        $events['eventDate'] = $newDate;
    }
    
    echo json_encode($data);

});
$app->get(
    '/contato',
    function () {

        require_once("view/contact.php");
        
    }
);
$app->get(
    '/igreja',
    function () {

        require_once("view/sobre-nos.php");
        
    }
);
$app->run();
?>
