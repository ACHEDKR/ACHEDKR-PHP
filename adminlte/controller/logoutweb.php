<?php
session_start();
include_once('conexion.php');

session_destroy();

header("location:../vista/login.html")
?>