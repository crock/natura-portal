<?php include("configs/config.php"); ?>
<?php 

$f = file("configs/voting_sites.txt", FILE_IGNORE_NEW_LINES);
$a = file("configs/portal_links.txt", FILE_IGNORE_NEW_LINES);
$array = [];

foreach ($a as $item) {
    $separated = explode(",",$item);
    array_push($array, $separated);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><!-- Always force latest IE rendering engine & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- SEO Stuff -->
    <meta name="description" content="<?php print($seo_description); ?>">
    <meta name="keywords" content="<?php print($seo_keywords); ?>">
    <meta name="author" content="<?php print($seo_title); ?>">

    <!-- Other Stuff -->
    <meta name="theme-color" content="">
    <link rel="shortcut icon" href="" type="image/x-icon"/>

    <title><?php print($server_name); ?></title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/animations.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php if ($enable_ga) { ?>
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', '<?php print($ga_tracking_id); ?>', 'auto');
        ga('send', 'pageview');

        </script>
    <?php } ?>
</head>

<body>
	<div id="vote">    
	    <div id="votingmenu">
	        <ul>
                <?php for ( $i = 0 ; $i < count($f) ; $i++ ) { ?>
	                <li><a href="<?php echo "$f[$i]"; ?>"><div class="votebtn"></div></a></li>
                <?php } ?>
	        </ul>
	    </div>
	    
	    <div id="vote_menu_tab">
	        Voting ▾ Menu
	    </div>
	</div>

    <div class="container">

        <header>
            <img src="images/logo.png" class="logo" alt="logo">
        </header>

        <nav>
            <?php for ( $i = 0 ; $i < count($array) ; $i++ ) { ?>
            <div class="feature">
                <a href="<?php echo $array[$i][0] ?>">
                    <img src="images/<?php echo $array[$i][1] ?>.png" class="hatch" width="150" height="150" alt="<?php echo $array[$i][1] ?>">
                    <p><?php echo $array[$i][1] ?></p>
                </a>
            </div>
            <?php } ?>
        </nav>


		<div class="status">
			<p>Join <span class="pcount">17,171</span> player(s) at <span class="sip"><?php print($server_ip_address); ?></span></p>
            <input class="port" type="hidden" value="<?php print($server_port); ?>" />
			<button class="btn" id="ip" data-toggle="tooltip" data-placement="bottom" data-clipboard-action="copy" data-clipboard-text="<?php echo $server_ip_address . ":" . $server_port; ?>">Copy to clipboard!</button>
		</div>

        <video autoplay loop>
			<source src="images/videobg.mp4" type="video/mp4">
		</video>
    </div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/clipboard.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
