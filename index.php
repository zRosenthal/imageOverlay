<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">    <!-- Custom CSS -->
    <link href="css/freelance.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="js/colpick.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/colpick.css" type="text/css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">Grid Overlay</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#about">About</a>
                </li>
                <li class="page-scroll">
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
<!--                <img class="img-responsive" src="img/profile.png" alt="">-->
                  <div class="intro-text">
                    <span class="name">Grid Overlay</span>
                    <hr class="star-light">
                    <span class="skills">Perfect for knitting and croshaing</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Portfolio Grid Section -->
<section id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6  text-center">
                <h2>Upload an image</h2>
                <hr class="star-primary">
                <form enctype="multipart/form-data" action="imageProcessingScript.php" method="post">
                    <div class="form-group">
                        <label for="xLines">Number of vertical boxes</label>
                        <input type="number" name="x" class="form-control" id="xLines" placeholder="Number of vertical boxes">
                    </div>
                    <div class="form-group">
                        <label for="yLines">Number of horizontal boxes</label>
                        <input name="y" type="number" class="form-control" id="yLines" placeholder="Number of horizontal boxes">
                    </div>
                    <div class="form-group">
                        <label for="yLines">Thickness of grid lines (default is 5)</label>
                        <input name="thickness" type="number" class="form-control" id="thickness" placeholder="5">
                    </div>
                    <div class="form-group">
                        <label for="file">File input</label>
                        <input type="file" id="file" name="uploaded_file">
                        <p class="help-block">Please select a file to grid.</p>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2 class="text-center">Instructions</h2>
                        <hr class="star-primary">

                    </div>
                </div>
            </div>
        </div>
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Contact</h3>
                    <p><a href="mailto:rosent76@egr.msu.edu">Email!</a> </p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Created by Zachary Rosenthal</h3>
                    <p>Find me on <a href="https://www.linkedin.com/in/zrosenthal" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Your Website 2014
                </div>
            </div>
        </div>
    </div>
</footer>



</body>


</html>