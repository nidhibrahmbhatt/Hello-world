<?php
    session_start();
    if(isset($_SESSION['u_uid']))
    {
        header("location:http://localhost/Project%20NB/projectNB.php");
        
    }
    else{
        session_abort();
        include_once 'headerNB.php';?>
        <body>
        <img src="http://localhost/Project%20NB/images/index.png" style="width:100%">
        </body>
       
    <?php }
  
?>