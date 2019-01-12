<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Peminjaman Buku</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        
						 <div class="form-group">
                            <label class="col-sm-3 control-label">Nomor Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="No_Buku" class="form-control" placeholder="BBB-XXXX" >
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="col-sm-3 control-label">Nama Anggota</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama_Anggota" class="form-control">
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="col-sm-3 control-label">Tanggal Peminjaman</label>
                            <div class="col-sm-9">
                                <input type="text" name="Tanggal_Peminjaman" class="form-control" placeholder="YYYY-MM-DD">
                            </div>
                        </div>
						 <div class="form-group">
                            <label class="col-sm-3 control-label">Judul Buku</label>
                            <div class="col-sm-9">
                                <input type="text" name="Judul_Buku" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Pengarang</label>
                            <div class="col-sm-9">
                                <input type="text" name="Pengarang"class="form-control">
                            </div>
                        </div>
                         
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> SIMPAN </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pinjam&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Peminnjaman
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
    $sql="INSERT INTO pinjam VALUES ('$no_buku','$nama_anggota','$tanggal_peminjaman','$judul_buku','$pengarang')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=pinjam&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
