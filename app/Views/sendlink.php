<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <title>Dopasuj Podróż</title>
    <link href="<?= base_url(); ?>/dist/css/font-face.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/dist/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/css/theme.css" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                               
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="<?= base_url('/sendlink'); ?> " method="post">
                                <h3 class="text-center title-2">Link weryfikacyjny</h3><br>
                            <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

                                <div class="form-group">
                                    <label>Wprowadz email do wyslania linku </label>
                                    <input class="au-input au-input--full" type="email" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group">

                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" >Wyslij link</button>
                                <div class="social-login-content">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url(); ?>/dist/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url(); ?>/dist/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url(); ?>/dist/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- dist JS       -->
    <script src="<?= base_url(); ?>/dist/slick/slick.min.js">
    </script>
    <script src="<?= base_url(); ?>/dist/wow/wow.min.js"></script>
    <script src="<?= base_url(); ?>/dist/animsition/animsition.min.js"></script>
    <script src="<?= base_url(); ?>/dist/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= base_url(); ?>/dist/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url(); ?>/dist/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= base_url(); ?>/dist/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url(); ?>/dist/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url(); ?>/dist/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/dist/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= base_url(); ?>/dist/js/main.js"></script>

</body>

</html>
<!-- end document-->