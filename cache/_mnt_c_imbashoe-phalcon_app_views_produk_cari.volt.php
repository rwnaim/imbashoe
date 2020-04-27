<h1 align="center"><a href=""><img src="/public/img/logo.png" style="max-height: 100px; max-width: 100px;"></a> | Cari Produk</h1>
<div class="col-md-6 login-form-1">
    <?= $this->flashSession->output() ?>
    <form method="POST" autocomplete="off" action="<?= $this->url->get('Produk/cari') ?>">
        <div class="form-group">
            <input type="text" class="form-control" id='nama' name='nama' placeholder="Nama" />
        </div>
        <div class="form-group">
            <input type="submit" class="btnSubmit" />
        </div>
    </form>
    <?php foreach ($produk as $prod) { ?>
    <table>
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
    </table>
</div>