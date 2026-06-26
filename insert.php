<?php

include("config.php");


$name = $_POST['name'];
$email = $_POST['email'];
$querry = $_POST['querry'];

$sql = "INSERT INTO data (name,email,querry)
VALUES ('$name','$email','$querry')";

if(mysqli_query($conn, $sql))
{
    echo "Data Saved Successfully";
}
else
{
    echo "Error: " . mysqli_error($conn);
}

?>
