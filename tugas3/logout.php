<?php
@session_start();

session_destroy();

header("location: /web2/tugas2/login.php");
?>