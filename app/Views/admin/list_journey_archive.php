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
                                    <i class="zmdi zmdi-home"></i>Lista zakończonych ogłoszeń</h3>
                                <div class="table-responsive table-data">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td></td>
                                            <td>Miejsce docelowe</td>
                                            <td>Data wyjazdu</td>
                                            <td>Data dojazdu</td>
                                            <td>Status</td>
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
                                                <div class="header-button header__tool" >
                                                    <div class="header-button-item  js-item-menu">
                                                        <span class="more"> <i class="zmdi zmdi-more"></i></span>
                                                        <div class="setting-dropdown js-dropdown">
                                                            <div class="account-dropdown__body">
                                                                <div class="account-dropdown__item">
                                                                    <a href="javascript:descriptionShow(1)">
                                                                        <i class="zmdi zmdi-code"></i>Zobacz pełen opis</a>
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
    function fastedit( id){
        $.fancybox.open({
            src  : '#fast_edit',
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
