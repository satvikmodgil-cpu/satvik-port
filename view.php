<?php

$conn = mysqli_connect("localhost","root","","studentdb");

$sql = "SELECT * FROM data";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result))
{
   
    echo "Name: " . $row['name'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "querry" . $row['querry'] . "<br><hr>";
}

?>
