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
    <link href="<?= base_url(); ?>/dist/css/main_data.css" rel="stylesheet" media="all">
</head>

<body class="animsition">

<div class="page-wrapper">
    <div class="modal" style="display: none">
        <div class="center">
            <img alt="" src="<?= base_url(); ?>/dist/images/loader.gif" />
        </div>
    </div>
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
                                <div class="form-header">
                                    <input class="au-input au-input--xl" onkeyup="makeSearch()"  type="search" id="search" name="search" placeholder="Wprowadź miejsce docelowe..." list="dataList_search" />
                                    <div class="loading" id="loading1"></div>
                                    <datalist id="dataList_search" onclick="getSelectedData()">
                                        <option>
                                        </option>
                                    </datalist>
                                    <button class="au-btn--submit"  onclick="getSelectedData()">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                    <button class="au-btn--submit"  onclick="allData()">
                                        <i class="zmdi zmdi-redo"></i>
                                    </button>
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

                        <div class="loading">
                            <div class="loader"></div>
                        </div>
                        <div class="col-md-8 col-lg-12">
                            <!-- USER DATA-->
                            <div class="user-data m-b-30">
                                <h3 class="title-3 m-b-30">
                                    <i class="zmdi zmdi-home"></i>Lista ogłoszeń</h3>
                                <div class="filters m-b-45">
                                    <div class="rs-select2--dark rs-select2--md m-r-10 rs-select2--border">
                                        <select class="js-select2" name="property">
                                            <option selected="selected">Wyszukaj według</option>
                                            <option value="0">Czas wyjazdu</option>
                                            <option value="1">Miejsca docelowego</option>
                                            <option value="3">...</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                </div>
                                <div class="table-responsive table-data">
                                    <table class="table" id ="advertisement_table" name = "advertisement_table">
                                        <thead>
                                        <tr>
                                            <td></td>
                                            <<td>Miejsce wyjazdu</td>
                                            <td>Miejsce docelowe</td>
                                            <td>Data wyjazdu</td>
                                            <td>Data dojazdu</td>
                                            <td>Opcje</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $count=1; ?>
                                        <?php foreach ($travel as $trip){ ?>
                                            <tr id="advertisement<?php echo $trip->getIdAdvertisement()?>" >
                                                <td>
                                                    <h6><?php echo $count++ ?></h6>
                                                </td>
                                                <td>

                                                    <h6><?php echo $trip->getFrom() ?></h6>

                                                </td>
                                                <td>
                                                    <h6><?php  echo $trip->getTo() ?></h6>
                                                </td>
                                                <td>
                                                    <h6><?php  echo $trip->getStart() ?></h6>
                                                </td>

                                                <td>
                                                    <h6><?php echo $trip->getEnd() ?></h6>
                                                </td>

                                                <td>
                                                    <div class="header-button header__tool" >
                                                        <div class="header-button-item  js-item-menu">
                                                            <span class="more"> <i class="zmdi zmdi-more"></i></span>
                                                            <div class="setting-dropdown js-dropdown">
                                                                <div class="account-dropdown__body">
                                                                    <div class="account-dropdown__item">
                                                                        <a href="<?= base_url() ?>/advertisement/<?php echo $trip->getIdAdvertisement()?>/detail">
                                                                            <i class="zmdi zmdi-long-arrow-right"></i>Przejdź do szczegółów</a>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.8.1/dist/sweetalert2.all.min.js" integrity="sha256-Wwm+CQ+crVDzKdbSzjRsw/Kota9INfu02cl8H8oWtpY=" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>/dist/datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
<script src="<?= base_url(); ?>/dist/js/validate_journey.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

<script>
    var token = <?php echo"'".$token."'" ?>;
    var prevText = "";
    var html;
    function makeSearch() {
        // nie jest pusta tekst pusty
        if(prevText.substring(0,1) != $('#search').val().substring(0,1) && $('#search').val().length > 0){
            createAjaxFillAutocomplete();
        }
        else {
            if(prevText.length == 0 && $('#search').val().length > 0){
                createAjaxFillAutocomplete();
            }
        }
        if($('#search').val().length > 0){
            prevText= $('#search').val();
        }


        //console.log(dataJson);

    }

    function createAjaxFillAutocomplete(){
        var csrfName = '<?= csrf_token() ?>';
        var dataJson = {
            [csrfName]: token,
            "name_place":  $('#search').val()
        };
        $.ajax({
            type: 'post',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/find/places',
            data:  JSON.stringify(dataJson),
            beforeSend: function (data){
                $(".modal").show();
            },
            success: function (data) {
                $(".modal").hide();
                token=data.token;
                var list = data.data_seach;
                list.forEach(function (value, index){
                    $('#dataList_search').append("<option value=\""+value.FULL_NAME+"\" data-id="+value.FULL_NAME+"></option>");
                });
                console.log(data);
            },
            error : function (data){
                console.log(data);
            }
        });
    }

    function getSelectedData() {
        event.preventDefault();
        create();
    }

    function create() {
        var csrfName = '<?= csrf_token() ?>';
        var dataJson = {
            [csrfName]: token,
            "name_place":  $('#search').val()
        };
        $.ajax({
            type: 'post',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/filter/reservationByLocation',
            data:  JSON.stringify(dataJson),
            beforeSend: function (data){
            },
            success: function (data) {
                count =1;
                token=data.token;
                list = data.advertisement;
                clearData();
                list.forEach(function (value, index){
                    $("#advertisement"+data.id_advertisement).fadeIn();
                });
            },
            error : function (data){
                console.log(data);
            }
        });
    }
    function createText (data,num){
        console.log(data);
        text ="<tr><td><h6>{count}</h6></td><td><h6>{address_from}</h6></td><td><h6>{address_to}</h6></td><td><h6>{date_start}</h6></td><td><h6>{date_end}</h6></td><td>";
        text =text+"<div class=\"header-button header__tool\">";
        text =text+"<div class=\"header-button-item  js-item-menu\">";
        text =text+"<span class=\"more\"> <i class=\"zmdi zmdi-more\"></i></span>";
        text =text+"<div class=\"setting-dropdown js-dropdown\">";
        text =text+"<div class=\"account-dropdown__body\">";
        text =text+"<div class=\"account-dropdown__item\">";
        text =text+"<a href=\"<?= base_url() ?>/advertisement/{id_advertisement}/detail\">";
        text =text+"<i class=\"zmdi zmdi-long-arrow-right\"></i>Przejdź do szczegółów</a>";
        text =text+"</div>";
        text =text+"</div>";
        text =text+"</div>";
        text =text+"</div>";
        text =text+"</div>";
        text =text+"</td>";

        text = text.replace("{count}",num);
        text = text.replace("{address_from}",data.address_from);
        text = text.replace("{address_to}",data.address_to);
        text = text.replace("{date_start}",data.go_date);
        text = text.replace("{date_end}",data.to_date);
        text = text.replace("{id_advertisement}",data.id_advertisement);
        console.log(text);
        html= text;
    }

    function clearData() {
        $('#advertisement_table > tbody  > tr').each(function(index, tr) {
            $("#"+tr.id).fadeOut();
        });
    }
    function allData() {
        $('#advertisement_table > tbody  > tr').each(function(index, tr) {
            $("#"+tr.id).fadeIn();
        });
    }
</script>
