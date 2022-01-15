<?php
$size= sizeof($_POST);
$recod=$size/4;
  For($i=1;$i<=$record;$i++)
  {
    $index1="bookid".$i;
    $bookid[$i]=$_POST[$index1];  

    $index2="title".$i;
    $title[$i]=$_POST[$index2];  

    $index3="price".$i;
    $price[$i]=$_POST[$index3];  

    $index4="author".$i;
    $author[$i]=$_POST[$index4];  
  }
$con= mysqli_connect('localhost','root');
mysqli_select_db($con,'bookrecord');
 For($i=1;$i<=$record;$i++);
 {
   $q="update book SET title='$title[$i]',price=$price[$i],author='$author[$i]' where bookid[$i]";
   mysqli_query($con,$q);
 }
 mysqli_close($con);
 ?>
 ?>
 <!DOCTYPE html>
<html>
    <head>
      <title> updation </title>
    </head>
    <body>
        <h1> Book Record management </h1>
        <p> <?php
            echo"record updated";
            ?>
        </p>
        Do You Want To Update More Record ? <a href="updateform.php"> Click Here </a>; 
     </body>
</html>
