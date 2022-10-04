<?php
include "header.html";
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
                            <form action="">
                                <div class="form-group">
                                    <label for="">Kode Kategori</label>
                                    <input type="text" class="form-control mt-2 mb-1" placeholder="kode kategori">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Kategori</label>
                                    <input type="text" class="form-control mt-2" placeholder="nama kategori">
                                </div>
                                <input type="submit" name="" id="" class="btn btn-primary mt-3" value="Simpan">
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