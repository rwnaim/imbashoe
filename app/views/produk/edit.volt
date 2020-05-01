<html>

<head>
    <style>
        :root {
            --input-padding-x: 1.5rem;
            --input-padding-y: .75rem;
        }

        body {
            background: #0099ff;
            background: linear-gradient(to right, rgb(0, 98, 230), rgb(63, 178, 255));
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
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h3 class="card-title text-center"><a href=""><img src="/img/Logoimba.png"
                                    style="max-height: 300px; max-width: 300px;"></a><br>Edit Produk</h3>
                        <form method="POST" autocomplete="off" action="{{url('produk/update/' ~ produk.id_produk)}}" enctype="multipart/form-data">
                            <div class="form-label-group">
                                <input type="text" name='nama_produk' id="nama_produk" class="form-control"
                                    placeholder="Nama Produk" value="{{produk.nama_produk}}" required autofocus>
                                <label for="nama_produk">Nama Produk</label>
                            </div>

                            <div class="form-label-group">
                                <input type="text" name='brand_produk' id="brand_produk" class="form-control"
                                    placeholder="Brand Produk" value="{{produk.brand_produk}}" required autofocus>
                                <label for="brand_produk">Brand Produk</label>
                            </div>

                            <div class="form-label-group">
                                <input name="deskripsi_produk" id="deskripsi_produk" class="form-control" rows="2"
                                    placeholder="Deskripsi Produk" value="{{produk.deskripsi_produk}}" required autofocus>
                                <label for="deskripsi_produk">Deskripsi Produk</label>
                            </div>

                            <div class="form-label-group">
                                <input type="text" name='harga_produk' id="harga_produk" class="form-control"
                                    placeholder="Harga Produk" value="{{produk.harga_produk}}" required autofocus>
                                <label for="harga_produk">Harga Produk</label>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" >Foto Produk</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto_produk" name='foto_produk' value="{{produk.foto_produk}}">
                                    <label class="custom-file-label" for="foto_produk"> <? echo "{{produk.foto_produk}}" ?></label>
                                </div>
                            </div>

                            <div class="form-label-group">
                                <input type="text" name='status_produk' id="status_produk" class="form-control"
                                    placeholder="Status Produk" value="{{produk.status_produk}}" required autofocus>
                                <label for="status_produk">Status Produk (0:Kosong, 1:Tersedia)</label>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Submit
                                </button>
                            <a href="{{url('/produk/list')}}" class="btn btn-lg btn-primary btn-block text-uppercase"
                                role="button">List Produk</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>