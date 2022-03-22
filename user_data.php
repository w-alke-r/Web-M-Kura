<?php
include_once 'connn.php';
$id=$_POST['ID'];
$number=$_POST['number'];

echo"<h2>id: $id</h2>\n";
echo"<h2>phone number: $number</h2>\n";
$check="INSERT INTO voters_reg (id,phone_number)
    VALUES ('$id',$number);";
    mysqli_query($connn,$check);
    

?>