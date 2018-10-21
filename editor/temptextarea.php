<?php
    $conn2=mysqli_connect("localhost","root","") or die(mysql_error());
    mysqli_select_db($conn2,"editor") or die("connot connect to the database");
    include('php_file.php');

    if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $update= TRUE;
    $query="SELECT * from `editornb` where entry_id='$id'";

    $result=mysqli_query($conn2, $query);
        if (count($result) == 1 ){
        $n = mysqli_fetch_array($result);
        $subject =$n['subject'];
        $content = $n['content'];
        }
    }
       
?>

<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" type="text/css" href="http://localhost/Project%20NB/editor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Project%20NB/editor/fontawesome/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome.min.css">
    <script type="text/javascript" src="http://localhost/Project%20NB/editor/ckeditor/ckeditor/ckeditor.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
</head>
<style>

table{
  width:100%;
  table-layout: fixed;
  font-family:'Roboto Mono', monospace;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:400px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 900;
  font-size: 16px;
  color: #fff;
  text-transform: uppercase;
  text-transform:bold;
  letter-spacing: 3px;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 500;
  font-size: 16px;
  color: #fff;
  letter-spacing: 3px;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}
.s_input{
    padding:8px;
    display:inline-block;
    border-bottom:1px;
    width:100%;
    background:inherit;
    Color:white;
    
    }
::placeholder{
    color:#F7D516;
    opacity:100%;
    text-align: center;
    font-family:'Roboto Mono', monospace;
}
.button {
    background-color: inherit; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    width:100%;
    font-weight:800px;
    font-family:'Roboto Mono', monospace;
  
}
.button:hover {
    background-color:#F7D516;
    color: white;
}

.ckeditor{
    background-color:black;
    font-family:'Roboto Mono', monospace;
}


::-webkit-scrollbar {
  width: 6px;
}
::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgb(189,210,233, 0.3);
}
::-webkit-scrollbar-thumb {
  -webkit-box-shadow: inset 0 0 6px rgb(189,210,233, 0.3);
}

.btn1{
    margin: 5px 2px;
    padding: 8px;
    text-align: center;
    border:none;

}

</style>
<script>
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>

<body>
<div class="area">
    <div id="editor">
    <br>
    <form action="http://localhost/Project%20NB/editor/php_file.php" method="POST" id="editorForm">
        <input class="s_input" type="text" name="subject" placeholder="what do you want to call this entry??" value="<?php echo $subject; ?>"> 
        <textarea class="ckeditor" id="editor" name="editor"><?php if(isset($content)) echo $content; ?></textarea>
        <br>
        <?php if ($update == true): ?>
        <button class="button" type="submit" name="update" >UPDATE</button>
        <?php else: ?>
        <button class="button" type="submit" name="submit" >SUBMIT</button> 
        <?php endif ?>
    </form>
    </div>
    <br>

    <br>
    <br>
    <div id="list"> 
    <h2 class="label" style="margin-left:0px"> Your Entries</h2>
    <hr class="border" style="margin-left:0px">
    
    <br>
    
   <div>
    <form method="POST" id="searchform"> 
	    <input class="s_input" type="text" name="name" placeholder="What are you looking for???"> 
	    <button class="button" type="submit" name="search">SEARCH</button> 
	</form> 
    </div>
    <br><br>
    <div class="tbl-header">
    <table  cellpadding="0" cellspacing="0" border="0" id="table-header" name"table-header">
    <thead>
        <tr>
            <th> ID</i></a></th>
            <th> DATE</th>
            <th> SUBJECT</th>
            <th> UPDATE</th> 
            <th> DELETE</th>
        </tr>
    </thead>
    </table>
    </div>
    <div class="tbl-content">
    <table  cellpadding="0" cellspacing="0" border="0" id="table-content" name"table-content">
        <?php
    
            $count=1;
            $user=($_SESSION['u_uid']);
            $query="SELECT * FROM `editornb` where user_uid='".$user."'";
            $result= mysqli_query($conn2, $query);
            $result_check= mysqli_num_rows ($result);
        
     
            if(isset($_POST['search'])){
                if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){
                $name=$_POST['name'];
                $sql="SELECT * FROM `editornb` where content or `subject` LIKE '%". $name. "%' ";
                $result=mysqli_query($conn2, $sql);
                $result_check= mysqli_num_rows ($result);
                }
             }
        
        if ( $result_check > 0 ){
         while ($row= mysqli_fetch_assoc($result))
            {
             
                echo "<tr>";
                echo "<td>" .$count."</td>";
                echo "<td>" .$row["date"]. "</td>";
                echo "<td>" .$row["subject"]."</td>"; 
                echo '<td><a href="http://localhost/Project%20NB/projectNB.php?edit='.$row['entry_id'].'" type="button" class="btn1 btn-primary btn-sm"> 
                <span class="fa fa-pencil-square fa-2x" aria-hidden="true"></span> </a></td>';
                echo '<td><a href="http://localhost/Project%20NB/editor/php_file.php?delid='.$row['entry_id'].'" type="button" class="btn1 btn-danger btn-sm">
                <span class="fa fa-trash-o fa-2x" aria-hidden="true"></span></a></td>';

                echo"</tr>";
                $count++; 
            }
        }
        ?>
    </table>
    </div>  
    </div>
</div>
</body>
