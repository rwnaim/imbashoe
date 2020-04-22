<h1 align="center"><a href=""><img src="/public/img/logo.png"style="max-height: 100px; max-width: 100px;"></a> | List User</h1>

<?php

// echo "<h1>List User</h1>";

//echo $this->tag->linkTo(["signup", "Sign Up Here!", 'class' => 'btn btn-primary']);
if ($users->count() > 0) {
    ?>
    <table class="table table-bordered table-hover">
        <thead class="thead-light">
        <tr>
            <th>ID User</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>No HP</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <td colspan="4">Users quantity: <?php echo $users->count(); ?></td>
            <td><?php echo $this->tag->linkTo(["menu", "Back to Menu", 'class' => 'btn btn-primary']); ?></td>
        </tr>
        </tfoot>
        <tbody>
        <?php foreach ($users as $user) { ?>
            <tr>
                <td><?php echo $user->id_user; ?></td>
                <td><?php echo $user->nama; ?></td>
                <td><?php echo $user->email; ?></td>
                <td><?php echo $user->alamat; ?></td>
                <td><?php echo $user->no_hp; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <?php
}