<?php

session_start();
session_destroy();
header("location: ../views/v_login.php");


?>