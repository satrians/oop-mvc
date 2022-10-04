<?php
include "header.php";
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
                            <form class="d-flex" role="search" method="GET">
                                <input class="form-control me-2" type="text" name="keyword">
                                <button class="btn btn-outline-success" type="submit" name="cari" value="Cari">Cari</button>
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
                                    <th>Aksi</th>
                                </tr>
                                <?php
                                if (isset($_GET['cari'])) {
                                    $keyword = $_GET['keyword'];
                                    $query = mysqli_query($koneksi, "select * from kategori where nama_kategori like '%$keyword%'");
                                } else {
                                    $query = mysqli_query($koneksi, "select * from kategori");
                                }
                                $no = 1;
                                while ($ambil_data = mysqli_fetch_array($query)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $ambil_data['id_kategori']; ?></td>
                                        <td><?php echo $ambil_data['nama_kategori']; ?></td>
                                        <td><a href="edit_kategori.php?id=<?php echo $ambil_data["id_kategori"]; ?>" class="btn btn-warning">Edit</a> <a href="hapus_kategori.php?id=<?php echo $ambil_data["id_kategori"]; ?>" class="btn btn-danger">Hapus</a></td>
                                    </tr>
                                <?php
                                }
                                ?>

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