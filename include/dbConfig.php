<?php
  switch ($dbccount) {
    case 'CAC_Connect':
      # code...
      $dsn = "mysql:host =".DB_HOST_ADDRESS.";dbname = ".DB_ACCOUNT;
      $dbuser = "root";
      $dbpass = "";
      break;

    default:
      # code...
      echo "Provide a vaild Database connection";
      break;
  }
?>
