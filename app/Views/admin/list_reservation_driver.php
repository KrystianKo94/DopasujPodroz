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
    <link href="<?= base_url(); ?>/dist/bootstrap-4.1/bootstrap.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/css/theme.css" rel="stylesheet" media="all">
    <link  href="<?= base_url(); ?>/dist/fancybox-3.5.7/dist/jquery.fancybox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <link href="<?= base_url(); ?>/dist/leaflet-routing-machine-3.2.12/dist/leaflet-routing-machine.css" rel="stylesheet" media="all">
    <link href="<?= base_url(); ?>/dist/css/rating.css" rel="stylesheet" media="all">
</head>
<body class="animsition">
<div class="page-wrapper">
    <?= $this->include('admin/navbar') ?>
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
                                            <a href="<?= base_url(); ?>">Strona główna</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Lista wyjazdów</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="statistic">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-lg-12">
                            <div class="user-data m-b-30">
                                <h3 class="title-3 m-b-30">
                                    <i class="zmdi zmdi-home"></i>Rezerwacje użytkowników</h3>
                                <div class="table-responsive table-data">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td></td>
                                            <td>Rezerwacja</td>
                                            <td>Miejsce docelowe</td>
                                            <td>Ilość zarezerwowanych miejsc</td>
                                            <td>Bagaż użytkownika</td>
                                            <td>Status zamówienia</td>
                                            <td>Opcje</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <h6>1</h6>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6>...</h6>
                                                </div>
                                            </td>
                                            <td>
                                                .....
                                            </td>
                                            <td>
                                                .....
                                            </td>
                                            <td>
                                                .....
                                            </td>
                                            <td>
                                                .....
                                            </td>
                                            <td>
                                                <div class="header-button header__tool" >
                                                    <div class="header-button-item  js-item-menu">
                                                        <span class="more"> <i class="zmdi zmdi-more"></i></span>
                                                        <div class="setting-dropdown js-dropdown">
                                                            <div class="account-dropdown__body">
                                                                <div class="account-dropdown__item">
                                                                    <a href="<?= base_url(); ?>/detail">
                                                                        <i class="zmdi zmdi-edit"></i>Przejdź do ogłoszenia</a>
                                                                </div>
                                                                <div class="account-dropdown__item">
                                                                    <a href="javascript:descriptionShow(1)">
                                                                        <i class="zmdi zmdi-code"></i>Zobacz szczegóły</a>
                                                                </div>
                                                                <div class="account-dropdown__item">
                                                                    <a href="javascript:cancelReservation(1)">
                                                                        <i class="zmdi zmdi-undo"></i>Anuluj rezerwacje</a>
                                                                </div>
                                                                <div class="account-dropdown__item">
                                                                    <a href="javascript:addOpinion(1)">
                                                                        <i class="zmdi zmdi-open-in-new"></i>Wystaw opinnie</a>
                                                                </div>
                                                                <div class="account-dropdown__item">
                                                                    <a href="javascript:listOpinion(1)">
                                                                        <i class="zmdi zmdi-comment-more"></i>Zobacz opnnie o użytkowniku</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="user-data__footer">
                                    <button class="au-btn au-btn-load">Wszystko</button>
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
    </div>

    <div id="writeToDriver" style="display: none;min-width:900px;">
        <section>
            <div class="">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <div class="au-card-title" >
                            <div class="bg-overlay bg-overlay--blue "></div>
                            <h3>
                                <i class="zmdi zmdi-edit"></i>Napisz wiadomość</h3>
                        </div>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="form-group" >
                                <label for="exampleFormControlTextarea1">Treść wiadomości:</label>
                                <textarea class="form-control" id="message_text" rows="3"></textarea>
                            </div>
                            <button type="button" class="btn btn-danger">Wyślij wiadomość</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>


    <div id="detail_show" style="display: none;min-width:900px;">
        <section>
            <div class="">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <div class="au-card-title" >
                            <div class="bg-overlay bg-overlay--blue "></div>
                            <h3>
                                <i class="zmdi zmdi-info"></i>Szczegóły dotyczące ogłoszenia</h3>
                        </div>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <hr>
                            <div class="form-group">
                                <label for="map" class="control-label mb-1">Mapa przejazu :</label>
                                <div class="container px-5 my-5">
                                    <div id="map" style="height: 400px; width: 100%">
                                    </div>
                                </div>
                            </div>
                            <div class="my-3 p-3 bg-white rounded box-shadow">
                                <h6 class="border-bottom border-gray pb-2 mb-0">Pozostałe informacje</h6>
                                <div class="media text-muted pt-3">
                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" id="selected_car_info">
                                        <strong class="d-block text-gray-dark">Wybrany samochód:</strong>
                                        tutaj wypisujesz wybranysamochód
                                    </p>
                                </div>
                                <div class="media text-muted pt-3">
                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" id="data_end_info">
                                        <strong class="d-block text-gray-dark">Miejsce i data wyjazdu:</strong>
                                        tutaj wpisz datę i czas wyjazdu
                                    </p>
                                </div>
                                <div class="media text-muted pt-3">
                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" id="free_place_info">
                                        <strong class="d-block text-gray-dark">Ilość wolnych miejsc:</strong>
                                        tutaj wpisz ilość wolnych miejsc
                                    </p>
                                </div>
                                <div class="media text-muted pt-3">
                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" id="coast_info">
                                        <strong class="d-block text-gray-dark">Koszt wyjazdu w przeliczeniu na jedną osobę:</strong>
                                        tutaj wpisz koszt
                                    </p>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <div id="addOpinion" style="display: none;min-width:900px;">
        <section>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div id="listOpinion" style="display: none;min-width:900px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-lg-12">
                    <div class="user-data m-b-30">
                        <h3 class="title-3 m-b-30">
                            <i class="zmdi zmdi-home"></i>Lista opinni</h3>
                        <div class="table-responsive table-data">
                            <table class="table" id="listOpinionTable">
                                <thead>
                                <tr>
                                    <td></td>
                                    <td>Data wystawienia </td>
                                    <td>Opinia</td>
                                    <td>Data wyjazdu</td>
                                    <td>Użytkownik</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <h6>1</h6>
                                    </td>
                                    <td>
                                        <div class="table-data__info">
                                            <h6>...</h6>
                                        </div>
                                    </td>
                                    <td>
                                        .....
                                    </td>
                                    <td>
                                        .....
                                    </td>
                                    <td>.....
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="user-data__footer">
                            <button class="au-btn au-btn-load">Wszystko</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div id="cancelReservation" style="display: none;min-width:900px;">
    <section>
        <div class="">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <div class="au-card-title" >
                        <div class="bg-overlay bg-overlay--blue"></div>
                        <h3>
                            <i class="zmdi zmdi-comment-text"></i>Treść prośby związanej z anulowaniem rezerwacji</h3>
                    </div>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="bd-callout bd-callout-info">
                            <h4 id="dealing-with-specificity" class="p-b-5">Treść:</h4>
                            <p id="opinion_text" class="p-3">
                                <i class="fas fa-quote-left fa-3x fa-pull-left fa-border"></i>
                                ......</p>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
            <div class="au-chat-textfield">
                <button id="back3" name="back3" type="submit" class="btn btn-lg btn-primary btn-block" onclick="accept()" >
                    Potwierdź anulowanie
                </button>
            </div>
        </div>
    </section>
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
<script src="<?= base_url(); ?>/dist/fancybox-3.5.7/dist/jquery.fancybox.min.js"></script>
<script src="<?= base_url(); ?>/dist/leaflet-routing-machine-3.2.12/dist/leaflet-routing-machine.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.8.1/dist/sweetalert2.all.min.js" integrity="sha256-Wwm+CQ+crVDzKdbSzjRsw/Kota9INfu02cl8H8oWtpY=" crossorigin="anonymous"></script>
<script>
    var a_href=10;
    function writeToDriver( id){
        $.fancybox.open({
            src  : '#writeToDriver',
            type : 'inline',
            autoWidth : false,
            opts : {
                afterShow : function( instance, current ) {
                    console.info( 'done!' );

                }
            }
        });

    }
    function cancelReservation( id){
        $.fancybox.open({
            src  : '#cancelReservation',
            type : 'inline',
            autoWidth : false,
            opts : {
                afterShow : function( instance, current ) {
                    console.info( 'done!' );

                }
            }
        });

    }
    function addOpinion( id){
        $.fancybox.open({
            src  : '#addOpinion',
            type : 'inline',
            autoWidth : false,
            opts : {
                afterShow : function( instance, current ) {
                    console.info( 'done!' );

                }
            }
        });

    }
    function showOpinion( id){
        $.fancybox.open({
            src  : '#showOpinion',
            type : 'inline',
            autoWidth : false,
            opts : {
                afterShow : function( instance, current ) {
                    console.info( 'done!' );

                }
            }
        });

    }
    function listOpinion( id){
        $.fancybox.open({
            src  : '#listOpinion',
            type : 'inline',
            autoWidth : false,
            opts : {
                afterShow : function( instance, current ) {
                    console.info( 'done!' );

                }
            }
        });

    }
    function send(){
        console.log("send");
    }

    function changeStateTravelShow(id_travel){
        $.fancybox.open({
            src  : '#state_changer',
            type : 'inline',
            autoWidth : false,
            opts : {
                afterShow : function( instance, current ) {
                    console.info( 'done!' );

                }
            }
        });
    }

    function changeStateTravel(){
        console.log("Zmiana statusu podróży");
    }

    function descriptionShow(id){
        $.fancybox.open({
            src  : '#detail_show',
            type : 'inline',
            autoWidth : false,
            opts : {
                afterShow : function( instance, current ) {
                    console.info( 'done!' );

                }
            }
        });
        var element = document.getElementById('map');
        var map = L.map('map', {
            center: [57.74, 11.94],
            zoom: 10
        });
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}{r}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
        L.Routing.control({
            waypoints: [
                L.latLng(57.74, 11.94),
                L.latLng(57.6792, 11.949)
            ],
            language: 'pl',
            showAlternatives: true,
            routeWhileDragging: false
        }).addTo(map);
    }

</script>


</body>



</html>
