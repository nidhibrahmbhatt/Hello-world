<?php
    include_once 'headerNB.php';
?>

<style>

.signup-form{
   width: 290px;
  height: 570px;
   margin:auto;
   padding: 30px;
   background-image:url("http://localhost/Project%20NB/images/sp1.png");
   background-position:center;
  opacity: 10.80;
  border-radius: 1px;
}

</style>
<section class="main-container">
    <div class="main-wrapper">
           <h2> Signup </h2>
        <form class="signup-form" action="attachments/signupNB.inc.php" method="POST">
            <input type="text" name="first" placeholder="Firstname">
            <input type="text" name="last" placeholder="Lastname">
            <input type="text" name="email" placeholder="E-mail">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit"> Sign up </button>
        </form>

    </div>
</section>




