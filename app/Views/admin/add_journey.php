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
    <link href="<?= base_url(); ?>/dist/datetimepicker/build/jquery.datetimepicker.min.css" rel="stylesheet" media="all" >
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
                                        <li class="list-inline-item">Dodaj ogłoszenie</li>
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
                                        <i class="fas fa-plus-square"></i>Dodaj przejazd</h3>
                                </div>
                                <div class="au-inbox-wrap js-inbox-wrap">
                                    <div class="au-chat">
                                        
                                        <div class="card">
                                            <div class="card-body">
                                                <section id="section1" name="section1" >
                                                <form id="formsection1" name="formsection1" novalidate="novalidate" action="javascript:void(0)">
                                                <div class="card-title">
                                                    <h3 class="text-center title-2">Dane ogólne</h3>
                                                </div>
                                                <hr>
                                                    <div class="form-group">
                                                        <label for="coast" class="control-label mb-1">Wprowadź koszt wyjazdu dla 1 osoby :</label>
                                                        <input id="coast" name="coast" type="number" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="luggage" class="control-label mb-1">Wprowadź pojamość bagażu dla 1 osoby :</label>
                                                        <input id="luggage" name="luggage" type="number" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="number_of_field" class="control-label mb-1">Wprowadź ilość wolnych miejsc :</label>
                                                        <input id="number_of_field" name="number_of_field" type="number" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    </div>
                                                    <div class="form-group"> 
                                                    
                                                        <label for="brand" class="control-label mb-1">Wybierz samochód, którym pojedziesz :</label>
                                                        <select name="cars" id="car" class="form-control-lg form-control" >
                                                        <?php if(!is_null($brand)):
                                                                foreach ($brand as $item): echo "<option value=".$item->__get('id_vehicle').">".$item->getCarDescription()."</option>";endforeach; ;endif;?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description" class="control-label mb-1">Opis ogłoszenia :</label>
                                                        <textarea name="description" id="textarea-input" rows="9" placeholder="Opis ....." class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date_start" class="control-label mb-1">Data wyjazdu :</label>
                                                        <input id="date_start" name="date_start" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date_end" class="control-label mb-1">Data przyjazdu :</label>
                                                        <input id="date_end" name="date_end" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                                    </div>
                                                    </form>
                                                </section>
                                                <section id="section2" name="section2" style="display: none">
                                                <form id="formsection2" name="formsection2" novalidate="novalidate"action="javascript:void(0)" >

                                                    <div class="card-title">
                                                        <h3 class="text-center title-2">Dane miejsca z którego rozpoczniesz wyjazd</h3>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group">
                                                        <label for="voivodeship_start" class="control-label mb-1">Wprowadź  województwo:</label>
                                                        <input id="voivodeship_start" name="voivodeship_start" type="text" class="form-control" aria-required="true" aria-invalid="false" list="voivodeship_list" required>
                                                        <datalist id="voivodeship_list">
                                                            <?php foreach ($voivodeships as $voivodeship): echo  "<option value=\"".$voivodeship->getDescription()."\" data-id='".$voivodeship->getIdVoivodeship()."'></option>"; endforeach;?>
                                                        </datalist>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="district_start" class="control-label mb-1">Wprowadź  powiat:</label>
                                                        <input id="district_start" name="district_start" type="text" class="form-control" autocomplete="district_list_start" aria-required="true" list="district_list_start" onclick="getDistrict('start')">
                                                        <datalist id="district_list_start">
                                                            <option>
                                                            
                                                            </option>
                                                        </datalist>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="commune_start" class="control-label mb-1">Wprowadź  gminę:</label>
                                                        <input id="commune_start" name="commune_start" type="text" class="form-control"autocomplete="commune_list_start" aria-required="true"list="commune_list_start" onclick="getCommunity('start')" >
                                                        <datalist id="commune_list_start">
                                                            <option></option>
                                                        </datalist>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="place_start" class="control-label mb-1">Wprowadź  miejscowość:</label>
                                                        <input id="place_start" name="place_start" type="text" class="form-control" autocomplete="place_list_start" aria-required="true"list="place_list_start" onclick="getPlaces('start')" >
                                                        <datalist id="place_list_start">
                                                            <option></option>
                                                        </datalist>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="street_start" class="control-label mb-1">Wprowadź  ulicę:</label>
                                                        <input id="street_start" name="street_start" type="text" class="form-control" autocomplete="street_list_start" aria-required="true"list="street_list_start" onclick="getStreet('start')" >
                                                        <datalist id="street_list_start">
                                                            <option></option>
                                                        </datalist>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="number_apartment_start" class="control-label mb-1">Wprowadź  numer lokalu:</label>
                                                        <input id="number_apartment_start" name="number_apartment_start" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="zip_code_start" class="control-label mb-1">Wprowadź  kod pocztowy:</label>
                                                        <input id="zip_code_start" name="zip_code_start" type="text" class="form-control" aria-required="true" aria-invalid="false" required onclick="getPostCode('start')">
                                                    </div>
                                                        </form>
                                                </section>
                                                <section id="section3" name="section3" style="display: none">
                                                <form id="formsection3" name="formsection3" novalidate="novalidate" action="javascript:void(0)">

                                                    <div class="card-title">
                                                        <h3 class="text-center title-2">Dane miejsca do którego wyjeżdżasz</h3>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group">
                                                        <label for="voivodeship_end" class="control-label mb-1">Wprowadź  województwo:</label>
                                                        <input id="voivodeship_end" name="voivodeship_end" type="text" class="form-control" aria-required="true" aria-invalid="false" list="voivodeship_list" required>
                                                        <datalist id="voivodeship_list">
                                                            <?php foreach ($voivodeships as $voivodeship): echo  "<option value=\"".$voivodeship->getDescription()."\" data-id='".$voivodeship->getIdVoivodeship()."'></option>"; endforeach;?>
                                                        </datalist>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="district_end" class="control-label mb-1">Wprowadź  powiat:</label>
                                                        <input id="district_end" name="district_end" type="text" class="form-control" autocomplete="district_list_end" aria-required="true" list="district_list_end" onclick="getDistrict('end')">
                                                        <datalist id="district_list_end">
                                                            <option>
                                                            
                                                            </option>
                                                        </datalist>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="commune_end" class="control-label mb-1">Wprowadź  gminę:</label>
                                                        <input id="commune_end" name="commune_end" type="text" class="form-control"autocomplete="commune_list_end" aria-required="true"list="commune_list_end" onclick="getCommunity('end')" >
                                                        <datalist id="commune_list_end">
                                                            <option></option>
                                                        </datalist>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="place_end" class="control-label mb-1">Wprowadź  miejscowość:</label>
                                                        <input id="place_end" name="place_end" type="text" class="form-control" autocomplete="place_list_end" aria-required="true" list="place_list_end" onclick="getPlaces('end')">
                                                        <datalist id="place_list_end">
                                                            <option>
                                                            
                                                            </option>
                                                        </datalist>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="street_end" class="control-label mb-1">Wprowadź  ulicę:</label>
                                                        <input id="street_end" name="street_end" type="text" class="form-control" autocomplete="street_list_end" aria-required="true"list="street_list_end" onclick="getStreet('end')">
                                                        <datalist id="street_list_end">
                                                            <option>
                                                            </option>
                                                        </datalist>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="number_apartment_end" class="control-label mb-1">Wprowadź  numer lokalu:</label>
                                                        <input id="number_apartment_end" name="number_apartment" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="zip_code_end" class="control-label mb-1">Wprowadź  kod pocztowy:</label>
                                                        <input id="zip_code_end" name="zip_code_end" type="text" class="form-control" aria-required="true" aria-invalid="false" required onclick="getPostCode('end')">
                                                    </div>
                                                    </form>
                                                </section>
                                                
                                                <section id="section4" name="section4" style="display: none">
                                                
                                                    <div class="card-title">
                                                        <h3 class="text-center title-2">Podsumowanie</h3>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group">
                                                        <label for="map" class="control-label mb-1">Mapa przejazu :</label>
                                                        <div class="container px-5 my-5">
                                                            <div id="map" style="height: 500px; width: 100%">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="my-3 p-3 bg-white rounded box-shadow">
                                                        <h6 class="border-bottom border-gray pb-2 mb-0">Pozostałe informacje</h6>
                                                        <div class="media text-muted pt-3">
                                                           <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" id="selected_car" value="">
                                                                <strong class="d-block text-gray-dark">Wybrany samochód:</strong>
                                                                
                                                            </p>
                                                        </div>
                                                        <div class="media text-muted pt-3">
                                                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" id="data_time" value="">
                                                                <strong class="d-block text-gray-dark">Miejsce i data wyjazdu:</strong>
                                                                
                                                            </p>
                                                        </div>
                                                        <div class="media text-muted pt-3">
                                                           <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" id="free_place" value="">
                                                                <strong class="d-block text-gray-dark">Ilość wolnych miejsc:  </strong>
                                                                
                                                            
                                                        </div>
                                                    </div>
                                                        
                                                </section>
                                                <div class="progress">
                                                    <div id="progress" name="progress" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 1%"></div>
                                                </div>
                                                <div class="container">

                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <button id="back1" name="back1" type="submit" class="btn btn-lg btn-primary btn-block" onclick="backPage1()" style="display: none">
                                                                Wstecz
                                                            </button>
                                                            <button id="back2" name="back2" type="submit" class="btn btn-lg btn-primary btn-block" onclick="backPage2()" style="display: none">
                                                                Wstecz
                                                            </button>
                                                            <button id="back3" name="back3" type="submit" class="btn btn-lg btn-primary btn-block" onclick="backPage3()" style="display: none">
                                                                Wstecz
                                                            </button>
                                                        </div>
                                                        <div class="col-sm">

                                                        </div>
                                                        <div class="col-sm">
                                                            <button id="next1" name="next1" type="submit" class="btn btn-lg btn-primary btn-block" onclick="nextPage1()">
                                                                Dalej
                                                            </button>
                                                            <button id="next2" name="next2" type="submit" class="btn btn-lg btn-primary btn-block" onclick="nextPage2()" style="display: none">
                                                                Dalej
                                                            </button>
                                                            <button id="next3" name="next3" type="submit" class="btn btn-lg btn-primary btn-block" onclick="summary()" style="display: none">
                                                                Dalej
                                                            </button>
                                                            <button id="finish" name="finish" type="submit" class="btn btn-lg btn-warning btn-block" onclick="send()" style="display: none">
                                                                Dodaj ogłoszenie
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
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="<?= base_url(); ?>/dist/datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.8.1/dist/sweetalert2.all.min.js" integrity="sha256-Wwm+CQ+crVDzKdbSzjRsw/Kota9INfu02cl8H8oWtpY=" crossorigin="anonymous"></script>

