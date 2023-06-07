<?php
include 'fungsi.php';
$jumlah = new Jumlah();
?>
<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" ” content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>iKantin wikrama</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>

    <body>
        <nav class="navbar-inverse" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-shopping-cart"></i> iKantin wWikrama</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php"><i class="fa fa-home"></i> Beranda</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#buy"><i class="fa fa-shopping-cart"></i> Beli</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"></a></li>
                    </ul>
                </div>

            </div>
            <!-- / .navbar-collapse -->
            <!-- /. container-fluid -->
        </nav>
        <div class="container" style="margin-top: 50px;">
            <div class=" panel-success">
                <div class="panel-body bg-primary">
                    <div class="container">
                        <h1><i class="fa fa-shopping-cart"></i> Selamat datang di iKantin Wikrama</h1>
                    </div>
                </div>
            </div>

        <!-- [Modal Form] -->

        <div class="modal fade" id="buy" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger" style="border-radius: 5px 5px 0px 0px;">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times; </button>
                        <h4 class="modal-title" id="">Form Pembelian</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-group" action="" method="post">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-cutlery"></i></span>
                                <input type="number" class="form-control" name="cireng" id="cireng" placeholder="Masukkan Jumlah Cilok Yang Dibeli *" readOnly>
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-cutlery"></i></span>
                                <input type="number" class="form-control" name="cilok" id="cilok" placeholder="Masukkan Jumlah Cireng Yang Dibeli *" readonly>
</div>

                            <div class="modal-footer">
                                <button type="button" id="btncilok" onclick="Onlycilok()" class="btn btn-success" style="float:left;">Cireng</button>
                            
                            <button type="button"  class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                            <button type="submit" class="btn btn-primary" name="check"><i class="fa fa-check"></i> Cek Total</button>
                            <button type="button" id="btncireng" onclick="Onlycireng()" class="btn btn-success" style="float:left;">Cilok</button>
                    </div>

                    </div>

                </div>

            </div>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -

-->

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

            <!-- Include all compiled plugins (below), or include individual files as needed -->

            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="container">
                        <?php
                        if (isset($_POST['check'])) {
                            $jmlcilok = $_POST['cilok'];
                            $jmlcireng = $_POST['cireng'];
                            if ($jmlcilok == null) {
                                $jumlah->getJumlah(0,$jmlcireng,0,0);
                            } elseif ($jmlcireng == null) {
                                $jumlah->getJumlah($jmlcilok,0, 0,0);
                            } 
                            else {
                                $jumlah->getJumlah($jmlcilok, $jmlcireng);
                            }
                            $jumlah-> setHarga();
                            $jumlah-> cetakStruk();
                        }
                        ?>
                    </div>
                </div>
            </div>
<style>
    .card1 {
        display:flex;
        justify-content: center;
        text-align: center;
        margin-left: 40px;
        border: 1px solid black;
    }
    .card2 {
        margin-top: 40px;
        display:flex;
        justify-content: center;
        text-align: center;
        margin-left: 40px;
        border: 1px solid black;
    }
    .card3{
        margin-top: 40px;
        display:flex;
        justify-content: center;
        text-align: center;
        margin-left: 40px;
        border: 1px solid black; 
    }
    .judul h1{
    text-align: center;
    margin-bottom: 40px;
    color:cornflowerblue;
}
.footer{
    margin-top: 200px;
    border: 1px solid black;
    background-color: #000000;
    width: 100%;
}
.footer h3{
color:#ffff;
text-align: center;
}
</style>
<div class="judul">
<h1>Menu Kita Hari Ini</h1>
<div class="card1" style="width: 80rem;">
  <img src="cilok.jpeg" class="card-img-top" alt="..." height="200px" width="200px">
  <div class="card-body">
    <h3 class="card-title">Cilok</h3>
    <p class="card-text">Cilok ini dibuat dengan bumbu yang spesial yang membuat mu bisa lulus S2 tanpa harus kuliah</p>
    <p class="card-text">Rp.5000</p>
    <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#buy">Beli</a>
  </div>
</div>

<div class="card2" style="width: 80rem;">
  <img src="cireng.jpg" class="card-img-top" alt="..." height="200px" width="200px">
  <div class="card-body">
    <h3 class="card-title">Cireng</h3>
    <p class="card-text">Dengan memakan cireng ini kamu akan menjadi anime dan bisa mendapatkan cewe anime sesuka mu</p>
    <p class="card-text">Rp.1000</p>
    <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#buy">Beli</a>
  </div>
</div>
</div>
<div class="footer">
<h3>Terima kasih telah mengunjungi IKantin Wikrama</h3>
</div>
    </body>
    </html>

    <script type="text/javascript">
        function Onlycilok() {
            document.getElementById("cireng").readOnly = true;
            document.getElementById("cilok").readOnly = false;
            document.getElementById("btncilok").disabled = true;
            document.getElementById("btncireng").disabled = false;
        }

        function Onlycireng() {
            document.getElementById("cireng").readOnly = false;
            document.getElementById("cilok").readOnly = true;
            document.getElementById("btncireng").disabled = true;
            document.getElementById("btncilok").disabled = false;
          
        }
    
        function exit() {
            document.getElementById("cilok").readOnly = true;
            document.getElementById("cireng").readOnly = true;
        }
    </script>