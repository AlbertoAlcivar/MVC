<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>
<div class="navbar-wrapper">
    <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Sistema Escolar</a>
                </div>
                <div class="navbar-collapse collapse">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container marketing">
    <div class="row">
        <div class="col-lg-12">
<html lang="en">
<?php
//require ("header.php");
@$msg = $_REQUEST['msg'];
?>
<body>
<div class="container">

    <form action=logg.php method=POST name=logg id=logg target='_self'>
    <div class="col-lg-4" class="form-signin" role="form">
        <?php echo "$msg"; ?>
        <h2 class="form-signin-heading">Por favor, inicia sesión</h2>
        <input type="text" class="form-control" placeholder="Usuario" name="user" required autofocus>
        <input type="password" class="form-control" placeholder="Password" name="psw" required>
<!--        <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
        </label>-->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div><!-- /container -->
</body>
</html><br>
</div></div></div>