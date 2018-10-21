<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if($_SESSION['u_uid'])
    { 
    }
    else
    {   header("location: http://localhost/Project%20NB/signupnb.php");
        exit();
    }
    $conn2=mysqli_connect("localhost","root","") or die(mysql_error());
    mysqli_Select_db($conn2,"editor") or die("connot connect to the database");
    $user=$_SESSION['u_uid'];
    $subject="";
    $entry="";
    $update = FALSE;
    $id=0;

if(isset($_POST['submit']))
   {
    $date= date("Y/m/d");
    $subject=$_POST['subject'];
    $entry=$_POST['editor'];
    $stmt = mysqli_prepare($conn2,"INSERT INTO `editornb` (`user_uid`,`subject`, `content`, `date`) values ('".$user."','".$subject."','".$entry."','".$date."' )");
    $er = mysqli_stmt_execute($stmt);

    if( $er == TRUE ) {
        print'<script> alert("Wohoo!! you have successfully inserted your entry check out the list!!!");</script>';
    }
    
    else{
        header("location:http://localhost/Project%20NB/projectNB.php");
        exit();
    }
    header("location:http://localhost/Project%20NB/projectNB.php#home");
}


if (isset($_POST['update'])) {
    $id = isset($_POST['edit']);
    $sub = mysql_real_escape_string(htmlspecialchars($_POST['subject']));
    $content = mysql_real_escape_string(htmlspecialchars($_POST['editor']));
    $date= date("Y/m/d");
    $query =mysqli_query($conn2,"UPDATE editornb SET content='$content', `date`='$date', `subject`='$sub' WHERE entry_id= '$id'");
  
    $check=mysqli_stmt_execute($query);

    if( $check == true){
        print'<script> alert("Sucessfully updated!!!");</script>';
    }
    else{
        header("location:http://localhost/Project%20NB/projectNB.php#home");
        
    }
    
}

if (isset($_GET['delid']))
{   
    $id=$_GET['delid'];
     $sql= "DELETE FROM editornb WHERE entry_id= '$id' ";
     $answer= mysqli_query($conn2,$sql);
     print'<script> alert("Sucessfully deleted!!!");</script>';
     header("location:http://localhost/Project%20NB/projectNB.php#textareaN");
     
 }
session_abort();