<h1 align="center"><a href=""><img src="/public/img/logo.png"style="max-height: 100px; max-width: 100px;"></a></h1>
<table class="table table-bordered table-hover">
        <thead class="thead-light">
            <tr>
                <th><h1 align="center">Menu</h1></th>
                <th>
                    <h3 align="center"><?php echo $this->tag->linkTo(["Session/logout", "Logout", 'class' => 'btn btn-primary']); ?>
                    </h3>
                </th>
            </tr>
        </thead>
        <tbody>
        <tr>
            <th>
                <h3 align="center"><?php echo $this->tag->linkTo(["signUp/list", "View All Users", 'class' => 'btn btn-primary']); ?></h3>
            </th>
            <th>
                <h3 align="center"><?php echo $this->tag->linkTo(["Produk/list", "List Produk", 'class' => 'btn btn-primary']); ?></h3>
            </th>
            
        </tr>
        </tbody>
</table>
