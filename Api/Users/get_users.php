<?php
//function for loading classes
include "../../actions/autoload_act.php";

// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$users = new User;
$rows = $users->Get_users();
$users_arr = array();

foreach ($rows as $row)
{

    $users_row = array(

        'id' => $row['User_id'],
        'full_name' => $row['User_fullname'],
        'cin'  => $row['User_age'],
        'profession' => $row['User_profession'],
        'gender' => $row['User_gender'],
        'token'  => $row['User_token']
    );
    array_push($users_arr,$users_row);
}

echo json_encode($users_arr);