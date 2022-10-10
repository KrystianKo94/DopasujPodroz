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
    <link  href="<?= base_url(); ?>/dist/fancybox-3.5.7/dist/jquery.fancybox.min.css" rel="stylesheet">
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <link href="<?= base_url(); ?>/dist/leaflet-routing-machine-3.2.12/dist/leaflet-routing-machine.css" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
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
                                            <a href="<?= base_url(); ?>">Strona główna</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Edycja ogłoszenia</li>
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
                                    <i class="zmdi zmdi-home"></i>Lista dodanych ogłoszeń </h3>
                                <div class="table-responsive table-data">
                                    <div class="accordion ml-2 mr-2" id="list">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                    Tutaj wpsujesz tytuł ogłoszenia
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                                <div class="accordion-body">
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                    Dane ogólne :
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-group">
                                                                        <label for="coast_1" class="control-label mb-1">Wprowadź koszt wyjazdu dla 1 osoby :</label>
                                                                        <input id="coast_1" name="coast_1" type="number" class="form-control" aria-required="true" aria-invalid="false" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="luggage_1" class="control-label mb-1">Wprowadź pojamość bagażu dla 1 osoby :</label>
                                                                        <input id="luggage_1" name="luggage_1" type="number" class="form-control" aria-required="true" aria-invalid="false" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="number_of_field_1" class="control-label mb-1">Wprowadź ilość wolnych miejsc :</label>
                                                                        <input id="number_of_field_1" name="number_of_field_1" type="number" class="form-control" aria-required="true" aria-invalid="false" required>
                                                                    </div>
                                                                    <div class="form-group">

                                                                        <label for="car" class="control-label mb-1">Wybierz samochód, którym pojedziesz :</label>
                                                                        <select name="car_1" id="car_1" class="form-control-lg form-control" >

                                                                        </select>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="description_1" class="control-label mb-1">Opis ogłoszenia :</label>
                                                                        <textarea name="description_1" id="textarea-input" rows="9" placeholder="Opis ....." class="form-control"></textarea>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="date_start_1" class="control-label mb-1">Data wyjazdu :</label>
                                                                        <input id="date_start_1" name="date_start_1" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="date_end_1" class="control-label mb-1">Data przyjazdu :</label>
                                                                        <input id="date_end_1" name="date_end_1" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingTwo">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                    Dane miejscowości z której wyjeżdżasz
                                                                </button>
                                                            </h2>
                                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-group">
                                                                        <label for="voivodeship_start_1" class="control-label mb-1">Wprowadź  województwo:</label>
                                                                        <input id="voivodeship_start_1" name="voivodeship_start_1" type="text" class="form-control" aria-required="true" aria-invalid="false" list="voivodeship_list" required>
                                                                        <datalist id="voivodeship_list_1">

                                                                        </datalist>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="district_start_1" class="control-label mb-1">Wprowadź  powiat:</label>
                                                                        <input id="district_start_1" name="district_start_1" type="text" class="form-control" autocomplete="district_list_start" aria-required="true" list="district_list_start" onclick="getDistrict('start')">
                                                                        <datalist id="district_list_start_1">
                                                                            <option>

                                                                            </option>
                                                                        </datalist>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="commune_start_1" class="control-label mb-1">Wprowadź  gminę:</label>
                                                                        <input id="commune_start_1" name="commune_start_1" type="text" class="form-control"autocomplete="commune_list_start" aria-required="true"list="commune_list_start" onclick="getCommunity('start')" >
                                                                        <datalist id="commune_list_start_1">
                                                                            <option></option>
                                                                        </datalist>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="place_start_1" class="control-label mb-1">Wprowadź  miejscowość:</label>
                                                                        <input id="place_start_1" name="place_start_1" type="text" class="form-control" autocomplete="place_list_start" aria-required="true"list="place_list_start" onclick="getPlaces('start')" >
                                                                        <datalist id="place_list_start_1">
                                                                            <option></option>
                                                                        </datalist>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="street_start_1" class="control-label mb-1">Wprowadź  ulicę:</label>
                                                                        <input id="street_start_1" name="street_start_1" type="text" class="form-control" autocomplete="street_list_start" aria-required="true"list="street_list_start" onclick="getStreet('start')" >
                                                                        <datalist id="street_list_start_1">
                                                                            <option></option>
                                                                        </datalist>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="number_apartment_start_1" class="control-label mb-1">Wprowadź  numer lokalu:</label>
                                                                        <input id="number_apartment_start_1" name="number_apartment_start" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="zip_code_start_1" class="control-label mb-1">Wprowadź  kod pocztowy:</label>
                                                                        <input id="zip_code_start_1" name="zip_code_start" type="text" class="form-control" aria-required="true" aria-invalid="false" required onclick="getPostCode('start')">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                    Dane miejsca do którego wyjeżdżasz
                                                                </button>
                                                            </h2>
                                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <div class="form-group">
                                                                        <label for="voivodeship_end_1" class="control-label mb-1">Wprowadź  województwo:</label>
                                                                        <input id="voivodeship_end_1" name="voivodeship_end_1" type="text" class="form-control" aria-required="true" aria-invalid="false" list="voivodeship_list" required>
                                                                        <datalist id="voivodeship_list_1">

                                                                        </datalist>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="district_end_1" class="control-label mb-1">Wprowadź  powiat:</label>
                                                                        <input id="district_end_1" name="district_end_1" type="text" class="form-control" autocomplete="district_list_end" aria-required="true" list="district_list_end" onclick="getDistrict('end')">
                                                                        <datalist id="district_list_end">
                                                                            <option>

                                                                            </option>
                                                                        </datalist>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="commune_end_1" class="control-label mb-1">Wprowadź  gminę:</label>
                                                                        <input id="commune_end_1" name="commune_end_1" type="text" class="form-control"autocomplete="commune_list_end" aria-required="true"list="commune_list_end" onclick="getCommunity('end')" >
                                                                        <datalist id="commune_list_end_1">
                                                                            <option></option>
                                                                        </datalist>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="place_end_1" class="control-label mb-1">Wprowadź  miejscowość:</label>
                                                                        <input id="place_end_1" name="place_end_1" type="text" class="form-control" autocomplete="place_list_end" aria-required="true" list="place_list_end" onclick="getPlaces('end')">
                                                                        <datalist id="place_list_end_1">
                                                                            <option>

                                                                            </option>
                                                                        </datalist>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="street_end_1" class="control-label mb-1">Wprowadź  ulicę:</label>
                                                                        <input id="street_end_1" name="street_end_1" type="text" class="form-control" autocomplete="street_list_end" aria-required="true"list="street_list_end" onclick="getStreet('end')">
                                                                        <datalist id="street_list_end_1">
                                                                            <option>
                                                                            </option>
                                                                        </datalist>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="number_apartment_end_1" class="control-label mb-1">Wprowadź  numer lokalu:</label>
                                                                        <input id="number_apartment_end_1" name="number_apartment" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="zip_code_end_1" class="control-label mb-1">Wprowadź  kod pocztowy:</label>
                                                                        <input id="zip_code_end_1" name="zip_code_end_1" type="text" class="form-control" aria-required="true" aria-invalid="false" required onclick="getPostCode('end')">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button id="save" onclick="save(1)" type="submit" class="btn btn-lg btn-primary btn-block">
                                                            Zapisz
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
<script src="<?= base_url(); ?>/dist/leaflet-routing-machine-3.2.12/dist/leaflet-routing-machine.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function save(id){
        alert (id);
    }

    $(function () {
        var element = document.getElementById('map');

// Height has to be set. You can do this in CSS too.
      //  element.style = 'height:300px;';

// Create Leaflet map on map element.
        var map = L.map(element);

// Add OSM tile layer to the Leaflet map.
        //https://www.openstreetmap.org/directions?engine=fossgis_osrm_car&route=50.2710%2C22.7810%3B50.1780%2C22.6090#map=12/50.2286/22.6954
        //L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png',
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        L.Routing.control({
            waypoints: [
                L.latLng(57.74, 11.94),
                L.latLng(57.6792, 11.949)
            ],
            language: 'pl',
            showAlternatives: true,
            routeWhileDragging: true
        }).addTo(map);

// Target's GPS coordinates.
       var target = L.latLng('47.50737', '19.04611');

// Set map's center to target with zoom 14.
        map.setView(target, 14);

// Place a marker on the same location.
        L.marker(target).addTo(map);
});
</script>

</body>



</html>
<!-- end document-->
