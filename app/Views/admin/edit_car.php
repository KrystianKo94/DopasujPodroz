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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.8.1/dist/sweetalert2.all.min.js" integrity="sha256-Wwm+CQ+crVDzKdbSzjRsw/Kota9INfu02cl8H8oWtpY=" crossorigin="anonymous"></script>
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
                                            <a href="#">Strona główna</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Edytuj dane samochód</li>
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
                                        <i class="fas fa-plus-square"></i>Profil kierowcy</h3>
                                </div>
                                <div class="au-inbox-wrap js-inbox-wrap">
                                    <div class="au-chat">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="container px-5 my-5">
                                                    <div class="card-title">
                                                        <h3 class="text-center title-2">Edytuj dane samochodu</h3>
                                                    </div>
                                                    <hr>
                                                    <form id="carChangeData" action="javascript:modifyVehicleData()"  >
                                                        <input type="hidden" name="<?= csrf_token() ?>" id="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                                                        <div class="form-group">
                                                            <label for="brand" class="control-label mb-1">Wybierz pojazd:</label>
                                                            <select name="car" id="car" class="form-control-lg form-control" onchange="changeCar()">
                                                                <?php if(!is_null($brand)):
                                                                foreach ($brand as $item): echo "<option value=".$item->__get('id_vehicle').">".$item->getCarDescription()."</option>";endforeach; ;endif;?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="brand" class="control-label mb-1">Marka pojazdu:</label>
                                                            <input id="brand" name="brand" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php  if(!empty($brand)): echo $brand[0]->getCarBrand(); endif; ?>" onchange="makeChange()">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="model" class="control-label mb-1">Model samochodu:</label>
                                                            <input id="model" name="model" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php if(!empty($brand)): echo  $brand[0]->getCarModel(); endif ?>" onchange="makeChange()">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="type" class="control-label mb-1">Typ samochodu:</label>
                                                            <input id="type" name="type" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php if(!empty($brand)): echo $brand[0]->getCarType(); endif ?>" onchange="makeChange()">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="capacity" class="control-label mb-1">Pojemność silnika:</label>
                                                            <input id="capacity" name="capacity" type="number" class="form-control" aria-required="true" aria-invalid="false" value="<?php if(!empty($brand)): echo $brand[0]->getCarCapacity(); endif ?>" onchange="makeChange()">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="power" class="control-label mb-1">Moc pojazdu :</label>
                                                            <input id="power" name="power" type="number" class="form-control" aria-required="true" aria-invalid="false" value="<?php if(!empty($brand)): echo  $brand[0]->getCarPower(); endif ?>" onchange="makeChange()">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="year_of_production" class="control-label mb-1">Rok produkcji :</label>
                                                            <input id="year_of_production" name="year_of_production" type="number" class="form-control" aria-required="true" aria-invalid="false" value="<?php if(!empty($brand)): echo $brand[0]->getCarProductionYear(); endif ?>" onchange="makeChange()">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="capacity_of_trunk" class="control-label mb-1">Pojemność bagażnika :</label>
                                                            <input id="capacity_of_trunk" name="capacity_of_trunk" type="number" class="form-control" aria-required="true" aria-invalid="false" value="<?php if(!empty($brand)): echo $brand[0]->getCarTrunkCapacity(); endif ?>" onchange="makeChange()">
                                                        </div>
                                                        <div>
                                                            <button id="submit" type="submit" class="btn btn-lg btn-primary btn-block"  >
                                                                Zapisz
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
<script>
     $(function () {
        $('#carChangeData').validate(
            {
                errorElement: 'div',
                errorClass: 'invalid-feedback',
                rules: {
                    brand: {
                        required: true
                    },
                    model: {
                        required: true,
                    },
                    type: {
                        required: true,
                    },
                    capacity: {
                        required: true,
                        digits : true
                    },
                    power: {
                        required: true,
                        digits : true
                    },
                    year_of_production: {
                        required: true,
                        digits : true
                    },
                    capacity_of_trunk: {
                        required: true,
                        digits : true
                        
                    }
                },
                messages: {
                    brand: {
                        required: "Prosze wprowadzic marke samochodu",
                    },
                    model: {
                        required: "Prosze wprowadzic model samochodu",
                    },
                    type: {
                        required: "Prosze wprowadzic typ samochodu",
                    },
                    capacity: {
                        required: "Prosze wprowadzic pojemnosc silnika",
                        digits: "Wprowadzony tekst musi być liczbą",
                    },
                    power: {
                        required: "Prosze wprowadzic moc silnika",
                        digits: "Wprowadzony tekst musi być liczbą",
                    },
                    year_of_production: {
                        required: "Prosze rok produkcji",
                        digits: "Wprowadzony tekst musi być liczbą",
                        
                    },
                    capacity_of_trunk: {
                        required: "Prosze wprowadzic pojemnosc bagaznika",
                        valid: "this field can only contain numbers"
                       
                        
                    },


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
                
                    modifyVehicleData();
                }
            });
    });

    var changeCreate = false;

    function changeCar(){
        console.log(changeCreate);
        var idCar = $('#car').val();
        if(changeCreate){
            askAboutChange(idCar);
        }
        else{
            getCarData(idCar);
        }

    }

    function makeChange(){
        changeCreate = true;
    }

    function askAboutChange(id){
            event.preventDefault();
            Swal.fire({
                title: 'Wykrysto zmiany',
                text: "Czy chcesz odrzucić wporawdzone zmiany?",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Tak'
            }).then((result) => {
                if (result.isConfirmed) {
                    getCarData(id);
                    changeCreate = false;
                }
                else {
                    getCarData(id);
                    changeCreate = false;
                }
            });
    }
    function getCarData(id){
        var csrfName = '<?= csrf_token() ?>';
        var dataJson = {
            [csrfName]: $("#<?= csrf_token() ?>").val()
        };
        console.log([csrfName]);
        console.log(dataJson);
        $.ajax({
            type: 'get',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/user/vehicle/'+id,
            data:  JSON.stringify(dataJson),
            success: function (data) {
                    fillData(data);
                    console.log(data);
            },
            error : function (data){
                console.log(data);
            }
        });
    }

    function fillData(data){
        $('#brand').val(data.brand);
        $('#model').val(data.model);
        $('#type').val(data.type);
        $('#capacity').val(data.capacity);
        $('#power').val(data.power);
        $('#year_of_production').val(data.year_of_production);
        $('#capacity_of_trunk').val(data.capacity_of_trunk);
    }

    function modifyVehicleData(){
        event.preventDefault();
      //  $("#carChangeData").trigger('reset');
        Swal.fire({
            
            title: 'Potwierdź akcję',
            text: "Czy chcesz wprowadzić zmiany?",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Tak'
        }).then((result) => {
            if (result.isConfirmed) {
                changeAJAXData();
            }
        });
    }

    function changeAJAXData(){
        var csrfName = '<?= csrf_token() ?>';
        var vehicleData = {
            [csrfName]: $("#<?= csrf_token() ?>").val(),
            "brand":    $('#brand').val(),
             "model":   $('#model').val(),
            "type":     $('#type').val(),
            "capacity": $('#capacity').val(),
            "power":    $('#power').val(),
            "year_of_production":    $('#year_of_production').val(),
            "capacity_of_trunk":     $('#capacity_of_trunk').val(),
            "id_vehicle":   $('#car').val()
        };
        console.log([csrfName]);
        console.log(vehicleData);
        $.ajax({
            type: 'post',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/user/vehicle/put',
            data:  JSON.stringify(vehicleData),
            success: function (data) {
                getAlert(data.text,data.alert_type);
                $("#<?= csrf_token() ?>").val(data.token);
                console.log(data);
            },
            error : function (data){
                console.log(data);
            }
        });
    }
    function getAlert(text,icon){
        Swal.fire(
            'Rezultat :',
            text,
            icon
        )
    }

</script>


</body>



</html>
<!-- end document-->
