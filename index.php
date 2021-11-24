<?php
include "connection.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Belajar Pemrograman Web</title>
</head>
<body>
    <h2 class="text-center mt-4">Belajar Web</h2>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md">
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">STAMBUK</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $show =  $db -> query("SELECT * FROM tbl_mahasiswa");
                $no = 1;
                while($t = $show -> fetch_array()){
                    echo "
                    <tr>
                    <th scope='row'>$no</th>
                    <td>$t[nama]</td>
                    <td>$t[nim]</td>
                    </tr>
                    ";
                    $no++;
                }
                ?>
            </tbody>
        </table>
        </div>
        <div class="col-md-2"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>