<?php
    session_start();
    unset($_SESSION["login"]);
    include "public/db.php";
    echo "<script>location='login.php'</script>";