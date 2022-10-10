
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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container0">
            <?= $this->include('main_header') ?>
            <section class="au-breadcrumb m-t-70 m-b-20">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">
                                        <span class="au-breadcrumb-span">Znajdujesz się:</span>
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="#">Home</a>
                                            </li>
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Wyszukaj wyjazdu</li>
                                        </ul>
                                    </div>
                                    <form class="form-header" action="" method="POST">
                                        <input class="au-input au-input--xl" type="text" name="search" placeholder="Wprowadź miejsce docelowe..." />
                                        <button class="au-btn--submit" type="submit">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </form>
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
                            <div class="col-md-9 col-lg-9">
                                <div class="user-data ">
                                    <h3 class="title-3 m-b-30">
                                        <i class="zmdi zmdi-card-travel"></i>Ogłoszenie</h3>
                                        <div class="card" >
                                            <div class="card-header card text-white bg-primary mb-3"> Mapa miejsca podróży</div>
                                            <ul class="list-group list-group-flush">
                                                <div class="container px-5 my-5">
                                                    <div id="map" style="height: 500px; width: 100%">

                                                    </div>
                                                    <div>
                                            </ul>
                                            <div class="card-header card text-white bg-primary mb-3"> Szczegóły dotyczące wyjazdu:</div>
                                            <ul class="list-group list-group-flush">
                                                <div class="container px-5 my-5">
                                                    <div class="table-responsive table-data">
                                                        <div class="table-responsive table-data">
                                                            <table class="table">
                                                                <tr>
                                                                    <td>
                                                                        <h4>Adres wyjazdu :</h4>
                                                                    </td>
                                                                    <td>
                                                                        <h4><?php echo $trip->getFromPlace();?></h4>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h4>Adres docelowy :</h4>
                                                                    </td>
                                                                    <td>
                                                                        <h4><?php echo $trip->getToPlace();?></h4>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                         <td>
                                                                        <h4>Ilość miejsc:</h4>
                                                                    </td>
                                                                    <td>
                                                                        <h4><?php echo $tripData->getSeats();?></h4>
                                                                        <input type="hidden" name="seats" id="seats" value= "<?php $tripData->getSeats()?>" />
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h4>Ilość bagażu którą można zabrać (pojemność bagażnika):</h4>
                                                                    </td>
                                                                    <td>
                                                                        <h4><?php echo $tripData->getLuggage();?><h4>
                                                                       <!-- <input type="hidden" name="luggage" id="luggage" value= "<?php $tripData->getLuggage()?>" /> -->
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <h4>Wskazany pojazd:</h4>
                                                                    </td>
                                                                    <td>
                                                                        <h4><?php echo $trip->gettoCar();?></h4>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="2">
                                                                        <div class="bd-callout bd-callout-info">
                                                                            <h4 id="dealing-with-specificity" class="p-b-5">Opis :</h4>
                                                                            <p id="opinion_text" class="p-3">
                                                                                <i class="fas fa-quote-left fa-3x fa-pull-left fa-border"></i>
                                                                               <?php echo $trip->getDescription();?></p>
                                                                               <input type="hidden" name="idAdvertisement" id="idAdvertisement" value= "<?php $tripData->getIdAdvertisement()?>" />

                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                    </div>
                                            </ul>
                                            <div class="card-header card text-white bg-primary mb-3" id="message_area"> Pozostałe informacje:</div>
                                            <ul class="list-group list-group-flush">
                                                <div class="container px-5 ">
                                                    <div class="center">
                                                        <h3 class="font-weight-bold px-5"><?php echo $trip->getUserName() ?>  </h3>
                                                    </div>
                                                    <div class="center">
                                                        <p><div class="star-rating -x-large" data-rating="4"></div></p>
                                                    </div>
                                                    <div class="form-group" >
                                                        <label for="exampleFormControlTextarea1">Napisz wiadomość</label>
                                                        <textarea class="form-control" id="message_text" rows="7"><?php if(isset($_GET['message'])){ echo $_GET['message'];} else {echo "";} ?></textarea>
                                                    </div>
                                                    <div class="center">
                                                        <button type="button" class="btn btn-danger btn-lg center" onclick="createMessage()">Wyślij wiadomość </button
                                                    </div>
                                                    </div>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="table-responsive table-data">
                                    </div>
                            </div>
                            <div class="col-md-3 col-lg-3">
                                <div class="user-data ">
                                    <div class="center">
                                        <h3 class="font-weight-bold px-5">Opinie o użytkowniku </h3>
                                    </div>
                                    <div class="center">
                                    <p><div class="star-rating -x-large" data-rating="4"></div></p>
                                    </div>
                                    <p class="font-weight-bold text-center"> 4.0 </p>
                                    <div class="center">
                                        <a onclick="about(1)" class="btn btn-primary btn-lg active text-center m-b-20" role="button" aria-pressed="true">Zobacz opinnie</a>
                                    </div>
                                    <hr class="my-4">
                                    <div class="center">
                                        <h3 class="font-weight-bold px-5">Masz pytania ? </h3>
                                    </div>
                                    <hr class="my-4">
                                    <div class="row m-3">
                                        <a onclick="about(1)" class="btn btn-secondary btn-lg active text-center m-2" role="button" aria-pressed="true">Zadzwoń</a>
                                        <a href="#message_area" class="btn btn-secondary btn-lg active text- m-2" role="button" aria-pressed="true">Wyślij wiadomość</a>
                                    </div>
                                    <hr class="my-4">
                                    <form id="form_reservation" name="form_reservation" novalidate="novalidate" action="javascript:void(0)" class="row m-3">
                                    <h3 class="font-weight-bold px-5">Rezerwacja </h3>
                                    <div class="form-group">
                                        <label for="count_place" class="control-label mb-1 font-weight-bold px-5 m-2">Ilość miejsc :</label>
                                        <input id="count_place" name="count_place" type="number" class="form-control" min="0" aria-required="true" aria-invalid="false" required value="<?php if(isset($_GET['count_place'])){ echo $_GET['count_place'];} else {echo "0";} ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="luggage" class="control-label mb-1 font-weight-bold px-5 m-2">Pojemność bagażu w litrach :</label>
                                        <input id="luggage" name="luggage" type="number" class="form-control" min="0" aria-required="true" aria-invalid="false" required value="<?php if(isset($_GET['luggage'])){ echo $_GET['luggage'];} else {echo "0";} ?>"/>
                                    </div>
                                    <hr class="my-4">
                                    <div class="center">
                                        <button type="button" class="btn btn-danger btn-lg" onclick="makeReservation()">Zarezerwuj </button>
                                    </div>
                                    </form>
                                    <hr class="my-4">
                                </div>
                            </div>
                        </div>


                    </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
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
    <script src="<?= base_url(); ?>/dist/js/star.js"></script>
    <script src="<?= base_url(); ?>/dist/leaflet-routing-machine-3.2.12/dist/leaflet-routing-machine.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.8.1/dist/sweetalert2.all.min.js" integrity="sha256-Wwm+CQ+crVDzKdbSzjRsw/Kota9INfu02cl8H8oWtpY=" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/dist/datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script>
        
        var availableSeats =  $('#brand').val();
        var token = <?php echo "\"".$token."\"" ?>;
        var actionCreate = <?php if(isset($_GET['action'])){ echo "'".$_GET['action']."'";} else {echo "'".false."'";} ?>;
        $(function() {
            $('#form_reservation').validate(
                {
                    errorElement: 'div',
                    errorClass: 'invalid-feedback',
                    rules: {
                        count_place: {
                            required: true,
                            max: <?php echo $free_data['RESERVATION_TO_SEAT']?>,
                            min: 1
                        },
                        luggage:{
                            required: true,
                            max: <?php echo $free_data['LUGGAGE_TO_RESERVATION']?>,
                            min: 0
                        }
                    },
                    messages: {
                        count_place: {
                            required: "Prosze wprowadzić ilość miejsc",
                            max: "Maksymalna ilość miejsc wynosi "+<?php echo $free_data['RESERVATION_TO_SEAT']?>,
                            min: "Aby zarezerwować wyjazd konieczne jest wprowadzenie conajmniej jednego miejsca"
                        },
                        luggage: {
                            required: "Prosze wprowadzic rozmiar bagażu",
                            max: "Maksymalna ilość miejsc wynosi "+<?php echo $free_data['LUGGAGE_TO_RESERVATION']?>,
                            min: "Minimalna ilość bagażu "
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
            $('.star-rating').starRating({ });
            var element = document.getElementById('map');
            var map = L.map(element);
            //https://www.openstreetmap.org/directions?engine=fossgis_osrm_car&route=50.2710%2C22.7810%3B50.1780%2C22.6090#map=12/50.2286/22.6954
            //L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png',
            L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            L.Routing.control({
                waypoints: [
                    L.latLng(<?php echo $start['lat'] ?>,<?php echo $start['lon'] ?>),
                    L.latLng(<?php echo $end['lat'] ?>,<?php echo $end['lon'] ?>)
                ],
                language: 'pl',
                showAlternatives: true,
                routeWhileDragging: true
            }).addTo(map);
            var target = L.latLng(<?php echo $start['lat'] ?>,<?php echo $start['lon'] ?>);
            map.setView(target, 14);
            L.marker(target).addTo(map);
            console.log(actionCreate);
            if(actionCreate == 'reservation'){
                makeReservationAjax();
            }
            if(actionCreate == 'message'){
                createMessageAjax();
            }


        });
        function about(id){
            alert("dd");
        }
        function goToSection(){

        }
        
        function makeReservation(){
            if($('#form_reservation').valid()){
                event.preventDefault();
                Swal.fire({
                    title: 'Potwierdz aby zarezerwowac wyjazd',
                    text: "Czy jestes pewien, że chcesz zarezerwowac ten wyjazd?",
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Potwierdź'
                }).then((result) => {
                    if (result.isConfirmed) {
                        makeReservationAjax();
                    }
                });
            }

    }
        
        function makeReservationAjax(){
            var csrfName = '<?= csrf_token() ?>';
            console.log($('#luggage').val());
            $('#luggage').val(3);
            var dataJson = {
                [csrfName]: token,
                "idAdvertisement" : <?php echo $trip->__get("id_advertisement") ?>,
                "seats":  $('#count_place').val(),
                "luggage": $('#luggage').val(),
                "action": "make_reservation"

            };
            console.log([csrfName]);
            console.log(dataJson);
            $.ajax({
                type: 'post',
                dataType: 'json',
                headers: {'X-Requested-With': 'XMLHttpRequest'},
                contentType: 'application/json',
                url: '<?= base_url(); ?>/user/reservation/add',
                data:  JSON.stringify(dataJson),
                success: function (data) {
                    console.log(data);
                    if(data.alert_type== 'info'){
                        Swal.fire(data.alert_info);
                        window.location.replace(data.url);
                    }
                    if(data.alert_type== 'success'){
                        Swal.fire(data.alert_info);
                    }
                },
                error : function (data){
                    console.log(data);
                }
            });
        }

        function createMessage(){
            console.log("createMessage");
            Swal.fire({
                title: 'Potwierdz aby wysłać wiadomość wyjazd',
                text: "Czy na pewno wysłać wiadomość do kierowcy?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Potwierdź'
            }).then((result) => {
                if (result.isConfirmed) {
                    createMessageAjax();
                }
            });

        }

        function createMessageAjax(){
            var csrfName = '<?= csrf_token() ?>';
            console.log($('#luggage').val());
            $('#luggage').val(3);
            var dataJson = {
                [csrfName]: token,
                "idAdvertisement" : <?php echo $trip->__get("id_advertisement") ?>,
                "message":  $('#message_text').val(),
                "action": "create_message"
            };
            console.log([csrfName]);
            console.log(dataJson);
            $.ajax({
                type: 'post',
                dataType: 'json',
                headers: {'X-Requested-With': 'XMLHttpRequest'},
                contentType: 'application/json',
                url: '<?= base_url(); ?>/user/message/add',
                data:  JSON.stringify(dataJson),
                success: function (data) {
                    console.log("succes");
                    console.log(data.alert_type);
                    if(data.alert_type== 'info'){
                        Swal.fire(data.alert_info);
                        window.location.replace(data.url);
                    }
                    if(data.alert_type== 'success'){
                        Swal.fire(data.alert_info);
                    }
                    token = data.token;
                },
                error : function (data){
                    console.log("error");
                    //console.log(data);
                }
            });
        }
    
    </script>
</body>

</html>

