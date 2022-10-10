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
                                        <i class="fas fa-plus-square"></i>Profil kierowcy</h3>
                                </div>
                                <div class="au-inbox-wrap js-inbox-wrap">
                                    <div class="au-chat">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3 class="text-center title-2">Wprowadź dane o samochodzie</h3>
                                                </div>
                                                <hr>
                                                <form  id="carData" action="/admin/car/add" method="post" novalidate="novalidate">
                                                    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                                                    <div class="form-group">
                                                        <label for="brand" class="control-label mb-1">Marka pojazdu:</label>
                                                        <input id="brand" name="brand" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="model" class="control-label mb-1">Model samochodu:</label>
                                                        <input id="model" name="model" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="type" class="control-label mb-1">Typ samochodu:</label>
                                                        <input id="type" name="type" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="capacity" class="control-label mb-1">Pojemność silnika:</label>
                                                        <input id="capacity" name="capacity" type="number" class="form-control" aria-required="true" aria-invalid="false" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="power" class="control-label mb-1">Moc pojazdu :</label>
                                                        <input id="power" name="power" type="number" class="form-control" aria-required="true" aria-invalid="false" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="year_of_production" class="control-label mb-1">Rok produkcji :</label>
                                                        <input id="year_of_production" name="year_of_production" type="number" class="form-control" aria-required="true" aria-invalid="false" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="capacity_of_trunk" class="control-label mb-1">Rok bagażnika :</label>
                                                        <input id="capacity_of_trunk" name="capacity_of_trunk" type="number" class="form-control" aria-required="true" aria-invalid="false" value="">
                                                    </div>
                                                    <div>
                                                    <input type="hidden" name="<?= csrf_token() ?>" id="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

                                                        <button id="payment-button" type="submit" class="btn btn-lg btn-primary btn-block">
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
        $('#carData').validate(
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
                
                    addCarData();
                }
            });
    });

    function addCarData () {
        event.preventDefault();
        Swal.fire({
            title: 'Nacisnij Potwierdz aby zapisac dane do bazy',
            text: "Tej operacji nie da się odwrócić",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Potwierdź'
        }).then((result) => {
            if (result.isConfirmed) {
                var csrfName = '<?= csrf_token() ?>';
                var dataJson = {
                    [csrfName]: $("#<?= csrf_token() ?>").val(),
                    "brand":  $('#brand').val(),
                    "model":  $('#model').val(),
                    "type":  $('#type').val(),
                    "capacity":  $('#capacity').val(),
                    "power":  $('#power').val(),
                    "year_of_production":  $('#year_of_production').val(),
                    "capacity_of_trunk":  $('#capacity_of_trunk').val()


                };
                console.log([csrfName]);
                console.log(dataJson);
                $.ajax({
                    type: 'post',
                    dataType: 'json',
                    headers: {'X-Requested-With': 'XMLHttpRequest'},
                    contentType: 'application/json',
                    url: '<?= base_url(); ?>/user/vehicle/add',
                    data:  JSON.stringify(dataJson),
                    success: function (data) {
                        if(data[0].success==true){
                        console.log("działa");
                        $("#carData").trigger('reset');
                        Swal.fire(
                            'Odpowiedź!',
                            'Pomyslnie zapisano dane do bazy',
                            'info'
                            
                        ).then((result) => {
                            if (result.izConfirmed) {
                             //   window.location.href = "<?= base_url(); ?>/admin/main";
                            }
                        });
                        }
                        else {
                            console.log("niedziała");
                        $("#carData").trigger('reset');
                        Swal.fire(
                            'Odpowiedź!',
                            'Najpierw prosze uzupełnic profil kierowcy!',
                            'info'
                            
                        ).then((result) => {
                            if (result.isConfirmed) {
                               // window.location.href = "<?= base_url(); ?>/admin/main";
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
    </script>

</body>



</html>
<!-- end document-->
