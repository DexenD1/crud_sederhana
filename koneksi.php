<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "vsga";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT nis, nama, tanggal_lahir, alamat FROM siswa"    ;
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "NIS: " . $row["nis"]. " - Name: " . $row["nama"]. " " . $row["tanggal_lahir"]. " " . $row["alamat"] ."<br>";
        }
    } else {
        echo "0 results";
    }
    
    mysqli_close($conn);

    echo "Connected successfully";
?>