<?php
    include "header.php";
    include "connect.php";
    $qry_detail_menu = mysqli_query($connect, "SELECT * from paket where id_paket = '" . $_GET['id_paket'] . "'");
    $dt_menu = mysqli_fetch_array($qry_detail_menu);
?>
<div class="row">
    <div class="col-md-4">
        <img src="img/<?= $dt_menu['gambar'] ?>" class="card-img-top" style="width: 300px; length: 300px">
    </div>
    <div class="col-md-8">
        <form action="add_to_cart.php?id_menu=<?= $dt_menu['id_paket'] ?>" method="post">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <td>Paket</td>
                        <td>
                            <?= $dt_menu['nama_paket'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Price</td>
                        <td>
                            <?= $dt_menu['harga'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td><input type="number" name="quantity" value="0"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input class="btn btn-success" type="submit" value="BUY"></td>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</div>