<h1 align="center"><a href=""><img src="/public/img/logo.png"style="max-height: 100px; max-width: 100px;"></a> | Tambah Produk</h1>
<!-- submitButton(["Register", 'class' => 'btn btn-primary']); ?> &emsp; <?php echo $this->tag->linkTo(["/", "Back to Home", 'class' => 'btn btn-primary']); ?></h3></th> -->
<?php echo $this->tag->form(["produk/tambah", 'class' => 'form-horizontal']); ?>
    <fieldset>
        
        <div id="legend">
            <legend class="">Tambah Produk</legend>
        </div>

        <div class="control-group">
            <!-- Nama Produk -->
            <label class="control-label" for="nama_produk">Nama Produk</label>
            <div class="controls">
                <?php echo $this->tag->textField(["nama_produk", 'type' => 'text', 'placeholder' => 'Nama Produk', 'class' => 'input-xlarge']); ?>
                <p class="help-block">Masukkan Nama Produk</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Brand Produk -->
            <label class="control-label" for="brand_produk">E-mail</label>
            <div class="controls">
                <?php echo $this->tag->textField(["brand_produk", 'type' => 'text', 'placeholder' => 'Brand Produk', 'class' => 'input-xlarge']); ?>
                <p class="help-block">Masukkan Nama Brand Produk</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Deskripsi Produk -->
            <label class="control-label" for="deskripsi_produk">Deskripsi Produk</label>
            <div class="controls">
                <?php echo $this->tag->textArea(["deskripsi_produk", 'type' => 'text', 'placeholder' => 'Deskripsi Produk', 'class' => 'input-xlarge']); ?>
                <p class="help-block">Masukkan Deskripsi Produk</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Harga Produk -->
            <label class="control-label" for="harga_produk">Harga Produk</label>
            <div class="controls">
                <?php echo $this->tag->textField(["harga_produk", 'type' => 'text', 'placeholder' => 'Harga Produk', 'class' => 'input-xlarge']); ?>
                <p class="help-block">Masukkan Harga Produk</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Status Produk -->
            <label class="control-label" for="status_produk">Harga Produk</label>
            <div class="controls">
                <?php echo $this->tag->textField(["status_produk", 'type' => 'text', 'placeholder' => '0(Kosong), 1(Ada)', 'class' => 'input-xlarge']); ?>
                <p class="help-block">Status: {0:Kosong, 1:Tersedia}</p>
            </div>
        </div>

        <div class="control-group">
            <!-- Submit -->
            <!-- <label class="control-label" for="status_produk">Harga Produk</label> -->
            <div class="controls">
                <h3 align="center"><?php echo $this->tag->submitButton(["tambah", 'class' => 'btn btn-primary']); ?> &emsp;
                <?php echo $this->tag->linkTo(["/menu", "Back to Menu", 'class' => 'btn btn-primary']); ?></h3>
            </div>
        </div>

    </fieldset>
</form>