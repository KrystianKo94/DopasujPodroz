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
                                        <li class="list-inline-item">Lista samochodów</li>
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
                            dist-- USER DATA-->
                            <div class="user-data m-b-30">
                                <h3 class="title-3 m-b-30">
                                    <i class="zmdi zmdi-home"></i>Lista samochodów </h3>
                                <div class="table-responsive table-data">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td></td>
                                            <td>Marka pojazdu</td>
                                            <td>Model</td>
                                            <td>Pojemność bagaznika</td>
                                            <td>Rok produkcji</td>
                                            <td>Moc silnika</td>
                                            <td>Opcje</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $count=1; ?>
                                        <?php foreach ($cars as $car){ ?>
                                        <tr>
                                            <td>
                                                <h6><?php echo $count++ ?></h6>
                                            </td>
                                            <td>
                                                <div class="table-data__info">
                                                    <h6> <?php echo $car->getCarBrand() ?></h6>
                                                </div>
                                            </td>
                                            <td>
                                                <?php echo $car->getCarModel() ?>
                                            </td>
                                            <td>
                                                <?php echo $car->getCarCapacity() ?>
                                            </td>
                                            <td>
                                                <?php echo $car->getCarPower() ?>
                                            </td>
                                            <td>
                                                <?php echo $car->getCarPower() ?>
                                            </td>
                                            <td>
                                            <div class="header-button header__tool" >
                                                <div class="header-button-item  js-item-menu">
                                                    <span class="more"> <i class="zmdi zmdi-more"></i></span>
                                                    <div class="setting-dropdown js-dropdown">
                                                        <div class="account-dropdown__body">
                                                            <div class="account-dropdown__item">
                                                                <a href="<?= base_url(); ?>/user/vehicle/put">
                                                                    <i class="zmdi zmdi-edit"></i>Edytuj dane pojazdu</a>
                                                            </div>
                                                            <div class="account-dropdown__item">
                                                                <a href="javascript:removeCar(<?php echo $car->__get('id_vehicle') ?>)">
                                                                    <i class="zmdi zmdi-delete"></i>Usuń pojazd</a>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.8.1/dist/sweetalert2.all.min.js" integrity="sha256-Wwm+CQ+crVDzKdbSzjRsw/Kota9INfu02cl8H8oWtpY=" crossorigin="anonymous"></script>
<script>
    function removeCar (id) {
        Swal.fire({
            title: 'Czy na pewno chcesz usunąć ten samochód?',
            text: "Tej operacji nie da się odwrócić",
            icon: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Powtwierdź'
        }).then((result) => {
            if (result.isConfirmed) {
                var csrfName = '<?= csrf_token() ?>';
                var dataJson = {
                    [csrfName]: $("#<?= csrf_token() ?>").val()
                };
                console.log([csrfName]);
                console.log(dataJson);
              /*  $.ajax({
                    type: 'post',
                    dataType: 'json',
                    headers: {'X-Requested-With': 'XMLHttpRequest'},
                    contentType: 'application/json',
                    url: '',
                    data:  JSON.stringify(dataJson),
                    success: function (data) {

                    },
                    error : function (data){
                        console.log(data);
                    }
                });*/
            }
        });
    }
</script>

</body>

</html>
