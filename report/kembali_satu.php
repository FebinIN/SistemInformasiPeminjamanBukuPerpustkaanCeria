<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM kembali WHERE No_Buku ='".$_GET ['No_Buku']."'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Peminjaman Buku Perpustakaan Ceria </h2>
                        <h4>Jl. Cokroaminoto No. 54, Kisaran Barat, Kisaran, Sumatera Utara, 21211</h4>
                        <hr>
                        <h3>DATA ANGGOTA</h3>
                        <table class="table table-bordered table-striped table-hover text-left"> 
                            <tbody>
								<tr>
                                    <td><strong>Nomor Buku</strong></td> <td><?= $data['No_Buku'] ?></td>
                                </tr>
                                <tr>
                                    <td width="200"><strong>Nama Anggota</strong></td> <td><?= $data['Nama_Anggota'] ?></td>
                                </tr>
                                <tr>
                                    <td><strong>Tanggal Pengembalian</strong></td> <td><?= $data['Tanggal_Pengembalian'] ?></td>
                                </tr>
								<tr>
                                    <td><strong>Judul Buku</strong></td> <td><?= $data['Judul_Buku'] ?></td>
                                </tr>
								<tr>
                                    <td><strong>Pengarang</strong></td> <td><?= $data['Pengarang'] ?></td>
                                </tr>
								
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Khairil Anwar Sitompul<strong></u><br>
                                        Ka. Perpustakaan Ceria
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>