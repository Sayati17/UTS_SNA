<?php
$servername = "172.20.0.2";
$username = "root";
$password = "pass12345";
$dbname = "Redlock";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT COUNT(*) AS SUM FROM users";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_array($result);
    echo "Total SUM =  " . $row["SUM"];
} 

else{
    echo "0 results";
}

mysqli_close($conn);
?>
