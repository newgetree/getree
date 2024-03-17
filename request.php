<?php
  session_start();
  $_SESSION["name"] = $_POST["name"];
  $_SESSION["email"] = $_POST["email"];
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  exit;
?>