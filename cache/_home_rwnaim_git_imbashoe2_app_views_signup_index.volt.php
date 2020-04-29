<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <?= $this->assets->outputCss() ?>	 -->
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= $this->url->getStatic('css/material-design-iconic-font.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= $this->url->getStatic('css/signup.css') ?>" type="text/css">
    <!-- <link rel="stylesheet" href="<?= $this->url->getStatic('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css') ?>" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    

</head>
<body>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="username"><img src="SVG/at.svg" width="15px"></label>
                                <input type="text" name="username" id="name" placeholder="username"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><img src="SVG/user.svg" width="15px"></label>
                                <input type="text" name="name" id="name" placeholder="Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><img src="SVG/email.svg" width="15px"></label>
                                <input type="email" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><img src="SVG/lock.svg" width="15px"></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>

                            <div class="custom-control custom-checkbox" id="checkbox">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                <label class="custom-control-label" for="defaultUnchecked">I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" value="Register">Submit</button>
                                <!-- <p class="punyaakun">Saya sudah memiliki akun. <a href="#" class="signup-image-link" id="punyaakun">Login disini</a></p> -->
                                <p class="punyaakun">Saya sudah memiliki akun. <a href="#"> Login disini</a></p>
                            </div>
                            
                        </form>
                    </div>
                    <div class="signup-image">
                        <img src="img/Logoimba.png" id="logoimba">
                        <figure><img src="img/signup-image.jpg" alt="sing up image"></figure>
                       
                        <label class="form-check-label" for="name"></label>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>