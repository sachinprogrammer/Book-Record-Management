<?php
$title =$_POST['title'];
$price =$_POST['price'];
$author =$_POST['author'];
$username="root";
$servename="localhost";
$con= mysqli_connect('localhost','root');
if(!$con){
   die(" sorry we failed the connection".mysqli_connect_error());
}
else {
   echo"connection successful";
}
mysqli_select_db($con,'bookrecord');
$q= "INSERT INTO book(title,price,author) values ('$title',$price,'$author')";
$status= mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
    <head>
      <h>Insertation </h>
    </head>
    <body>
        <h1> Book Record management </h1>
        <p> <?php
        if($status==1)
           echo"record inserted";
        else
           echo"record Inserted failed";
         ?>
        </p>
        Do You Want To Insert More Record ? <a href="intertform.php"> Click Here </a>;<br> 
        Do You Want To Go On Home Page ? <a href="home.php"> Click Here </a>;
     </body>
</html>

