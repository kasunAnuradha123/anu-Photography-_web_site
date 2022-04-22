<?php
$con = mysqli_connect('localhost','root','','anu_photo');

$sql= "SELECT * FROM contact";
$result =mysqli_query($con,$sql);

$json_array = array();

while($rows = mysqli_fetch_array($result))
{
    $json_array []=$rows;
}

echo json_encode($json_array);
?>

