<?php
$no_buku=$_GET['No_Buku'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM pinjam WHERE No_Buku ='$no_buku'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Pinjaman</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Nomor Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="No_Buku" value="<?=$data['No_Buku']?>"class="form-control">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-3 control-label">Nama Anggota</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Anggota" value="<?=$data['Nama_Anggota']?>"class="form-control">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Peminjaman</label>
                            <div class="col-sm-9">
                                <input type="text" name="Tanggal_Peminjaman" value="<?=$data['Tanggal_Peminjaman']?>"class="form-control">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="Judul_Buku" value="<?=$data['Judul_Buku']?>"class="form-control">
                            </div>
                        </div>
							<div class="form-group">
                            <label class="col-sm-3 control-label">Pengarang</label>
                            <div class="col-sm-9">
                                <input type="text" name="Pengarang" value="<?=$data['Pengarang']?>"class="form-control">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> UPDATE Data</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="panel-footer">
                    <a href="?page=jemput&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
    $no_buku=$_POST['No_Buku'];
    $nama_anggota=$_POST['Nama_Anggota'];
    $tanggal_peminjaman=$_POST['Tanggal_Peminjaman'];
    $judul_buku=$_POST['Judul_Buku'];
    $pengarang=$_POST['Pengarang'];
        //buat sql
    $sql="UPDATE pinjam SET Nama_Anggota='$nama_anggota',Tanggal_Peminjaman='$tanggal_peminjaman', 
	Judul_Buku='$judul_buku',Pengarang='$pengarang' WHERE No_Buku ='$no_buku'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit Error");
    if ($query){
        echo "<script>window.location.assign('?page=pinjam&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>


