<h1 align="center"><a href=""><img src="/public/img/logo.png"style="max-height: 100px; max-width: 100px;"></a> | List Produk</h1>
<?php
// echo "<h2>List Produk</h2>";

//echo $this->tag->linkTo(["signup", "Sign Up Here!", 'class' => 'btn btn-primary']);
if ($produk->count() > 0) {
    ?>
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
        <tr>
            <th>ID Produk</th>
            <th>Nama Produk</th>
            <th>Brand Produk</th>
            <th>Deskripsi Produk</th>
            <th>Harga Produk</th>
            <th>Status Produk</th>
            <th colspan="2">Aksi</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="7">Jumlah Produk: <?php echo $produk->count(); ?></td>
            <td><?php echo $this->tag->linkTo(["menu", "Back to Menu", 'class' => 'btn btn-primary']); ?></td>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($produk as $produk) { ?>
            <tr>
                <td><?php echo $produk->id_produk; ?></td>
                <td><?php echo $produk->nama_produk; ?></td>
                <td><?php echo $produk->brand_produk; ?></td>
                <td><?php echo $produk->deskripsi_produk; ?></td>
                <td><?php echo $produk->harga_produk; ?></td>
                <td><?php echo $produk->status_produk; ?></td>
                <td><?php echo $this->tag->linkTo(["Produk/edit", "Edit Produk", 'class' => 'btn btn-primary']); ?></td>
                <td><?php echo $this->tag->linkTo(["Produk/hapus", "Hapus Produk", 'class' => 'btn btn-primary']); ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php
}