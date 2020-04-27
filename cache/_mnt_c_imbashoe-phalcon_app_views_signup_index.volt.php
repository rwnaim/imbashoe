<h1 align="center"><a href=""><img src="/public/img/logo.png"style="max-height: 100px; max-width: 100px;"></a> | Register</h1>
<?php echo $this->tag->form("signUp/register"); ?>
    <table class="table table-bordered table-hover">
        <tbody class="thead-light">
        <tr>
            <th><label for="nama">Nama</label></th>
            <th><?php echo $this->tag->textField("nama"); ?></th>
        </tr>
        <tr>
            <th><label for="email">Email</label></th>
            <th><?php echo $this->tag->textField("email"); ?></th>
        </tr>
        <tr>
            <th><label for="pass">Password</label></th>
            <th><?php echo $this->tag->textField("pass"); ?></th>
        </tr>
        <tr>
            <th><label for="alamat">Alamat</label></th>
            <th><?php echo $this->tag->textField("alamat"); ?></th>
        </tr>
        <tr>
            <th><label for="no_hp">Nomor Hp</label></th>
            <th><?php echo $this->tag->textField("no_hp"); ?></th>
        </tr>
        <tr>
            <th colspan="2"><h3 align="center"><?php echo $this->tag->submitButton(["Register", 'class' => 'btn btn-primary']); ?> &emsp; <?php echo $this->tag->linkTo(["/", "Back to Home", 'class' => 'btn btn-primary']); ?></h3></th>
        </tr>
        </tbody>
    </table>

</form>