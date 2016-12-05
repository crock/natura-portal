<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8"><!-- Always force latest IE rendering engine & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>CBS Portal 2</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/animations.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<div id="vote">    
	    <div id="votingmenu">
	        <ul>
	            <li><a href="#">Vote 1</a></li>
	
	            <li><a href="#">Vote 2</a></li>
	
	            <li><a href="#">Vote 3</a></li>
	
	            <li><a href="#">Vote 4</a></li>
	
	            <li><a href="#">Vote 5</a></li>
	
	            <li><a href="#">Vote 6</a></li>
	
	            <li><a href="#">Vote 7</a></li>
	
	            <li><a href="#">Vote 8</a></li>
	
	            <li><a href="#">Vote 9</a></li>
	
	            <li><a href="#">Vote 10</a></li>
	        </ul>
	    </div>
	    
	    <div id="vote_menu_tab" class="center-block">
	        Voting <i class="fa fa-caret-down"></i> Menu
	    </div>
	</div>

    <div class="container">

        <div id="header"><img src="images/logo.png" class="img-responsive center-block" alt="logo"></div>

        <nav class="row text-center">
            <div class="col-sm-3 feature">
                <a href="#"><img src="images/leaf.png" class="hatch" width="150" height="150" alt="social"></a>
                <p class="lead">Social</p>
            </div>

            <div class="col-sm-3 feature">
                <a href="#"><img src="images/flower.png" class="hatch" width="150" height="150" alt="shop"></a>

                <p class="lead">Shop</p>
            </div>

            <div class="col-sm-3 feature">
                <a href="#"><img src="images/bee.png" class="hatch" width="150" height="150" alt="forum"></a>

                <p class="lead">Forum</p>
            </div>

            <div class="col-sm-3 feature">
                <a href="#"><img src="images/snowman.png" class="hatch" width="150" height="150" alt="support"></a>

                <p class="lead">Support</p>
            </div>
        </nav>


		<div id="server" class="center-block text-center">
			<p class="lead">Server IP:</p>
			<br>
			<h4>play.example.com</h4>
			<br>
			<button class="btn btn-success" id="ip" data-toggle="tooltip" data-placement="bottom" data-clipboard-action="copy" data-clipboard-text="play.example.com">Copy to clipboard!</button>
		</div>

        <video autoplay loop>
			<source src="images/videobg.mp4" type="video/mp4">
		</video>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/clipboard.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
