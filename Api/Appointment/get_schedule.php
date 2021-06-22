<?php

include "../../actions/includes.php";


$scheduls = new Schedule;
$rows   = $scheduls->Display_schedule();

$scheduls_arr = array();

foreach ($rows as $row)
{
    $scheduls_row = array(

        'id' => $row['sche_id'],
        'name' => $row['sche_name'],
        'date' => $row['sche_date'],
        'start' => $row['sche_start_time'],
        'end'   => $row['sche_end_time']
    );
    array_push($scheduls_arr,$scheduls_row);
}

echo json_encode($scheduls_arr);