<?php
session_start();
session_destroy();

header('location:../sms/index.php');
?>