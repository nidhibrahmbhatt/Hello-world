<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" type="text/css" href="Project_NB.css">-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
    background-color:navy;
} 
.name{
   
    font-size:20px;
    letter-spacing: 1px;
    text-align:center;
    font-family:'Roboto Mono', monospace;
    text-decoration: none;
    display: inline-block;
   
}
.name:hover{
    color:#F7D516;
    text-decoration:bold;
}
.w3-row-padding img {
    margin-bottom: 12px}
.w3-sidebar {
    width: 110px;
    background: #222;
    height:100%;
    position:absolute;
    top: 0;
    left: 0;
}
#main {
    margin-left: 120px}
i{
    text-align:center;
    }
i:hover{
    color:#F7D516;
}
.w3-hover-black{
    text-decoration:none;
}
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>


<body class="w3-black">

    <nav class="w3-sidebar w3-bar-block w3-small w3-center" id="sidebar">
        <!-- Avatar image in top left corner -->
        <img src="http://localhost/Project%20NB/images/Nbook (6).png" style="width:100%">
        <a href="http://localhost/Project%20NB/projectNB.php#home" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-home w3-xxlarge"></i>
            <p class="name">HOME</p>
        </a>
        <a href="http://localhost/Project%20NB/projectNB.php#textareaN" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
            <i class="fa fa-edit w3-xxlarge"></i>
            <p class="name">CREATE</p>
       <!--</a>
        <a href="http://localhost/Project%20NB/projectNB.php#textareaN" class="w3-bar-item w3-button w3-padding-large w3-hover-black" id="list" name="list">-->
            <i class="fa fa-list w3-xxlarge"></i>
            <p class="name">ENTRIES</p>
        </a>
        <a href="http://localhost/Project%20NB/projectNB.php#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black" >
            <i class="fa fa-envelope w3-xxlarge"></i>
            <p class="name">CONTACT</p>
        </a>
    </nav>

    <!-- Navbar on small screens (Hidden on medium and large screens) -->
    <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
        <a href="ProjectNB.php" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
        <a href="C:\xampp\htdocs\Project NB\editor\temptextarea.php" class="w3-bar-item w3-button" style="width:25% !important">CREATE</a>
        <a href="C:\xampp\htdocs\Project NB\editor\ListNB.php" class="w3-bar-item w3-button" style="width:25% !important">YOUR ENTRIES</a>
        <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
    </div>
    </div>
</body>

