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
    <link href="<?= base_url(); ?>/dist/css/style.css" rel="stylesheet" media="all">
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
                            <form action="<?= base_url('/register'); ?>" method="post">
                                <h3 class="text-center title-2">Zarejestruj konto</h3>
                                <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                                <div class="form-group">
                                    <label>Email </label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" value="">
                                </div>
                                <div class="form-group">
                                    <label>Data urodzenia </label>
                                    <input class="au-input au-input--full" type="date" name="date_of_birth" placeholder="Data urodzeniaphp "value="">

                                </div>
                                <div class="form-group">
                                    <label>Hasło</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="hasło"value="">

                                </div>
                                <div class="form-group">
                                    <label>Powtórz hasło</label>
                                    <input class="au-input au-input--full" type="password" name="password2" placeholder="hasło">

                                </div>
                                <div class="social-login-content">
                                    
                                
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                    Zapoznaj sie z regulaminem
</button> <br> 

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Warunki regulaminu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <?=$regulation ?> 
       
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary">Zaakceptuj</button>
      </div>
    </div>
  </div>
</div> <br>
                                    <input type="checkbox" class="hidden-box" id="req" name="regulation" /> Akceptuje warunki umowy
                                    <label for="first" class="check--label">
                                     <input type="hidden" name=regulate value = " <?= $regulation ?> " />
                                    </label>
                                </div>
                                <div class="form-group">
                                    <?= $validation->listErrors() ?>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Zarejestruj</button>

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