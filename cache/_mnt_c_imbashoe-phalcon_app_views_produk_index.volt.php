<h1 align="center"><a href=""><img src="/public/img/logo.png"style="max-height: 100px; max-width: 100px;"></a> | Tambah Produk</h1>

<?php echo $this->tag->form("produk/tambah"); ?>

    <table class="table table-bordered table-hover">
        <tbody class="thead-light">
        <tr>
            <th><label for="nama_produk">Nama Produk</label></th>
            <th><?php echo $this->tag->textField("nama_produk"); ?></th>
        </tr>
        <tr>
            <th><label for="brand_produk">Brand</label></th>
            <th><?php echo $this->tag->textField("brand_produk"); ?></th>
        </tr>
        <tr>
            <th><label for="deskripsi_produk">Deskripsi Produk</label></th>
            <th><?php echo $this->tag->textField("deskripsi_produk"); ?></th>
        </tr>
        <tr>
            <th><label for="harga_produk">Harga Produk</label></th>
            <th><?php echo $this->tag->textField("harga_produk"); ?></th>
        </tr>
        <tr>
            <th><label for="status_produk">Status Produk(1:tersedia, 0: kosong)</label></th>
            <th><?php echo $this->tag->textField("status_produk"); ?></th>
        </tr>
        <tr>
            <th colspan="2"><h3 align="center"><?php echo $this->tag->submitButton(["Tambah", 'class' => 'btn btn-primary']); ?> &emsp; <?php echo $this->tag->linkTo(["menu", "Back to Menu", 'class' => 'btn btn-primary']); ?></h3></th>
        </tr>
        </tbody>
    </table>
</form>