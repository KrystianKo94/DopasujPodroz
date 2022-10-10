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
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                               
                            </a>
                        </div>
                        <div class="login-form" >
                            <form id="userData"  action="javascript:moveUrlCallback()">
                                
                                <h3 class="text-center title-2">Logowanie</h3>
                                <input type="hidden" name="<?= csrf_token() ?>" id="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                                <div class="form-group">
                                    <label>Email </label>
                                    <input class="au-input au-input--full" type="email" name="email" id="email" aria-required="true" aria-invalid="false" placeholder="Email" >
                                </div>
                                <div class="form-group">
                                    <label>Hasło</label>
                                    <input class="au-input au-input--full" type="password" name="password" id="password" aria-required="true" aria-invalid="false" placeholder="hasło">
                                    <input id="callback" name="callback" type="hidden"  value="">
                                     
                                   


                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <a href="/password">Kliknij aby zresetować hasło</a>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <?= $validation->listErrors() ?>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit"    >Zaloguj</button>
                                <div class="social-login-content">
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Nie masz konta <a href="<?= base_url(); ?>/register"> kliknij aby się zarejestrować</a>
                                </p>
                                <p> Nie otrzymales linku? <a href="<?= base_url(); ?>/sendlinkview" > Kliknij aby wyslać </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="<?= base_url(); ?>/dist/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url(); ?>/dist/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url(); ?>/dist/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- dist JS       -->
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
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.8.1/dist/sweetalert2.all.min.js" integrity="sha256-Wwm+CQ+crVDzKdbSzjRsw/Kota9INfu02cl8H8oWtpY=" crossorigin="anonymous"></script>
    <!-- Main JS-->
    <script src="<?= base_url(); ?>/dist/js/main.js"></script>
    <script>
      var token;
      
      
      var url= <?php echo "\""?><?php
          $url="";
          foreach ($_GET as $key => $value) {
              if($key != 'callback'){
                  $url.='&'.$key.'='.$value;
              }
              //$url = str_replace("\"",$url,"");
              echo $url;
          }?><?php echo "\""?>;


     $(function () {
        $('#userData').validate(
            {
                errorElement: 'div',
                errorClass: 'invalid-feedback',
                rules: {
                    email: {
                        required: true
                        
                    },
                    password: {
                        required: true
                        
                    }
                },
                messages: {
                    email: {
                        required: "Prosze wprowadzic adres email"
                        
                    },
                    password: {
                        required: "Prosze wprowadzic haslo"
                        
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
                    moveUrlCallback();
                }
            });
    });



   function moveUrlCallback(){
       
        var data= <?php echo "\"".$callback."\""?>;
        data= data +url;
        var email = $('#email').val();
        var password = $('#password').val();
        console.log(data);
        var csrfName = '<?= csrf_token() ?>';
        if(token==null){
           token= $("#<?= csrf_token() ?>").val();
        }
        var dataJson = {
            [csrfName]: token,
            'callback': data,
            'email': $('#email').val(),
            'password': $('#password').val(),
        };
        
        console.log([csrfName]);
        console.log(dataJson);
        $.ajax({
            type: 'post',
            dataType: 'json',
            headers: {'X-Requested-With': 'XMLHttpRequest'},
            contentType: 'application/json',
            url: '<?= base_url(); ?>/login',
            data:  JSON.stringify(dataJson),
            success: function (data) {
                    if(data.isSuccess){
                        $(window).attr('location',data.callback);
                    
                    }
                    else if(data.isSuccess==false){
                        $("#userData").trigger('reset');
                        Swal.fire(
                            'Odpowiedź!',
                            'Nieprawidlowy login lub haslo',
                            'info'
                            
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "<?= base_url(); ?>/login";
                            }
                        });
                    token=data.token;
                    
                    }
                    else if(data.isBlock){
                        $("#userData").trigger('reset');
                        Swal.fire(
                            'Odpowiedź!',
                            '3 razy zle podales haslo. Twoje konto zostaje zablokowane na godzine',
                            'info'
                            
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "<?= base_url(); ?>/login";
                            }
                        });
                    token=data.token;
                    
                    }
                    else if(data.isExist){
                        $("#userData").trigger('reset');
                        Swal.fire(
                            'Odpowiedź!',
                            'Nie ma takiego uzytkownika w bazie danych',
                            'info'
                            
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "<?= base_url(); ?>/login";
                            }
                        });
                    token=data.token;
                    
                    }
                   
                    
                    console.log('przesłane');
            },
            error : function (data){
                console.log(data);
            }
        });
    }

  
   



    </script>

</body>

</html>
<!-- end document-->