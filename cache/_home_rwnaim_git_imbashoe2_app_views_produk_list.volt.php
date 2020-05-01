<html>

<head>
    <style>
        :root {
            --input-padding-x: 1.5rem;
            --input-padding-y: .75rem;
        }

        body {
            background: #007bff;
            background: linear-gradient(to right, #0062E6, #33AEFF);
        }

        .card-signin {
            border: 0;
            border-radius: 1rem;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
        }

        .card-signin .card-title {
            margin-bottom: 2rem;
            font-weight: 300;
            font-size: 1.5rem;
        }

        .card-signin .card-body {
            padding: 2rem;
        }

        .form-signin {
            width: 100%;
        }

        .form-label-group>label {
            background: none;
            pointer-events: none;
        }

        .form-signin .btn {
            font-size: 80%;
            border-radius: 5rem;
            letter-spacing: .1rem;
            font-weight: bold;
            padding: 1rem;
            transition: all 0.2s;
        }

        .form-label-group {
            position: relative;
            margin-bottom: 1rem;
        }

        .form-label-group input {
            height: auto;
            border-radius: 2rem;
        }

        .form-label-group>input,
        .form-label-group>label {
            padding: var(--input-padding-y) var(--input-padding-x);
        }

        .form-label-group>label {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            margin-bottom: 0;
            /* Override default `<label>` margin */
            line-height: 1.5;
            color: #495057;
            border: 1px solid transparent;
            border-radius: .25rem;
            transition: all .1s ease-in-out;
        }

        .form-label-group input::-webkit-input-placeholder {
            color: transparent;
        }

        .form-label-group input:-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-moz-placeholder {
            color: transparent;
        }

        .form-label-group input::placeholder {
            color: transparent;
        }

        .form-label-group input:not(:placeholder-shown) {
            padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
            padding-bottom: calc(var(--input-padding-y) / 3);
        }

        .form-label-group input:not(:placeholder-shown)~label {
            padding-top: calc(var(--input-padding-y) / 3);
            padding-bottom: calc(var(--input-padding-y) / 3);
            font-size: 12px;
            color: #777;
        }

        .btn-google {
            color: white;
            background-color: #ea4335;
        }

        .btn-facebook {
            color: white;
            background-color: #3b5998;
        }

        /* Fallback for Edge
        -------------------------------------------------- */

        @supports (-ms-ime-align: auto) {
            .form-label-group>label {
                display: none;
            }

            .form-label-group input::-ms-input-placeholder {
                color: #777;
            }
        }

        /* Fallback for IE
        -------------------------------------------------- */

        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .form-label-group>label {
                display: none;
            }

            .form-label-group input:-ms-input-placeholder {
                color: #777;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-300 col-md-150 col-lg-300 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h3 class="card-title text-center"><a href=""><img src="/img/Logoimba.png"
                                    style="max-height: 300px; max-width: 300px;"></a><br>List Produk | Quantity:
                            <?php echo $produk->count(); ?>
                        </h3>
                        <form method="POST" autocomplete="off" action="<?= $this->url->get('produk/cari') ?>" >

                        <div class="input-group mb-4">
                            <input type="text" class="form-control" id='nama' name='nama' placeholder="Cari Produk" aria-label="Cari Produk">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary btn-block" type="submit">Cari</button>
                            </div>
                        </div>
                        </form>
                        <table class="table table-bordered table-hover">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID Produk</th>
                                    <th>Foto Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Brand Produk</th>
                                    <th>Deskripsi Produk</th>
                                    <th>Harga Produk</th>
                                    <th>Status Produk</th>
                                    <th colspan="2"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($produk as $prod) { ?>
                                <tr>
                                    <td><?= $prod->id_produk ?></td>
                                    <td><img src='<?= $this->url->get($prod->foto_produk) ?>' class="mx-auto d-block" width="100" height="100"></td>
                                    <td><?= $prod->nama_produk ?></td>
                                    <td><?= $prod->brand_produk ?></td>
                                    <td><?= $prod->deskripsi_produk ?></td>
                                    <td><?= $prod->harga_produk ?></td>
                                    <td><?= $prod->status_produk ?></td>
                                    <td><a href="<?= $this->url->get('produk/edit/' . $prod->id_produk) ?>" class='btn btn-outline-primary btn-block'>Edit</a><br>
                                        <a href="<?= $this->url->get('produk/hapus/' . $prod->id_produk) ?>" class='btn btn-outline-primary btn-block'>Hapus</a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <a href="<?= $this->url->get('/menu') ?>" class="btn btn-lg btn-outline-primary"
                                        role="button">Menu</a> &emsp;
                                    <a href="<?= $this->url->get('/produk') ?>" class="btn btn-lg btn-outline-primary" role="button">Tambah Produk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>