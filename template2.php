<?php
include "header.html";
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-3" style="min-height: 465px;">
            <div class="card">
                <div class="card-header">
                    Data Kategori
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <a href="" class="btn btn-primary">Tambah Data</a>
                        </div>
                        <div class="col-4">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="text">
                                <button class="btn btn-outline-success" type="submit">Kirim</button>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Kategori</th>
                                    <th>Nama Kategori</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>K-0001</td>
                                    <td>Komputer</td>
                                </tr>
                            </table>
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