<?php
$site_color             = "light-green";
$site_color_accent      = "lime darken-4";
$site_color_text        = "light-green-text";
$site_color_accent_text = "lime-text text-darken-4";
if ( isset( $_GET['msg'] ) ) {
	$modal      = true;
	$modal_text = $_GET['msg'];
} else {
	$modal = false;
}
if ( $modal ) {
	$toast = "M.toast({html: '$modal_text'})";
} else {
	$toast = "";
}

$img_avocado_50 = '<img src="icons/favicon.png" height="50" width="50"></img>';
$img_avocado_30 = '<img src="icons/favicon.png" height="30" width="30"></img>';

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title><?= $site_title ?> – avocado</title>

		<!--Favicons-->
		<link rel="shortcut icon" href="icons/favicon.ico">
		<link rel="icon" type="image/png" href="icons/favicon.png" sizes="48x48">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import custom.css-->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

    <!-- Import JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".button-collapse").sidenav();
            $('.materialboxed').materialbox();
            $('.tooltipped').tooltip();
			<?= $toast?>
        });

    </script>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
<!--Header section-->
<header>
	<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper <?= $site_color ?>">
            <div class="container">
                <a href="index.php" class="brand-logo"><?= $img_avocado_30 ?>aVOCAdo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Test" href="#!">
                            <i class="material-icons">question_answer</i>
                        </a>
                    </li>
                    <li>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Vokabeln"
                           href="vocabulary.php">
                            <i class="material-icons">list</i>
                        </a>
                    </li>
                    <li>
                        <a class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Einstellungen"
                           href="settings.php">
                            <i class="material-icons">settings</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	</div>
</header>
<!--main section-->
<main>
    <div class="container">
