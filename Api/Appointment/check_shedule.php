<?php

include "../../actions/autoload_act.php";

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$date = $_GET['date'];

$app = new Appointment;
$rows = $app->Check_appointment_schedule($date);
$schedules = [];

foreach ($rows as $row)
{
    $schedule = [

        $row['app_schedule_id']

    ];
    array_push($schedules,$schedule);
}

echo json_encode($schedules);
