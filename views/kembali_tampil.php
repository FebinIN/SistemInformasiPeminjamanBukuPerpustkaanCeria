<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Pengembalian Buku</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th width="15%">Nomor Buku</th>
                                <th>Nama Anggota</th>
                                <th>Tanggal Kembali</th>
                                <th>Judul Buku</th>
                                <th>Pengarang</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM kembali";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['No_Buku'] ?></td>
                                    <td><?= $data['Nama_Anggota'] ?></td>
                                    <td><?= $data['Tanggal_Pengembalian'] ?></td>
                                    <td><?= $data['Judul_Buku'] ?></td>
                                    <td><?= $data['Pengarang'] ?></td>
                                    <td>
                                        <a href="?page=kembali&actions=edit&No_Buku=<?= $data['No_Buku'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        
                                        <a href="?page=kembali&actions=delete&No_Buku=<?= $data['No_Buku'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                        <a href="report/kembali_satu.php?No_Buku=<?= $data['No_Buku'] ?>" target="_blank" class="btn btn-info btn-xs">
                                            <span class="fa fa-print"></span>
                                        </a>
                                                                            </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>                   

                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
