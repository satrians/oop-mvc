<?php
include "header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-3" style="min-height: 465px;">
            <div class="card">
                <div class="card-header">
                    Tambah Data Kategori
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <form action="simpan_kategori.php" method="POST">
                                <div class="form-group">
                                    <label for="">Nama Kategori</label>
                                    <input type="text" class="form-control mt-2" placeholder="Nama Kategori" name="nama_kategori">
                                </div>
                                <input type="submit" class="btn btn-primary mt-3" value="Simpan">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "footer.html";
?>