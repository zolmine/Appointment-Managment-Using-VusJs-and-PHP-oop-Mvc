<?php
include "../actions/autoload_act.php";

//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$id = $_GET['id'];
$date = $_GET['date'];

$schedule = new Schedule;
$rows = $schedule->Display_specific_schedule($id);
$data = '';

foreach ($rows as $row) {
    $data = array(
        ':date'         => $date,
        ':start'        => $row['sche_start_time'],
        ':end'          => $row['sche_end_time'],
        ':token'        => 'null',
        ':schedule_id'  => $row['sche_id']

);

}
$appointment = new Appointment;

$insert = $appointment->Reserve($data);
