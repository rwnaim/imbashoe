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
        <td colspan="7">Jumlah Produk: <?php echo $produk->count(); ?></td>
            <td><a href="{{ url('menu') }}" class='btn btn-primary'>Menu</a></td>
    </tr>
    </tfoot>
    <tbody>
    {% for prod in produk %}
        <tr>
            <td>{{ prod.id_produk }}</td>
            <td>{{ prod.nama_produk }}</td>
            <td>{{ prod.brand_produk }}</td>
            <td>{{ prod.deskripsi_produk }}</td>
            <td>{{ prod.harga_produk }}</td>
            <td>{{ prod.status_produk }}</td>
            <td><a href="{{ url('Produk/edit/' ~ prod.id_produk) }}" class='btn btn-primary'>Edit</a></td>
            <td><a href="{{ url('Produk/hapus/' ~ prod.id_produk) }}" class='btn btn-primary'>Hapus</a></td>
        </tr>
    {% endfor %}
    </tbody>
</table>