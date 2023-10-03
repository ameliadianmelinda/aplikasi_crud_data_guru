<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/icons.png'); ?>" />
    <title>Login CRUD Data Guru</title>
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
</head>

<body>

    <?php
    $session = session();
    $login = $session->getFlashdata('login');
    $username = $session->getFlashdata('username');
    $password = $session->getFlashdata('password');
    ?>

    <section class="vh-100">
        <div class="container h-custom mt-5"><br><br><br><br><br><br>
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form method="post" action="/auth/valid_login">

                        <?php if ($username) { ?>
                            <p style="color:red"><?php echo $username ?></p>
                        <?php } ?>

                        <?php if ($password) { ?>
                            <p style="color:red"><?php echo $password ?></p>
                        <?php } ?>

                        <?php if ($login) { ?>
                            <p style="color:green"><?php echo $login ?></p>
                        <?php } ?>

                        <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold">Login</p>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" class="form-control form-control-lg" placeholder="Enter Username" name="username" />
                            <label class="form-label" for="form3Example3">Username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" class="form-control form-control-lg" placeholder="Enter Password" name="password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="login">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Belum Punya Akun?<a href="/auth/daftar" class="link-danger">Daftar</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>