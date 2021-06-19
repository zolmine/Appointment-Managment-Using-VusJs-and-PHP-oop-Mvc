<?php
include "../actions/functions.php";
include "../actions/autoload_act.php";

$full_name = $_POST['full_name'];
$cin       = $_POST['cin'];
$age       = $_POST['age'];
$gender    = $_POST['gender'];
$profession = $_POST['profession'];

$token = token_generator($cin,$full_name);

//echo $token;
$reg = new User;
$data = array(
    ':fullname'     => $full_name,
    ':cin'          => $cin,
    ':age'          => $age,
    ':profession'   => $profession,
    ':gender'       => $gender,
    ':token'        => $token
);
$insert = $reg->Register($data);
