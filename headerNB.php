<!DOCTYPE html>
<html> 
<head>
    
    <link href="http://localhost/Project%20NB/Project_NB.css" rel="stylesheet">
    
</head>
<style>
header nav{
    width: 100%;

    height: 60px;
    background-color:rgb(0,0,0);
}
header nav ul {
    float: left;
}
header .nav-login{
    float: right;
 }
 header .nav-login form{
     float: left;
     padding-top: 15px;
 }

 header .nav-login form input{
    float: left;
    width: 190px;
    height: 30px;
    padding: 0px 10px; 
    margin-right: 10px;
    border: none;
    line-height: 30px;
    border-radius:50px;
    background-color: rgba(0, 0, 0, 0);    
    font-family:cambria;
    font-size: 15px;
    color: rgb(255, 255, 255);
}
header .nav-login form button{
    float: right;
    width: 120px;
    height: 40px; 
    margin-right: 10px;
    border: none;
    cursor: pointer;
    background-color: rgb(0, 0, 0);
    border-radius:50px;    
    font-family: georgia;
    font-size: 30px;
    color:rgb(255, 255, 255);
  
}
header .nav-login form button:hover{
    background-color:#F7D516;
}
header .nav-login a{
    float: right;
    width: 130px;
    height: 37px;
    margin-left: 10px;
    margin-top: 4px;
    border: none;
    font-family: georgia;
    font-size: 30px;
    background-color: rgb(0, 0, 0);
    color: rgb(255, 255, 255);
    cursor: pointer;
    border-radius:50px;
}
header .nav-login form a:hover{
    background-color:#F7D516;
}
.main-wrapper {
    margin: auto;
    width: 1000px;
}

</style>



<header>
    <nav>
        <div class="main-wrapper"> 
            <div class="nav-login">
                <?php
                session_start();
                if(isset($_SESSION['u_uid']))
                {
                    echo '<form action="attachments/logout.inc.php" method="POST">
                    <button type="Submit" name="submit"> Logout</button>
                </form>';

                }else{
                    session_abort();
                    echo '<form action="attachments/loginNB.inc.php" method="POST">
                        <input type="text" name="uid" placeholder="Username/E-mail">
                        <input type="Password" name="pwd" placeholder="Password">
                        <button type="submit" name="submit">Login </button>
                    </form>
                    <form>
                    <a href="signupNB.php">&nbspSign Up</a>
                    </form>';
                    
                }
                
                ?>
             </div>     
        </div>
    </nav>
</header>
