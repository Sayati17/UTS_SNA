<?php
$servername = "172.20.0.2";
$username = "root";
$password = "pass12345";
$dbname = "Redlock";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT ID, Nama, Alamat, Jabatan FROM users";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nama</th>";
    echo "<th>Alamat</th>";
    echo "<th>Jabatan</th>";
    echo "</tr>";
    while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['Nama'] . "</td>";
        echo "<td>" . $row['Alamat'] . "</td>";
        echo "<td>" . $row['Jabatan'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} 

else{
    echo "0 results";
}

mysqli_close($conn);
?>
