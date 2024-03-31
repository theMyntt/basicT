<?php
session_start();

$_SESSION["NAME"] = null;
$_SESSION["ID"] = null;

session_destroy();

echo "<script>location.href='../../';</script>";
?>