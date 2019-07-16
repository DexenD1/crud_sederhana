<?php
    require __DIR__.'/config.php';
?>
<!-- select data AND insert data -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="text-center">
            <h1>Tabel Siswa</h1>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <form action="create.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="validatopnCustom01">NIS</label>
                            <input type="number" name="nis" class="form-control" id="validatopnCustom01" placeholder="NIS">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="validatopnCustom01">Nama</label>
                            <input type="Nama" name="nama" class="form-control" id="validatopnCustom01" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="validatopnCustom01">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="validatopnCustom01" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <div>
                            <label for="validationTextarea">Textarea</label>
                            <textarea class="form-control" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                            <div class="invalid-feedback">
                            Please enter a message in the textarea.
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>

            <div class="col-md-6">
                <table class="table table-striped">
                    <thead>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                    </thead>
                    <tbody>
                        <?php
                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr><td>".$row["nis"]."</td><td>".$row["nama"]."</td><td>".$row["tanggal_lahir"]."</td><td>".$row["alamat"]."</td></tr>";
                            }
                            } else {
                                echo "0 results";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <hr/>
    
</body>
<script src="js/jquery-3.4.1.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="js/bootstrap.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>