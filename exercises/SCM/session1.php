<?php 
session_start();

$_SESSION["usr"] = 'gil';
echo 'session is: ' . $_SESSION["usr"];
