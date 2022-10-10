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
                                        <li class="list-inline-item">Lista opinni o mnie</li>
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
                                    <i class="zmdi zmdi-home"></i>Lista opinni</h3>
                                <div class="table-responsive table-data">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td></td>
                                            <td>Data wystawienia </td>
                                            <td>Opinia</td>
                                            <td>Data wyjazdu</td>
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
                                                <div class="header-button header__tool" >
                                                    <div class="header-button-item  js-item-menu">
                                                        <span class="more"> <i class="zmdi zmdi-more"></i></span>
                                                        <div class="setting-dropdown js-dropdown">
                                                            <div class="account-dropdown__body">
                                                                <div class="account-dropdown__item">
                                                                    <a href="javascript:detail(1)">
                                                                        <i class="zmdi  zmdi-more"></i>Zobacz szczegóły</a>
                                                                </div>
                                                                <div class="account-dropdown__item">
                                                                    <a href="javascript:showMessage(1)">
                                                                        <i class="zmdi zmdi-undo"></i>Odpowiedz na opinię</a>
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
    <div id="detail_frame" style="display: none;min-width:900px;" >
        <section >
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="user-data m-b-30">
                                <h3 class="title-3 m-b-30">
                                    <i class="zmdi zmdi-info"></i>Szczegóły opinni</h3>
                                <div class="table-responsive table-data">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td>Opcja</td>
                                            <td>Opis </td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <b>Data wystawienia opinni</b>
                                            </td>
                                            <td>
                                                .......
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Data wyjazdu</b>
                                            </td>
                                            <td>
                                                .......
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
        </section>
    </div>
    <div id="message_send" style="display: none;min-width:900px;">
        <section>
            <div class="">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <div class="au-card-title" >
                            <div class="bg-overlay bg-overlay--blue"></div>
                            <h3>
                                <i class="zmdi zmdi-comment-text"></i>Odpowiedz na wiadomość</h3>
                        </div>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <div class="bd-callout bd-callout-info">
                                <h4 id="dealing-with-specificity" class="p-b-5">Treść opinii:</h4>
                                <p id="opinion_text" class="p-3">
                                    <i class="fas fa-quote-left fa-3x fa-pull-left fa-border"></i>
                                    ......</p>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <div class="au-chat-textfield">
                    <form class="au-form-icon" action="javascript:send()">
                        <input class="au-input au-input--full au-input--h65" type="text" placeholder="Wprowadź treść opinii">
                        <button class="au-input-icon">
                            <i class="zmdi zmdi-mail-send"></i>
                        </button>
                    </form>
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
<script src="<?= base_url(); ?>/dist/fancybox-3.5.7/dist/jquery.fancybox.min.js"></script>
<script>
    var a_href=10;
   function detail( id){
       console.log("jakies tam szczegóły");
       console.log(a_href);
       var test = "10";
       console.log("sssss");
       console.log(id);
       $.fancybox.open({
           src  : '#detail_frame',
           type : 'inline',
           autoWidth : false,
           opts : {
               afterShow : function( instance, current ) {
                   console.info( 'done!' );

               }
           }
       });

   }
   function showMessage( id){
       $.fancybox.open({
           src  : '#message_send',
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
</script>


</body>



</html>
