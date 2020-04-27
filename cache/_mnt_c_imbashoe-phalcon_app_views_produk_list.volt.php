<h1 align="center"><a href=""><img src="/public/img/logo.png"style="max-height: 100px; max-width: 100px;"></a> | List Produk</h1>
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
        <td colspan="2">Jumlah Produk: <?php echo $produk->count(); ?></td>
        <td colspan='3'><a href="<?= $this->url->get('produk') ?>" class='btn btn-primary'>Tambah Produk</a></td>
        <td><a href="<?= $this->url->get('Produk/cari/') ?>" class='btn btn-primary'>Cari Produk</a></td>
        <td colspan="2"><a href="<?= $this->url->get('menu') ?>" class='btn btn-primary'>Menu</a></td>
    </tr>
    </tfoot>
    <tbody>
    <?php foreach ($produk as $prod) { ?>
        <tr>
            <td><?= $prod->id_produk ?></td>
            <td><?= $prod->nama_produk ?></td>
            <td><?= $prod->brand_produk ?></td>
            <td><?= $prod->deskripsi_produk ?></td>
            <td><?= $prod->harga_produk ?></td>
            <td><?= $prod->status_produk ?></td>
            <td><a href="<?= $this->url->get('Produk/edit/' . $prod->id_produk) ?>" class='btn btn-primary'>Edit</a></td>
            <td><a href="<?= $this->url->get('Produk/hapus/' . $prod->id_produk) ?>" class='btn btn-primary'>Hapus</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>