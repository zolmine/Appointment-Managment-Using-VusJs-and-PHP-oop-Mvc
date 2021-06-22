<?php
include "../actions/includes.php";



$id = $_GET['id'];
$date = $_GET['date'];
$token = $_GET['token'];

$schedule = new Schedule;
$rows = $schedule->Display_specific_schedule($id);
$data = '';

foreach ($rows as $row) {
    $data = array(
        ':date'         => $date,
        ':start'        => $row['sche_start_time'],
        ':end'          => $row['sche_end_time'],
        ':token'        => $token,
        ':schedule_id'  => $row['sche_id']

);

}
$appointment = new Appointment;

$insert = $appointment->Reserve($data);
