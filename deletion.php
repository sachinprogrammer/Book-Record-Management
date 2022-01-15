<?php
$size= sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
 {
     $index="b".$j;
     if(isset($_POST[$index]))
        $b_id[$i]= $_POST[$index];
    else
    $i--;    
 }
$con= mysqli_connect('localhost','root');
if(!$con){
    die(" sorry we failed the connection".mysqli_connect_error());
 }
 else {
    echo"connection successful";
 }
mysqli_select_db($con,'bookrecord');
for($k=1;$k<=$size;$k++)
 {
  $q= "deletion from book where bookid=".$b_id[$k];
  mysqli_query($con,$q);   
 }
 mysqli_close($con);
 ?>
 <!DOCTYPE html>
<html>
    <head>
      <title> Deletion </title>
    </head>
    <body>
        <h1> Book Record management </h1>
        <p> <?php
            echo"record deleted";
            ?>
        </p>
        Do You Want To Delete More Record ? <a href="deleteform.php"> Click Here </a>;<br>
        Do You Want To Go On Home Page ? <a href="home.php"> Click Here </a>;
     </body>
</html>
