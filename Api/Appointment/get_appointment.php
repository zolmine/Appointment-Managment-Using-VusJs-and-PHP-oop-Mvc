<?php
include "../../actions/includes.php";

$token = $_GET['token'];

$inst = new Appointment;
$rows = $inst->Appointment_fo_user($token);

$dataSend = array();

foreach ($rows as $row) {

    $data = array(
        'id'    => $row['app_id'],
        'date'  => $row['app_date'],
        'start' => $row['app_start_time'],
        'end'   => $row['app_end_time']

    );
array_push($dataSend,$data);
}

echo json_encode($dataSend);