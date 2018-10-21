<?php

if (isset($_POST['submit'])){
    
    session_Start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}

