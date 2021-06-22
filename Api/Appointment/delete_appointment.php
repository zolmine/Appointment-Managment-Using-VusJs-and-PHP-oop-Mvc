<?php
include "../../actions/includes.php";

$id = $_GET['id'];

$app = new Appointment;
$rows = $app->Delete_appointment($id);