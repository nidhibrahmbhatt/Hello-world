<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <?php
    session_start();
    global $username, $password;
    $username =$_POST["uid"];
    $password=$_POST["pwd"];
    $conn2=mysqli_connect("localhost","root","") or die(mysqli_error());
    mysqli_Select_db($conn2,'login_nb') or die("cannot connect to database");
    $query=mysqli_query($conn2,"SELECT * from users where user_uid='$username'");
    $true_user=mysqli_num_rows($query);
    $table_users="";
    $table_password="";

    if($true_user>0)
    {
        while($row=mysqli_fetch_assoc($query))
        {
            $table_users=$row['user_uid'];
            $table_password=$row['user_pwd'];
        if(($username == $table_users) && ($password == $table_password))
        {
                if($password ==$table_password)
                {
                    $_SESSION['user']=$username;
                    header("lcoation: http://localhost/Project%20NB/projectNB.php");
                }
        }
        else
        {
            print '<script> alert("incorrect Password");</script>';
            print '<script> window.location.assign("signupNB.php");</script>';
        }    
        }
    }
    else
    {
        print '<script> alert("Username does not exist");</script>';
        print '<script> window.location.assign("signupNB.php");</script>';
    }
    session_abort();
    ?>
    </body>
</html>

