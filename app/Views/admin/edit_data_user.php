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
                                        <li class="list-inline-item">Edytuj dane użytkownika</li>
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
                                        <i class="fas fa-plus-square"></i>Dane użytkownika</h3>
                                </div>
                                <div class="au-inbox-wrap js-inbox-wrap">
                                    <div class="au-chat">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-title">
                                                    <h3 class="text-center title-2">Uzupełnij dane</h3>
                                                </div>
                                                <hr>
                                                <form action="" method="post" novalidate="novalidate" id="edit_personal_data" name="edit_persona_data">
                                                    <div class="form-group">
                                                        <label for="name" class="control-label mb-1">Imie</label>
                                                        <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="surname" class="control-label mb-1">Nazwisko</label>
                                                        <input id="surname" name="surname" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date_of_birth" class="control-label mb-1">Data urodzenia</label>
                                                        <input class="au-input au-input--full" type="date" name="date_of_birth" id="date_of_birth" placeholder="Data urodzeniaphp "value="">
                                                    </div>
                                                    <div>
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
        $('#edit_personal_data').validate(
            {
                errorElement: 'div',
                errorClass: 'invalid-feedback',
                rules: {
                    name: {
                        required: true
                    },
                    surname: {
                        required: true,
                    },
                    date_of_birth: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "Imie musi być wprowadzone",
                    },
                    surname: {
                        required: "Wprowadzenie nazwiska jest wymagane"
                    },
                    date_of_birth: {
                        required: "Wprowadzenie daty urodzenia jest wymagane"
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
                    console.log("Można wysłać ajaxa");
                    editData();
                }
            });
    });

    function editData(){
//edit/user
        event.preventDefault();
        var arrayForm = $("#edit_personal_data").serializeArray();
        var csrfName = '<?= csrf_token() ?>';
        var dataJson = {
            [csrfName]: '<?= csrf_hash() ?>',
            'name': $(),
        };
        console.log(dataJson);
        $.ajax({
            type: 'post',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/user/user/put',
            data:  JSON.stringify(dataJson),
            success: function (data) {
                console.log("działa");
                Swal.fire(
                    'Odpowiedź!',
                    "tttt",
                    //data['response'],
                    'info'
                );
            },
            error : function (data){
                console.log("Nie działą");
                console.log(data);
            }
        });
    }
</script>
</body>



</html>
<!-- end document-->
