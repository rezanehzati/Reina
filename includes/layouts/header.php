<!DOCTYPE html>
<html lang="<?php echo $lang ?>">

<head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Reina Borde" content="Reina-Yasam">
    <meta name="Reina" content="Reina-Yasam">
    <base href="http://www.reina-yasam.com/php/" target="_blank">
    
    <title><?php if($lang == "tr") {
	    			echo "Reina Yaşam"; } else {
		    			echo "Reina Yasham";
	    			} 
	        ?></title>
	<link rel="shortcut icon" type="image/png" href="img/logo/fav.png"/>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/grand-hotel" type="text/css"/>
    <!-- Custom CSS -->
    <link href="css/<?php echo $slider ?>-slider.css" rel="stylesheet">
    <!-- maincss -->
	<link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>	
	
  <!-- Navigation -->
<?php if($slider == "full") { ?>  
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
	         <div class="brand-top">
                <a class="navbar-brand" title="Reina" href="#"><img alt="Reina" src="img/logo/logo1.jpg"/> </a>
                <a class="navbar-brand" title="Yaşam" href="#"><img alt="Yaşam" src="img/logo/yasam-logo1.png"/> </a>
                <ul class="lang">
                	<li><a href="en/" title="English" > <img alt="English" class="flag" src="img/flags/Eng.png"/> </a></li>
                	<li><a href="rus/" title="Russian" > <img alt="Russian" class="flag" src="img/flags/Rus.png"/> </a></li>                	
                	<li><a href="#" title="Turkçe" > <img alt="Turkçe" class="flag" src="img/flags/Tr.png"/> </a></li>
                </ul>
             </div>
                          <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php include("nav.php"); ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
        

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" ></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill"></div>
                <div class="carousel-caption">
                    <h2></h2>
                </div>
            </div>
            <svg class="arrows">
							<path class="a1" d="M0 0 L30 32 L60 0"></path>
							<path class="a2" d="M0 20 L30 52 L60 20"></path>
							<path class="a3" d="M0 40 L30 72 L60 40"></path>
			</svg>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
<?php } else {  ?>
	 <header>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
	         <div class="brand-top">
                <a class="navbar-brand" href="#"><img src="img/logo/logo1.jpg"/> </a>
                <a class="navbar-brand" href="#"><img src="img/logo/yasam-logo1.png"/> </a>
                <ul class="lang">
                	<li><a href="en/"> <img class="flag" src="img/flags/Eng.png"/> </a></li>
                	<li><a href="rus/"> <img class="flag" src="img/flags/Rus.png"/> </a></li>                	
                	<li><a href="#"> <img class="flag" src="img/flags/Tr.png"/> </a></li>
                </ul>
              </div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   <?php include("nav.php"); ?>                  
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
	</header>    
<?php } ?>