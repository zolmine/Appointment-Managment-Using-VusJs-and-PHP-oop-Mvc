<?php
include "../actions/includes.php";



$token = $_GET['token'];
$cin   = $_GET['cin'];

$object = new User;
$rows   = $object->Login($token,$cin);

if ($rows['nbr'] != 0){
    echo json_encode($rows['token']);
}else{
    echo 'error';
}
