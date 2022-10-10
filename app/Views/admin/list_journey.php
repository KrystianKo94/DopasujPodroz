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
                                    <i class="zmdi zmdi-home"></i>Lista utworzonych ogłoszeń</h3>
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
                                        <?php $count=1; ?>
                                        <?php foreach ($advertisements as $advertisement){ ?>
                                            <tr>
                                            <td>
                                            <h6><?php echo $count++ ?></h6>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6><?php echo $advertisement->address_to ?></h6>
                                                </div>
                                            </td>
                                            <td>
                                            <?php  echo $advertisement->go_date ?>
                                            </td>
                                            <td>
                                            <?php /*echo $places[$number]->getVoivodeship(); ?> <br> <?php echo $places[$number]->getPlace(); ?> <br> <?php echo $places[$number]->getStreet() */ ?>
                                            <?php/* $number++*/ ?>
                                            </td>
                                            <td id="state<?php echo $advertisement->id_advertisement?>" >
                                            <?php echo $advertisement->state  ?>
                                            </td>
                                            <td>
                                            <td>
                                                <div class="header-button header__tool" >
                                                
                                                    <div class="header-button-item  js-item-menu">
                                                        <span class="more"> <i class="zmdi zmdi-more"></i></span>
                                                        <div class="setting-dropdown js-dropdown">
                                                            <div class="account-dropdown__body">
                                                                <div class="account-dropdown__item">
                                                                
                                                                    <a href="javascript:fastedit(<?php echo $advertisement->id_advertisement ?>)">
                                                                    <input type="hidden" name="travel" id="travel" value= "<?php echo $advertisement->id_advertisement?>"  />
                                                                                     

                                                                        <i class="zmdi zmdi-edit"></i>Szybka edycja</a>
                                                                </div>
                                                                <div class="account-dropdown__item">
                                                                    <a href="javascript:descriptionShow(<?php echo $advertisement->id_advertisement ?>)">
                                                                        <i class="zmdi zmdi-code"></i>Zobacz pełen opis</a>
                                                                </div>
                                                                <div class="account-dropdown__item">
                                                                    <a href="javascript:changeStateTravelShow(<?php echo $advertisement->id_advertisement ?>, <?php echo '\''.$advertisement->go_date.'\''?>)">
                                                                    <input type="hidden" name="id_travel" id="id_travel" value= "<?php echo $advertisement->id_advertisement?>" />
                                                                    <input type="hidden" name="goDate" id="goDate" value= "<?php echo $advertisement->go_date?>" />

                                                                    
                                                                        <i class="zmdi zmdi-delete"></i>Zmień status ogłoszenia</a>
                                                                        
                                                                </div>
                                                                
                                                               
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                            </td>
                                        </tr>
                                        <?php } ?>
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
    <div id="fast_edit" style="display: none;min-width:900px;">
        <section>
            <div class="">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <div class="au-card-title" >
                            <div class="bg-overlay bg-overlay--blue "></div>
                            <h3>
                                <i class="zmdi zmdi-edit"></i>Wybierz status ogłoszenia</h3>
                        </div>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="card">
                                <form class="card-body" id="changeDateAdvertisement" action="javascript:send()">

                                    <div class="form-group">
                                        <label for="brand" class="control-label mb-3">Wybrany samochód:</label>
                                        <select name="selected_car" id="selected_car" class="form-control-lg form-control" onchange="changeCar()">
                                            <?php  foreach ($vehicles as $vehicle): echo "<option value=".$vehicle->__get('id_vehicle').">".$vehicle->getCarDescription()."</option>";endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="luggage_change" class="control-label mb-3">Pojemność bagażu:</label>
                                        <input id="luggage_change" name="luggage_change" type="number" class="form-control" aria-required="true" aria-invalid="false" value="" >
                                    </div>
                                    <div class="form-group">
                                        <label for="free_place_change" class="control-label mb-3">Ilośc wolnych miejść:</label>
                                        <input id="free_place_change" name="free_place_change" type="number" class="form-control" aria-required="true" aria-invalid="false" value="" >
                                    </div>
                                    <div class="form-group">
                                        <label for="coast_change" class="control-label mb-3">Koszt podróży w przeliczeniu na jedną osobę:</label>
                                        <input id="coast_change" name="coast_change" type="text" type="number" class="form-control" aria-required="true" aria-invalid="false" value="" >
                                    </div>
                                    <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block m-b-15" onclick="send()">
                                        Wykonaj zmiany
                                    </button>
                                </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                  
                    
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <div id="state_changer" style="display: none;min-width:900px;">
        <section>
            <div class="">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <div class="au-card-title" >
                            <div class="bg-overlay bg-overlay--blue "></div>
                            <h3>
                                <i class="zmdi zmdi-edit"></i>Wybierz status ogłoszenia</h3>
                        </div>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="selected_state_travel" class="control-label mb-3">Wybrany jeden status:</label>
                                <select name="selected_state_travel" id="selected_state_travel" class="form-control-lg form-control" >
                                    <option value="0" data-value="Aktywny">Aktywny</option>
                                    <option value="1" data-value="W przygotowaniu">W przygotowaniu</option>
                                    <option value="2" data-value="Anulowany">Anulowany</option>
                                </select>
                            </div>
                            <div id="message_travel" class="social-login-content m-b-15">

                            </div>
                            <button id="travel_change" type="travel_change" class="btn btn-lg btn-primary btn-block m-b-15" onclick="changeStateTravel()">
                                Zmień status
                            </button>
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
                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" id="selected_car_info" value="">
                                        <strong class="d-block text-gray-dark">Wybrany samochód:</strong>
                                        
                                    </p>
                                </div>
                                <div class="media text-muted pt-3">
                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" id="data_end_info" value="">
                                        <strong class="d-block text-gray-dark"> Data wyjazdu:</strong>
                                       
                                    </p>
                                </div>
                                <div class="media text-muted pt-3">
                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" id="free_place_info" value="">
                                        <strong class="d-block text-gray-dark">Ilość wolnych miejsc:</strong>
                                       
                                    </p>
                                </div>
                                <div class="media text-muted pt-3">
                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray" id="coast_info" value="">
                                        <strong class="d-block text-gray-dark">Koszt wyjazdu w przeliczeniu na jedną osobę:</strong>
                                       
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
<script src="<?= base_url(); ?>/dist/datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
<script src="<?= base_url(); ?>/dist/js/validate_journey.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

