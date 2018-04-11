<?php
session_start();

$_SESSION['salys'][] = $_POST;

echo json_encode($_SESSION);