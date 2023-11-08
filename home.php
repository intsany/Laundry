<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
    <body>
        <?php
          include "connect.php";
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <div class="container">
            <div style="width:600px;float:left;">
                <form action="add_to_cart.php" class="well form-horizontal" method="post">
                    Paket : 
                    <select name="nama_paket" class="form-control">
                        <option></option>
                        <?php
                            $qry_paket=mysqli_query($connect,"SELECT * from paket");
                            
                            while($data_paket=mysqli_fetch_array($qry_paket)){
                        ?>
                        <option value="<?=$data_paket['id_paket']?>"><?=$data_paket['nama_paket']?></option>
                        <?php
                            }
                        ?>
                    </select>
                    Jumlah:
                    <input type="number" name="jumlah" value= "1" class="form-control">
                    <input type="submit" name="simpan" value="Masukkan Keranjang" class="btn btn-primary">
                </form>
            </div>
        </div>
    </body>
</html>