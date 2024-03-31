<?php
session_start();

if (isset($_SESSION["EMAIL"])) {
  unset($_SESSION["EMAIL"]);
  unset($_SESSION["NAME"]);

  header("Location:./");
  exit();
}
?>