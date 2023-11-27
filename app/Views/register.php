<!DOCTYPE html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?= base_url('login/images/icons/favicon.ico') ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor-login/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('login/fonts/iconic/css/material-design-iconic-font.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor-login/animate/animate.css') ?>">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('login/vendor-login/css-hamburgers/hamburgers.min.css') ?>">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('login/vendor-login/animsition/css/animsition.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/vendor-login/select2/select2.min.css') ?>">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('login/vendor-login/daterangepicker/daterangepicker.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/css/util.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('login/css/main.css') ?>">
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?= base_url('login/images/bg-motor1.jpg') ?>');">
            <div class="wrap-login100">

                <?= view('App\Views\Auth\_message_block') ?>

                <form class="login100-form validate-form" action="<?= url_to('register') ?>" method="post">
                    <?= csrf_field() ?>

                    <span class="login100-form-title p-b-34 p-t-27">
                        <?= lang('Auth.register') ?>
                    </span>

                    <div class="wrap-input100 validate-input">
                            <input type="email" class="input100 <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" 
                                value="<?= old('email') ?>">
                            <span class="focus-input100" data-placeholder="&#x1F4E7;">
                        </div>

                        <div class="wrap-input100 validate-input">
                            <input type="text" class="input100 <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" 
                                name="username" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <input type="password" class="input100 <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" 
                                name="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>

                        <div class="wrap-input100 validate-input">
                            <input type="password" class="input100 <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" 
                                name="pass_confirm" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                            <span class="focus-input100" data-placeholder="&#x1F501;"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button type="submit" class="login100-form-btn"><?= lang('Auth.register') ?></button>
                        </div>
                </form>

                <div class="text-center mt-3">
                        <a class="txt1" href="<?= url_to('login') ?>">
                            <?= lang('Auth.alreadyRegistered') ?>
                            <?= lang('Auth.signIn') ?>
                        </a>
                </div>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <script src="vendor-login/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor-login/animsition/js/animsition.min.js"></script>
    <script src="vendor-login/bootstrap/js/popper.js"></script>
    <script src="vendor-login/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor-login/select2/select2.min.js"></script>
    <script src="vendor-login/daterangepicker/moment.min.js"></script>
    <script src="vendor-login/daterangepicker/daterangepicker.js"></script>
    <script src="vendor-login/countdowntime/countdowntime.js"></script>
    <script src="login/js/main.js"></script>

</body>

</html>