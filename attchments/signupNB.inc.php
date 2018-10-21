<?php

if(isset($_POST['submit'])){

    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($conn, $_POST['first']);
    $last = mysqli_real_escape_string($conn, $_POST['last']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Error handler
    // Check for empty fields
    if(empty($first)|| empty($last)|| empty($email)|| empty($uid)|| empty($pwd)){
        header("Location: ../signupNB.php?signupNB=empty");
        exit();
    } else{
        //check if input character are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/",$last)){
            header("Location: ../signupNB.php?signupNB=invalid");
            exit();
        }   else{
                //check if emai is valid
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    header("Location: ../signupNB.php?signupNB=email");
                    exit();
            }else{
                    $sql ="SELECT * FROM users WHERE user_id='$uid'";
                    $result =mysqli_query($conn,$sql);
                    $resultcheck = mysqli_num_rows($result);

                    if($resultcheck > 0){
                        header("Location: ../signupNB.php?signupNB=usertaken");
                        exit();
                    }else{
                        //hashing the password
                        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
                        //inter the user into database
                        $sql ="INSERT INTO users (user_first, user_last, user_email, user_uid,user_pwd) VALUES ('$first','$last','$email','$uid','$hashedpwd');"; 
                        mysqli_query($conn, $sql);
                        header("Location: ../signupNB.php?signupNB=success");
                        exit();
                }
            }
        }
    }
} 
else{
    header("Location: ../signupNB.php");
    exit();
} 