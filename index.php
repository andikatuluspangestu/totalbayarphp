    <?php
     if(isset($_POST['hitung'])){
        $nama     = $_POST['nama'];
        $harga    = $_POST['harga'];
        $qty      = $_POST['qty'];
        $total    = $harga * $qty;
     }
    ?>

<html>
<head>
    <title>Menghitung Total Bayar - PHP Kotakode</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
        body {
            background-image: linear-gradient( 109.6deg,  rgba(62,161,219,1) 11.2%, rgba(93,52,236,1) 100.2% );
        }
    </style>

</head>
<body>
    <div class="container p-5">
        <div class="card p-5">
            <h3 class="text-center pb-4">Hitung Total Bayar</h3>
            <form method="POST" class="input-group justify-content-center">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input class="form-control form-control-sm" type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input class="form-control form-control-sm" type="text" name="harga"></td>
            </tr>
            <tr>
                <td>Jumlah Item</td>
                <td>
                    <select name="qty" class="form-select" aria-label="Default select example">
                        <option value=""> Pilih Jumlah Item</option>
                        <?php
                            for($x=1;$x<=50;$x++){
                        ?>
                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <br>
                    <input class="btn btn-sm btn-primary" type="submit" name="hitung" value="Hitung" onclick="alertVarJS()">
                    <input class="btn btn-sm btn-danger" type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
            </form>
        </div>
    </div>

    <!-- Javascript -->
    <script type="text/javascript">
        var variabelJS = '<?php echo $total; ?>';
        function alertVarJS() {
            alert(variabelJS);
        };
    </script>

</body>
</html>
