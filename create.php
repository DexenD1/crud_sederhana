<?php
    require __DIR__.'/config.php';

    $sql = "INSERT INTO siswa (nis, nama, alamat) VALUES ('" . $_POST['nis'] . "', '" . $_POST['nama'] . "', '" . $_POST['alamat'] . "')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>