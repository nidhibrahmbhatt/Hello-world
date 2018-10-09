<?php
        include_once 'C:\xampp\htdocs\Project NB\headerNB.php';
    ?>


<html>
<head>
    <!-- this is  for sidebar
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- this code is for textarea -->
    <link rel="stylesheet" type="text/css" href="http://localhost/Project%20NB/editor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Project%20NB/editor/fontawesome/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome.min.css">
    <script type="text/javascript" src="http://localhost/Project%20NB/editor/ckeditor/ckeditor/ckeditor.js"></script>
<!-- this code is for header-->
   
</head>
<style>
.area {
    position:absolute;
    left:80px;
    top:auto;
    right:10px; 
}
.contact{
    margin-top:0%;
    margin-left:60px;
}

.label{
    color: white;
    padding: 5px;
    font-family:'Roboto Mono', monospace;
    margin-left:60px;
    letter-spacing:1px;
  
}
.editor{
 bottom:20px;
}
.border{
    margin-left:60px;
    width:400px
}
.namelabel{
    font-family:'Roboto Mono', monospace;
    margin-left:60px;
    letter-spacing:0.2px;
    font-size:20px;
}
</style>
<body>
<?php
        include_once 'C:\xampp\htdocs\Project NB\sidebarNB.php';
?>
<div class="area">
    <br>
    <br>
    <div id="home">
    <h2 class="label"> HOME OF NBOOK </h2>
    <hr class="border">
        <?php
        if (isset($_SESSION['u_uid'])){
            print "<h2 class='namelabel'> Hello ".$_SESSION['u_uid']."....How's it going ??? </h2>";
        }
        include_once 'C:\xampp\htdocs\Project NB\home.html';
        ?>
           
    </div>
     <br>
     <br>
     <br>
     <br>                            
    <div class="editor" id="textareaN">
    <h2 class="label"> Create New Entries</h2>
    <hr class="border">
    <?php
        include_once 'C:\xampp\htdocs\Project NB\editor\temptextarea.php';
    ?>
    </div>
    <br>
    <br>
    <div class="contact" id="contact">
    <h2 style="margin-left:0px; margin-top:110%;" class="label"> My contact details</h2>
    <hr style="margin-left:0px;" class="border">
        <?php
        include_once 'C:\xampp\htdocs\Project NB\footerNB.php';
        ?>
    </div>
    </div>
</body>
</html>
