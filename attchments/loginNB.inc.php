<?php

session_start();

if(isset($_POST['submit'])){

    include 'dbh.inc.php';
    $uid=mysqli_real_escape_String($conn,$_POST['uid']);
    $pwd=mysqli_real_escape_String($conn,$_POST['pwd']);

    if(empty($uid) || empty($pwd)){
        header("Location: ../projectNB.php?login=empty");
        exit();
    } else{
        $sql=" SELECT * FROM users WHERE user_uid='$uid' OR user_email='$email'";
        $result= mysqli_query($conn, $sql);
        $resulcheck =mysqli_num_rows($result);
        if($resulcheck< 1){
            header("Location: ../projectNB.php?errorresult-login");
            exit();
        } else{
            if($row=mysqli_fetch_assoc($result)){
                //De-hashing my password
                $hashedPwdCheck =password_verify($pwd, $row['user_pwd']);
                if($hashedPwdCheck == false){
                    header("Location: ../projectNB.php?errorpwd-login");
                    exit();
                } elseif($hashedPwdCheck ==true){
                    // Log in the user here
                    $_SESSION['u_id'] =$row['user_id'];
                    $_SESSION['u_first'] =$row['user_first'];
                    $_SESSION['u_last'] =$row['user_last'];
                    $_SESSION['u_email'] =$row['user_email'];
                    $_SESSION['u_uid'] =$row['user_uid'];
                    header("Location: ../projectNB.php");
                    
                    exit();

                }

            }
        }

    }

} else{
    header("Location: ../index.php?error-Login");
    exit();
} session_abort();