<?php
include "../actions/includes.php";


$full_name = $_GET['fullname'];
$cin       = $_GET['cin'];
$age       = $_GET['age'];
$profession = $_GET['profession'];

$token = token_generator($cin,$full_name);

//echo $token;
$reg = new User;
$data = array(
    ':fullname'     => $full_name,
    ':cin'          => $cin,
    ':age'          => $age,
    ':profession'   => $profession,
    ':token'        => $token
);
$insert = $reg->Register($data);

echo json_encode($token);
