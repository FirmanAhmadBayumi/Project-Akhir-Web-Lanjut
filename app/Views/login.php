<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?= base_url('login/images/icons/favicon.ico') ?>" />
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('login/vendor-login/bootstrap/css/bootstrap.min.css') ?>">
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

                <form class="login100-form validate-form" action="<?= url_to('login') ?>" method="post">
                    <?= csrf_field() ?>

                    <span class="login100-form-title p-b-34 p-t-27">
                        <?= lang('Auth.loginTitle') ?>
                    </span>

                    <?php if ($config->validFields === ['email']): ?>
						<div class="wrap-input100 validate-input">
							<input type="email" class="input100 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								name="login" placeholder="<?=lang('Auth.email')?>">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
                    <?php else: ?>
						<div class="wrap-input100 validate-input">
							<input type="text" class="input100 <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
								name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
							<div class="invalid-feedback">
								<?= session('errors.login') ?>
							</div>
						</div>
                    <?php endif; ?>

						<div class="wrap-input100 validate-input">
							<input type="password" class="input100  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" 
                                name="password" placeholder="<?=lang('Auth.password')?>">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>

                        <div class="container-login100-form-btn">
						    <button type="submit" class="login100-form-btn"><?=lang('Auth.loginAction')?></button>
                        </div>
                </form>
                <?php if($config->allowRegistration): ?>
                    <div class="text-center mt-3">
                        <a class="txt1" href="<?= url_to('register') ?>">
                            <?= lang('Auth.needAnAccount') ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

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