<script>
    jQuery.validator.addMethod("greateThan", function(value, element) {
        var startdate= $('#date_start').val();
        var enddate=  $('#date_end').val();
        return startdate < enddate;
    }, 'Data przyjazdu nie może być wcześniejsza niż data wyjazdu ');
    jQuery.validator.addMethod("reservationCheck", function(value, element) {
        checkDate();
        return validData;
    }, 'Dodano ogłoszenie w podanym czasie');
    var validData = false;
    var token = <?php echo"\"". $token."\"" ?>;
    previousData = false;
    $(function () {
        $('#date_start').datetimepicker();
        $('#date_end').datetimepicker();
        $('#formsection1').validate(
            {
                errorElement: 'div',
                errorClass: 'invalid-feedback',
                rules: {
                    coast: {
                        required: true,
                        digits : true
                    },
                    luggage: {
                        required: true,
                        digits : true
                    },
                    number_of_field: {
                        required: true,
                        digits : true
                    },
                    description: {
                        required: true,
                    },
                    date_start:{
                        required: true,
                        
                    },
                    date_end:{
                        greateThan:true,
                        required: true,
                    }
                },
                messages: {
                    coast: {
                        required: "Prosze wprowadzic kwote przejazdu",
                        digits: "Prosze wprowadzic liczbe",
                    },
                    luggage: {
                        required: "Prosze wprowadzic bagaz",
                        digits: "Prosze wprowadzic liczbe",
                    },
                    number_of_field: {
                        required: "Prosze wprowadzic ilosc miejsc",
                        digits: "Prosze wprowadzic liczbe",
                    },
                    description: {
                        required: "Prosze wprowadzic opis",
                       
                    },
                    date_start: {
                        required: "Prosze wprowadzic date wyjazdu",
                        
                       
                    },
                    date_end: {
                        required: "Prosze wprowadzic date przyjazdu",
                       
                       
                    }
                },
                highlight: function (input) {
                    $(input).addClass('is-invalid');
                },
                unhighlight: function (input) {
                    $(input).removeClass('is-invalid');
                },
                errorPlacement: function (error, element) {
                    $(element).parents('.form-group').append(error);
                },
                submitHandler: function(form, e) {
                
                    
                }
            });
    });
    $(function () {
        $('#formsection2').validate(
            {
                errorElement: 'div',
                errorClass: 'invalid-feedback',
                rules: {
                    voivodeship_start: {
                        required: true,
                        
                    },
                    district_start: {
                        required: true
                    },
                    commune_start: {
                        required: true
                    },
                    place_start: {
                        required: true,
                        
                    },
                    zip_code_start: {
                        required: true,
                        
                    },
                    street_start: {
                        required: true,
                        
                    },
                    number_apartment:{
                        required: true,
                        
                    },
                },
                messages: {
                    voivodeship_start: {
                        required: "Prosze wprowadzic wojewodztwo",
                        
                    },
                    district_start: {
                        required: "Prosze wprowadzic powiat",
                        
                    },
                    commune_start: {
                        required: "Prosze wprowadzic gmine",
                        
                    },
                    place_start: {
                        required: "Prosze wprowadzic miejscowosc",
                       
                    },
                    zip_code_start: {
                        required: "Prosze wprowadzic kod pocztowy",
                       
                    },
                    street_start: {
                        required: "Prosze wprowadzic ulice",
                       
                    },
                    number_apartment: {
                        required: "Prosze wprowadzic ulice",
                       
                    }
                },
                highlight: function (input) {
                    $(input).addClass('is-invalid');
                },
                unhighlight: function (input) {
                    $(input).removeClass('is-invalid');
                },
                errorPlacement: function (error, element) {
                    $(element).parents('.form-group').append(error);
                },
                submitHandler: function(form, e) {
                
                    
                }
            });
    });
    $(function () {
        $('#formsection3').validate(
            {
                errorElement: 'div',
                errorClass: 'invalid-feedback',
                rules: {
                    voivodeship_end: {
                        required: true,
                        
                    },
                    district_end: {
                        required: true
                    },
                    commune_end: {
                        required: true
                    },
                    place_end: {
                        required: true,
                        
                    },
                    zip_code_end: {
                        required: true,
                        
                    },
                    street_end: {
                        required: true,
                        
                    },
                    number_end:{
                        required: true,
                        
                    },
                },
                messages: {
                    voivodeship_end: {
                        required: "Prosze wprowadzic wojewodztwo",
                        
                    },
                    district_end: {
                        required: "Prosze wprowadzic powiat",
                        
                    },
                    commune_end: {
                        required: "Prosze wprowadzic gmine",
                        
                    },
                    place_end: {
                        required: "Prosze wprowadzic miejscowosc",
                       
                    },
                    zip_code_end: {
                        required: "Prosze wprowadzic kod pocztowy",
                       
                    },
                    street_end: {
                        required: "Prosze wprowadzic ulice",
                       
                    },
                    number_end: {
                        required: "Prosze wprowadzic ulice",
                       
                    }
                },
                highlight: function (input) {
                    $(input).addClass('is-invalid');
                },
                unhighlight: function (input) {
                    $(input).removeClass('is-invalid');
                },
                errorPlacement: function (error, element) {
                    $(element).parents('.form-group').append(error);
                },
                submitHandler: function(form, e) {
                
                    
                }
            });
    });


    function nextPage1(){
        var startdate= $('#date_start').val();
        var enddate=  $('#date_end').val();
        console.log(startdate);
        event.preventDefault();
        if($('#formsection1').valid() ){
        $('#next1').fadeOut(100);
        $('#next2').fadeIn(100);
        $('#section1').fadeOut(100);
        $('#section2').fadeIn(1000);
        $('#section3').fadeOut(100);
        $('#back1').fadeIn('slow');
        $('#progress').css('width', '33%');
        
        }
       
    }
    function backPage1(){
        event.preventDefault();
        $('#next2').fadeOut(100);
        $('#next1').fadeIn(100);
        $('#section2').fadeOut(100);
        $('#back1').fadeOut(100);
        $('#section1').fadeIn('slow');
        $('#progress').css('width', '1%');
    }
    function nextPage2(){
        event.preventDefault();
        if($('#formsection2').valid()){
            $('#next1').fadeOut(100);
            $('#next2').fadeOut(100);
            $('#back1').fadeOut(100);
            $('#section1').fadeOut(100);
            $('#section2').fadeOut(100);
            $('#section3').fadeIn(1000);
            $('#back2').fadeIn('slow')
            $('#next3').fadeIn(100);
            $('#progress').css('width', '75%');
            
           
            
        }
    }
    function backPage2(){
        event.preventDefault();
        $('#finish').fadeOut(100);
        $('#next2').fadeIn(100);
        $('#back2').fadeOut(100);
        $('#next3').fadeOut(100);
        $('#section3').fadeOut(100);
        $('#back1').fadeIn(100);
        $('#section2').fadeIn('slow');
        $('#progress').css('width', '33%');
    }

    function backPage3(){
        event.preventDefault();
        $('#finish').fadeOut(100);
        $('#next2').fadeIn(100);
        $('#back3').fadeOut(100);
        $('#next1').fadeOut(100);
        $('#section4').fadeOut(100);
        $('#back2').fadeIn(100);
        $('#section3').fadeIn('slow');
        $('#progress').css('width', '75%');
    }
    function summary(){
        event.preventDefault();
        if($('#formsection3').valid()){
            $('#next1').fadeOut(100);
            $('#next2').fadeOut(100);
            $('#next3').fadeOut(100);
            $('#back1').fadeOut(100);
            $('#back2').fadeOut(100);
            $('#section1').fadeOut(100);
            $('#section2').fadeOut(100);
            $('#section3').fadeOut(100);
            $('#section4').fadeIn(1000);
            $('#back3').fadeIn('slow');
            $('#finish').fadeIn(100);
            $('#progress').css('width', '100%');
            getLatLong();
            $('#selected_car').append('<b>'+$("#car option:selected").text()+'</b>');
            $('#data_time').append('<b>'+$("#place_start").val()+', ul'+$("#street_start").val()+''+$("#number_apartment_start").val()+'</b>');
            $('#free_place').append('<b>'+$("#number_of_field").val()+'</b>');

        
        };
    }


    
    
    function send(){
        event.preventDefault();
        
        Swal.fire({
            title: 'Nacisnij Potwierdz aby zapisac dane do bazy',
            text: "Dane zostana umieszczone w bazie",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Potwierdź'
        }).then((result) => {
            if (result.isConfirmed) {
                var csrfName = '<?= csrf_token() ?>';
                var dataJson = {
                    [csrfName]: token,
                    "car":   $('#car').val(),
                    "date_start":  $('#date_start').val(),
                    "date_end": $('#date_end').val(),
                    "number_of_field":  $('#number_of_field').val(),
                    "coast":  $('#coast').val(),
                    "luggage":  $('#luggage').val(),
                    "voivodeship_start":  $('#voivodeship_start').val(),
                    "voivodeship_end":  $('#voivodeship_end').val(),
                    "district_start":  $('#district_start').val(),
                    "district_end":  $('#district_end').val(),
                    "commune_start":  $('#commune_start').val(),
                    "commune_end":  $('#commune_end').val(),
                    "place_start":  $('#place_start').val(),
                    "place_end":  $('#place_end').val(),
                    "street_start":  $('#street_start').val(),
                    "street_end":  $('#street_end').val(),
                    "zip_code_start":  $('#zip_code_start').val(),
                    "zip_code_end":  $('#zip_code_end').val(),
                    "number_apartment_start": $('#number_apartment_start').val(),
                    "number_apartment_end": $('#number_apartment_end').val(),
                };
                console.log([csrfName]);
                console.log(dataJson);
                console.log(car);
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    headers: {'X-Requested-With': 'XMLHttpRequest'},
                    contentType: 'application/json',
                    url: '<?= base_url(); ?>/user/journey/add',
                    data:  JSON.stringify(dataJson),
                    success: function (data) {
                        if(data.success==true){
                        console.log("działa");
                        $
                        Swal.fire(
                            'Odpowiedź!',
                            'Pomyslnie zapisano dane do bazy',
                            'info'
                            
                        ).then((result) => {
                            if (result.isConfirmed) {
                                
                            }
                        });
                        }
                        else {
                            console.log("niedziała");
                        
                        Swal.fire(
                            'Odpowiedź!',
                            'Nie mozesz dodac przejazdu, masz inny przejazd ktory jest aktywny w tych ramach czasowych',
                            'info'
                            
                        ).then((result) => {
                            if (result.isConfirmed) {
                                
                            }
                        });
                        }
                        
                     
                    },
                    error : function (data){
                        console.log(data);
                    }
                });
            }
        });
    }
    function getDistrict(val){
        console.log("Kliknięto");
        idVoivodeship = $("#voivodeship_list option[value='" + $('#voivodeship_'+val).val() + "']").attr('data-id');
        var csrfName = '<?= csrf_token() ?>';
        var dataJson = {
            [csrfName]: token,
            'id_voivodeship': idVoivodeship
        };
        console.log(dataJson);
        $.ajax({
            type: 'post',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/user/location/district',
            data:  JSON.stringify(dataJson),
            success: function (data) {
                token = data.token;
                $('#district_list_'+val).empty();
                var list = data.districts;
                list.forEach(function (value, index){
                    $('#district_list_'+val).append("<option value=\""+value.description+"\" data-id="+value.id_district+"></option>");
                    console.log(value);
                    
                });
                console.log(data);
            },
            error : function (data){
                console.log(data);
            }
        });
    }

    function getCommunity(val){
        
        
        idVoivodeship = $("#voivodeship_list option[value='" + $('#voivodeship_'+val).val() + "']").attr('data-id');
        idDistrict = $("#district_list_"+val+" option[value='" + $('#district_'+val).val() + "']").attr('data-id');
        console.log(idVoivodeship);
        console.log(idDistrict);
        var csrfName = '<?= csrf_token() ?>';
        var dataJson = {
            [csrfName]: token,
            'id_voivodeship': idVoivodeship,
            'id_district' : idDistrict
        };
        console.log(dataJson);
        
        $.ajax({
            type: 'post',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/user/location/community',
            data:  JSON.stringify(dataJson),
            success: function (data) {
                token = data.token;
                $('#commune_list_'+val).empty();
                var list = data.community;
                list.forEach(function (value, index){
                    $('#commune_list_'+val).append("<option value=\""+value.name_of_community+"\" data-id="+value.id_community+"></option>");
                    console.log(value);
                });
                console.log(data);
            },
            error : function (data){
                console.log(data);
            }
        });
    }

    function getPlaces(val){
        
       
        idVoivodeship = $("#voivodeship_list option[value='" + $('#voivodeship_'+val).val() + "']").attr('data-id');
        idDistrict = $("#district_list_"+val+" option[value='" + $('#district_'+val).val() + "']").attr('data-id');
        idCommunity = $("#commune_list_"+val+" option[value='" + $('#commune_'+val).val() + "']").attr('data-id');
        console.log(idVoivodeship);
        console.log(idDistrict);
        console.log(idCommunity);
        var csrfName = '<?= csrf_token() ?>';
        var dataJson = {
            [csrfName]: token,
            'id_voivodeship': idVoivodeship,
            'id_district' : idDistrict,
            'id_community' : idCommunity
        };
        console.log(dataJson);
        
        $.ajax({
            type: 'post',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/user/location/places',
            data:  JSON.stringify(dataJson),
            success: function (data) {
                token = data.token;
                $('#place_list_'+val).empty();
                var list = data.place;
                list.forEach(function (value, index){
                    $('#place_list_'+val).append("<option value=\""+value.description+"\" data-id="+value.id_place+"></option>");
                    console.log(value);
                    console.log(data.place);
                });
                console.log(data);
            },
            error : function (data){
                console.log(data);
                
            }
        });
    }

    function getStreet(val){
        idVoivodeship = $("#voivodeship_list option[value='" + $('#voivodeship_'+val).val() + "']").attr('data-id');
        idDistrict = $("#district_list_"+val+" option[value='" + $('#district_'+val).val() + "']").attr('data-id');
        idCommunity = $("#commune_list_"+val+" option[value='" + $('#commune_'+val).val() + "']").attr('data-id');
        
        var csrfName = '<?= csrf_token() ?>';
        var dataJson = {
            [csrfName]: token,
            'id_voivodeship': idVoivodeship,
            'id_district' : idDistrict,
            'id_community' : idCommunity
        };
        console.log(dataJson);
        
        $.ajax({
            type: 'post',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/user/location/street',
            data:  JSON.stringify(dataJson),
            success: function (data) {
                token = data.token;
                $('#street_list_'+val).empty();
                var list = data.street;
                list.forEach(function (value, index){
                    $('#street_list_'+val).append("<option value=\""+value.name1+"\" data-id="+value.id_street+"></option>");
                    console.log(value);
                    console.log(data.street);
                });
                console.log(data);
            },
            error : function (data){
                console.log(data);
                
            }
        });
    }
    function getPostCode(val){
        console.log(val);
        event.preventDefault();
        var csrfName = '<?= csrf_token() ?>';
        var dataJson = {
            [csrfName]: token,
            'place': $('#place_'+val).val(),
            'street' : $('#street_'+val).val(),
            'number_apartment' : $('#number_apartment_'+val).val()
            };
                console.log([csrfName]);
                console.log(dataJson);
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    headers: {'X-Requested-With': 'XMLHttpRequest'},
                    contentType: 'application/json',
                    url: '<?= base_url(); ?>/user/location/postcode',
                    data:  JSON.stringify(dataJson),
                    success: function (data) {
                        token = data.token;
                        $('#zip_code_'+val).val(data.zip_code);
                        console.log(data);
                        console.log('Udalo sie przeslac dane');
                     },
                     error : function (data){
                        console.log(data);
                    }
                });
    }

    function getLatLong(){
        event.preventDefault();
        var csrfName = '<?= csrf_token() ?>';
        var dataJson = {
            [csrfName]: token,
            'place_start': $('#place_start').val(),
            'street_start' : $('#street_start').val(),
            'number_apartment_start' : $('#number_apartment_start').val(),
            'place_end': $('#place_end').val(),
            'street_end' : $('#street_end').val(),
            'number_apartment_end' : $('#number_apartment_end').val(),
        };
        console.log(dataJson);
        $.ajax({
            type: 'post',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/user/location/latlong',
            data:  JSON.stringify(dataJson),
            success: function (data) {
                token = data.token;
                getLocation(data.start_geo,data.end_geo);
            },
            error : function (data){
                console.log(data);
            }
        });
    }

    function getLocation(start, end){
            console.log(start);
            console.log(end);
        var element = document.getElementById('map');
        var map = L.map('map', {
            center: [start.lat, start.lon],
            zoom: 13
        });
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}{r}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);
        L.Routing.control({
            waypoints: [
                L.latLng(start.lat, start.lon),
                L.latLng(end.lat, end.lon)
            ],
            language: 'pl',
            showAlternatives: true,
            routeWhileDragging: false
        }).addTo(map);
    }

 
   
 


</script>
</body>



</html>
<!-- end document-->
