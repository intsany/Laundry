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
        <div style="width:600px;float:left;">
                <h2>Total Transaksi</h2>
                <table class="table table-hover striped">
                    <thead>
                        <tr>
                            <th>NO</th><th>Jenis Paket</th><th>Jumlah</th><th>Total</th><th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($_SESSION['cart'])){
                            foreach (@$_SESSION['cart'] as $key_produk => $val_produk): 
                        ?>
                        <tr>
                            <td><?=($key_produk+1)?></td><td><?=$val_produk['nama_paket']?></td><td><?=$val_produk['qty']?></td><td><?=$val_produk['harga'] * $val_produk['qty']?></td><td><a href="hapus_cart.php?id=<?=$key_produk?>"class="btn btn-danger"><strong>X</strong></a></td>
                        </tr>
                        <?php endforeach ?>
                        <?php } ?>
                    </tbody>
                </table>
                <form action="checkout.php" class="well form-horizontal" method="post">
                    Nama Member :
                    <select name="nama" class="form-control">
                        <option></option>
                        <?php
                            $qry_member=mysqli_query($connect,"SELECT * from member");
                            
                            while($data_member=mysqli_fetch_array($qry_member)){
                        ?>
                        <option value="<?=$data_member['id']?>"><?=$data_member['nama']?></option>
                        <?php
                            }
                        ?>
                    </select>
                    Status : 
                    <?php 
                        $arr_status=array('dibayar'=>'Dibayar','belum_dibayar'=>'Belum DIbayar');
                    ?>
                    <select name="status" class="form-control">
                        <option></option>
                        <?php foreach ($arr_status as $key_status => $val_status):?>
                        <option value="<?=$key_status?>"><?=$val_status?></option>
                        <?php endforeach ?>
                    </select>
                    <input type="submit" name="simpan" value="Checkout" class="btn btn-primary">
                </form>
            </div>