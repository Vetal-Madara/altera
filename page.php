<?php

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Responsive website template for documentations</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">
    <link href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="css/ctx.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link id="theme-style" rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="google-site-verification" content="ZVO1jNuqz2NYuC-CbObqqoehawMyNjgo3hJe64Qs4qA" />
</head>

<body class="landing-page">
	<header class="header">
            <div class="wrapper">
                <div class="center">
                    <?php
                        if( isset($utm_term) ) {
                            if( '{treatmentinkherson}' == $utm_term ) {
                                echo '<a href=\'javascript: document.location.href = "https://altera-med.com";\' class="site-descriptor"><img src="./img/2-2.png" alt="">
                                <!-- <span>Лечение наркомании в Херсоне</span> -->
                                </a>';
                                                            }

                            else if( '{treatmentinmykolayiv}' == $utm_term ){
                                echo '<a href=\'javascript: document.location.href = "https://altera-med.com";\' class="site-descriptor"><img src="./img/1.png" alt="">
                    <!-- <span>Лечение наркомании в Херсоне</span> -->
                </a>';
                            }  

                            else if( '{rehabilitationcenterinodessa}' == $utm_term ){
                                echo '<a href=\'javascript: document.location.href = "https://altera-med.com";\' class="site-descriptor"><img src="./img/4.png" alt="">
                                    <!-- <span>Лечение наркомании в Одессе</span> -->
                </a>';
                            }
                        }else{
                            echo '<a href=\'javascript: document.location.href = "https://altera-med.com";\' class="site-descriptor"><img class="logo-default" src="https://altera-med.com/images/logo-altera.png" alt="">
                    <!-- <span>Лечение наркомании в Херсоне</span> -->
                </a>';
                        }

                    ?>
                    <!-- <a href='javascript: document.location.href = "http://altera-med.com";' class="site-descriptor"><img src="http://altera-med.com/images/logo-altera.png" alt=""> -->
                    <!-- <a href='javascript: document.location.href = "http://altera-med.com";' class="site-descriptor"><img src="./img/2-2.png" alt=""> -->
                    <!-- <span>Лечение наркомании в Херсоне</span> -->
                </a>
                </div>

                <div class="right">
                    <a href="tel:+380977414447"><i class="fa fa-phone"></i>+38(097)741-44-47</a>

                </div>
                <div class="header-preview__btn-wrap">
                    <a class="header-preview__btn" data-toggle="modal" data-target="#colToAction">КОНСУЛЬТАЦИЯ ВРАЧА</a>
                </div>



            </div>
        </header>
	<div class="main thanks">
		<div class="container">
			<h1 class="thanks__title">Спасибо!</h1>
			<div class="thanks__text-wrap">
				<p class="thanks__text">
					Мы свяжемся с вами в ближайшее время.
					А пока познакомьтесь с нами поближе...
				</p>
			</div>
		</div>
	</div>
	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="libs/jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="libs/inputmask/input-mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Main Javascript -->

    <script type="text/javascript" src="js/common.js"></script>
	<script>
	setTimeout(function() {
		window.location.href = 'https://altera-med.com/';
	}, 2000)
</script>
</body>

