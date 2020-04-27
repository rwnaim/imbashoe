<h1 align="center"><a href=""><img src="/public/img/logo.png" style="max-height: 300px; max-width: 300px;"></a></h1>
<!-- <a href="<?= $this->url->get('signUp') ?>">Sign Up Here!</a> -->
<!-- <?php echo $this->tag->linkTo(["menu", "Menu", 'class' => 'btn btn-primary']); ?> -->
<div class="container login-container">
    <div class="row">
        <div class="col-md-6 login-form-1">
            <h3>Login</h3>
            <?= $this->flashSession->output() ?>
            <form method="POST" autocomplete="off" action="<?= $this->url->get('Session/login') ?>">
                <div class="form-group">
                    <input type="text" class="form-control" id='nama' name='nama' placeholder="Nama" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id='pass' name='pass' placeholder="Password" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" />
                </div>
                <!-- <div class="form-group">
                    <a href="#" class="ForgetPwd">Forget Password?</a>
                </div> -->
            </form>
        </div>
    </div>
</div>
    