<script>
    var a_href=10;
    var global_token=<?php echo"\"".$token."\""?>;
    var selectedCar =   $('#selected_car_info').html();
    var dataEnd =  $('#data_end_info').html();
    var freePlace = $('#free_place_info').html();
    var coast = $('#coast_info').html();
    function fastedit(id){
        document.getElementById('travel').value=id;
        var csrfName = '<?= csrf_token() ?>';
        var dataJson = {
            [csrfName]: global_token,
            'id_travel':id,
        };
        $.ajax({
            type: 'post',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/user/journey/search',
            data:  JSON.stringify(dataJson),
            success: function (data) {
                console.log(data);

                $('#luggage_change').val(data[0].luggage);
                $('#free_place_change').val(data[0].seats);
                $('#coast_change').val(data[0].coast);
                global_token=data.token;
            }
        });
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
        if($('#changeDateAdvertisement').valid() ){
            var idCar = $('#selected_car').val();
            var csrfName = '<?= csrf_token() ?>';
            var vehicleData = {
                [csrfName]: global_token,
                "luggage":    $('#luggage_change').val(),
                "seats":   $('#free_place_change').val(),
                "coast":     $('#coast_change').val(),
                "car":      $('#selected_car').val(),
                "idCar": idCar,
                "idAdvertisement" : $('#id_travel').val()
            };

            console.log(vehicleData);
            $.ajax({
                type: 'post',
                dataType: 'json',
                headers: {'X-Requested-With': 'XMLHttpRequest'},
                contentType: 'application/json',
                url: '<?= base_url(); ?>/user/journey/post',
                data:  JSON.stringify(vehicleData),
                success: function (data) {
                    global_token=data.token;
                    $.fancybox.close();

                    Swal.fire(
                        'Dane wyjazdu zostaly zaktualizowane pozytywnie',
                        data.alert_info,
                        data.alert_type
                    );

                }
            });
        }

    }


    function descriptionShow(id){
        var csrfName = '<?= csrf_token() ?>';
        var dataJson = {
            [csrfName]: global_token,
            'id_travel':id,
        };
        $.ajax({
            type: 'post',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/user/journey/search_with_lat_lang',
            data:  JSON.stringify(dataJson),
                success: function (data) {
                        console.log(data);
                         $('#selected_car_info').html(selectedCar+'<b>'+data[0].car+'</b>');
                         $('#data_end_info').html(dataEnd+'<b>'+data[0].start+'</b>');
                         $('#free_place_info').html(freePlace+'<b>'+data[0].seats+'</b>');
                         $('#coast_info').html(coast+'<b>'+data[0].cost+'</b>');
                         global_token=data.token;
                         console.log(data[0][1].latlangFrom);
                         getLocation(data[0][0].latlangFrom,data[0][1].latlangTo);
                        
                    }   
        });

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
    }

    function changeStateTravelShow(id_travel,goDate){
       console.log(goDate)
        var status=  $('#selected_state_travel').val();
        $.fancybox.open({
            src  : '#state_changer',
            type : 'inline',
            autoWidth : false,
            opts : {
                afterShow : function( instance, current ) {
                    document.getElementById('id_travel').value=id_travel;
                    document.getElementById('goDate').value=goDate;
                    console.log(id_travel);
                    
                }
            }
        });
    }

    function changeStateTravel(){
        var date = new Date();
        //var date2= date.format("YYYY-MM-DD HH:MM:SS");
        var status=  $('#selected_state_travel').val();
        var datasend= $('#goDate').val();

        console.log(datasend);

        var travisto= $('#id_travel').val();
        var csrfName = '<?= csrf_token() ?>';
        var selectedValue = $('#selected_state_travel').find(':selected').attr('data-value');

        var dataJson = {
            [csrfName]: global_token,
            'status':$('#selected_state_travel').val(),
            'id_travel':travisto,
        };
        console.log(travisto);
        console.log(datasend);
       
        $.ajax({
            type: 'post',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/user/journey/put',
            data:  JSON.stringify(dataJson),
            success: function (data) {

                global_token=data.token;
                console.log(data);
                $.fancybox.close();
                console.log($('#selected_state_travel').find(':selected').attr('data-value'));
                $('#state'+travisto).html(selectedValue);
                
                if(date>datasend && status == 2){
                    Swal.fire(
                        'Nie mozesz zmienic statusu ogloszenia ktore juz wygaslo',
                        data.alert_info,
                        data.alert_type
                );
                }
                else{
                    Swal.fire(
                        'Status ogloszenia zostal zmieniony',
                        data.alert_info,
                        data.alert_type
                    );
                }
            }
        });
    }


    function getLocation(start, end){
        console.log(start);
        console.log(end);
        var element = document.getElementById('map');
        var map = L.map('map', {
            center: [start.lat, start.lon],
            zoom: 8
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

    var changeCreate = false;

    function getCarData(id){
        var csrfName = '<?=csrf_token() ?>';
        var dataJson={
            [csrfName]:global_token
        };
        console.log([csrfName]);
        console.log(dataJson);
        $.ajax({
            type:'post',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/user/journey/vehicle/put/'+id,
            data:  JSON.stringify(dataJson),
            success: function(data){
                global_token=data.token;
                fillData(data[0]);
                console.log(data);
                console.log('zobaczmy');
            },

            error: function(data){
                console.log(data);
            }
            

        });
    }

    function changeCar(){
        console.log(changeCreate);
        var idCar = $('#selected_car').val();
        if(changeCreate){
            getCarData(idCar);
        }
        else{
            getCarData(idCar);
        }
    }

    function fillData(data){
        $('#luggage_change').val(data.luggage_size);
        $('#free_place_change').val(data.seats_amount);
        $('#coast_change').val(data.trip_cost);
    }



</script>


</body>



</html>
