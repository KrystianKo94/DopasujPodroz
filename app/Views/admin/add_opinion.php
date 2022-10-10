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
    <link href="<?= base_url(); ?>/dist/css/rating.css" rel="stylesheet" media="all">
</head>

<body class="animsition">
<div class="page-wrapper">
    <?= $this->include('admin/navbar') ?>
    <!-- PAGE CONTAINER-->
    <div class="page-container2">
        <?= $this->include('admin/header') ?>
        <section class="au-breadcrumb m-t-70 m-b-20">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">Jesteś na :</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Strona główna</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dodaj samochód</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB-->
        <section>
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                <div class="au-card-title" >
                                    <div class="bg-overlay bg-overlay--blue"></div>
                                    <h3>
                                        <i class="fas fa-plus-square"></i>Wyprowadzanie opini</h3>
                                </div>
                                <div class="au-inbox-wrap js-inbox-wrap">
                                    <div class="au-chat">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3 class="text-center title-2">Wprowadź opinie</h3>
                                                </div>
                                                <hr>
                                                <form  id="opinion" action="" method="post" novalidate="novalidate">
                                                    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                                                    <div class="form-group">
                                                        <label for="brand" class="control-label mb-1">Wybierz wyjazd:</label>
                                                        <select name="car" id="car" class="form-control-lg form-control" onchange="changeCar()">
                                                            <option value="">Wybierz coś tam </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="center">
                                                            <label for="rating" class="control-label mb-1">Ocena kierowcy:</label>
                                                        </div>
                                                        <div class="center">
                                                        <fieldset class="rating">
                                                            <input type="radio" id="star_5_driver" name="rating" value="5" /><label class="full" for="star_5_driver" title="Wspaniale - 5 gwiazdek"></label>
                                                            <input type="radio" id="star_4_5_driver" name="rating" value="4,5" /><label class="half" for="start_4_5_driver" title="Bardzo dobrze - 4.5 gwiazdki"></label>
                                                            <input type="radio" id="star_4_driver" name="rating" value="4" /><label class = "full" for="star_4_driver" title="Bardzo dobrze - 4 gwiazdki"></label>
                                                            <input type="radio" id="star_3_5_driver" name="rating" value="3,5" /><label class="half" for="star_3_5_driver" title="Dobrze - 3.5  gwiazdki"></label>
                                                            <input type="radio" id="star_3_driver" name="rating" value="3" /><label class = "full" for="star_3_driver" title="Całkiem nieźle - 3 gwizdki"></label>
                                                            <input type="radio" id="star_2_5_driver" name="rating" value="2,5" /><label class="half" for="star_2_5_driver" title="Trochę słabo - 2.5 gwiazdki"></label>
                                                            <input type="radio" id="star_2_driver" name="rating" value="2" /><label class = "full" for="star_2_driver" title="Trochę słabo - 2 gwiazdki"></label>
                                                            <input type="radio" id="star_1_5_driver" name="rating" value="1,5" /><label class="half" for="star_1_5_driver" title="Średnio - 1.5 gwiazdki"></label>
                                                            <input type="radio" id="star_1_driver" name="rating" value="1" /><label class = "full" for="star_1_driver" title="Strata czasu - 1 gwiazdki"></label>
                                                            <input type="radio" id="star_0_5_driver" name="rating" value="0,5" /><label class="half" for="star_0_5_driver" title="Strata czasu - 0.5 gwiazdki"></label>
                                                        </fieldset><br/>
                                                        </div>
                                                    </div>
                                                    <hr class="my-4">
                                                    <div class="form-group">
                                                        <div class="center">
                                                            <label for="rating2" class="control-label mb-1">Ocena podróży:</label>
                                                        </div>
                                                        <div class="center">
                                                            <fieldset class="rating2">
                                                                <input type="radio" id="star_5_travel" name="rating2" value="5" /><label class="full" for="star_5_travel" title="Wspaniale - 5 gwiazdek"></label>
                                                                <input type="radio" id="star_4_5_travel" name="rating2" value="4,5" /><label class="half" for="start_4_5_travel" title="Bardzo dobrze - 4.5 gwiazdki"></label>
                                                                <input type="radio" id="star_4_travel" name="rating2" value="4" /><label class = "full" for="star_4_travel" title="Bardzo dobrze - 4 gwiazdki"></label>
                                                                <input type="radio" id="star_3_5_travel" name="rating2" value="3,5" /><label class="half" for="star_3_5_travel" title="Dobrze - 3.5  gwiazdki"></label>
                                                                <input type="radio" id="star_3_travel" name="rating2" value="3" /><label class = "full" for="star_3_travel" title="Całkiem nieźle - 3 gwizdki"></label>
                                                                <input type="radio" id="star_2_5_travel" name="rating2" value="2,5" /><label class="half" for="star_2_5_travel" title="Trochę słabo - 2.5 gwiazdki"></label>
                                                                <input type="radio" id="star_2_travel" name="rating2" value="2" /><label class = "full" for="star_2_travel" title="Trochę słabo - 2 gwiazdki"></label>
                                                                <input type="radio" id="star_1_5_travel" name="rating2" value="1,5" /><label class="half" for="star_1_5_travel" title="Średnio - 1.5 gwiazdki"></label>
                                                                <input type="radio" id="star_1_travel" name="rating2" value="1" /><label class = "full" for="star_1_travel" title="Strata czasu - 1 gwiazdki"></label>
                                                                <input type="radio" id="star_0_5_travel" name="rating2" value="0,5" /><label class="half" for="star_0_5_travel" title="Strata czasu - 0.5 gwiazdki"></label>
                                                            </fieldset><br/>
                                                        </div>
                                                    </div>
                                                    <hr class="my-4">
                                                    <div class="form-group">
                                                        <div class="center">
                                                            <label for="rating3" class="control-label mb-1">Ocena samochodu:</label>
                                                        </div>
                                                        <div class="center">
                                                            <fieldset class="rating3">
                                                                <input type="radio" id="star_5_car" name="rating3" value="5" /><label class="full" for="star_5_car" title="Wspaniale - 5 gwiazdek"></label>
                                                                <input type="radio" id="star_4_5_car" name="rating3" value="4,5" /><label class="half" for="start_4_5_car" title="Bardzo dobrze - 4.5 gwiazdki"></label>
                                                                <input type="radio" id="star_4_car" name="rating3" value="4" /><label class = "full" for="star_4_car" title="Bardzo dobrze - 4 gwiazdki"></label>
                                                                <input type="radio" id="star_3_5_car" name="rating3" value="3,5" /><label class="half" for="star_3_5_car" title="Dobrze - 3.5  gwiazdki"></label>
                                                                <input type="radio" id="star_3_car" name="rating3" value="3" /><label class = "full" for="star_3_car" title="Całkiem nieźle - 3 gwizdki"></label>
                                                                <input type="radio" id="star_2_5_car" name="rating3" value="2,5" /><label class="half" for="star_2_5_car" title="Trochę słabo - 2.5 gwiazdki"></label>
                                                                <input type="radio" id="star_2_car" name="rating3" value="2" /><label class = "full" for="star_2_car" title="Trochę słabo - 2 gwiazdki"></label>
                                                                <input type="radio" id="star_1_5_car" name="rating3" value="1,5" /><label class="half" for="star_1_5_car" title="Średnio - 1.5 gwiazdki"></label>
                                                                <input type="radio" id="star_1_car" name="rating3" value="1" /><label class = "full" for="star_1_car" title="Strata czasu - 1 gwiazdki"></label>
                                                                <input type="radio" id="star_0_5_car" name="rating3" value="0,5" /><label class="half" for="star_0_5_car" title="Strata czasu - 0.5 gwiazdki"></label>
                                                            </fieldset><br/>
                                                        </div>
                                                    </div>
                                                    <hr class="my-4">
                                                    <div class="form-group" >
                                                        <label >Napisz opinie odnośnie wyjazdu : </label>
                                                        <textarea class="form-control" id="message_text" rows="3"></textarea>
                                                    </div>

                                                    <input type="hidden" name="<?= csrf_token() ?>" id="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

                                                        <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
                                                            Wyślij opinnie
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2021</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- END PAGE CONTAINER-->
    </div>

</div>
<script src="<?= base_url(); ?>/dist/jquery-3.2.1.min.js"></script>
<script src="<?= base_url(); ?>/dist/bootstrap-4.1/popper.min.js"></script>
<script src="<?= base_url(); ?>/dist/bootstrap-4.1/bootstrap.min.js"></script>
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
<script src="<?= base_url(); ?>/dist/vector-map/jquery.vmap.js"></script>
<script src="<?= base_url(); ?>/dist/vector-map/jquery.vmap.min.js"></script>
<script src="<?= base_url(); ?>/dist/vector-map/jquery.vmap.sampledata.js"></script>
<script src="<?= base_url(); ?>/dist/vector-map/jquery.vmap.world.js"></script>
<script src="<?= base_url(); ?>/dist/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.8.1/dist/sweetalert2.all.min.js" integrity="sha256-Wwm+CQ+crVDzKdbSzjRsw/Kota9INfu02cl8H8oWtpY=" crossorigin="anonymous"></script>

</body>



</html>
<!-- end document-->
