<!doctype html>
<html lang="en" ng-app="app" ng-controller="MainCtrl as main">
<head>
<meta charset="UTF-8">
<meta name="description" content="SoccerGoal to Manage and notify players">
<meta name="keywords" content="Soccer, Management, Tools Easy, AppRemindring, Registration, Innovation">
<meta name="author" content="Ninjakh">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- SITE TITLE -->
<title>Soccergoal </title>

<!-- =========================
      FAV AND TOUCH ICONS
============================== -->
<link rel="icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

<!-- =========================
     STYLESHEETS
============================== -->
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- FONT ICONS -->
<!-- IonIcons -->
<link rel="stylesheet" href="assets/ionicons/css/ionicons.css">

<!-- Font Awesome
<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
-->

<!-- Elegant Icons -->
<link rel="stylesheet" href="assets/elegant-icons/style.css">
<!--[if lte IE 7]><script src="assets/elegant-icons/lte-ie7.js"></script><![endif]-->



<!-- CAROUSEL AND LIGHTBOX -->
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/nivo-lightbox.css">
<link rel="stylesheet" href="css/nivo_themes/default/default.css">

<!-- COLORS -->
<!-- <link rel="stylesheet" href="css/colors/blue.css"> --> <!-- DEFAULT COLOR/ CURRENTLY USING -->
<!-- <link rel="stylesheet" href="css/colors/red.css"> -->
<link rel="stylesheet" href="css/colors/green.css">
<!-- <link rel="stylesheet" href="css/colors/purple.css"> -->
<!-- <link rel="stylesheet" href="css/colors/orange.css"> -->
<!-- <link rel="stylesheet" href="css/colors/blue-munsell.css"> -->
<!-- <link rel="stylesheet" href="css/colors/slate.css"> -->
<!-- <link rel="stylesheet" href="css/colors/yellow.css"> -->

<!-- CUSTOM STYLESHEETS -->
<link rel="stylesheet" href="css/styles.css">

<!-- RESPONSIVE FIXES -->
<link rel="stylesheet" href="css/responsive.css">

<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
<![endif]-->

<!-- load angular -->
<!-- <script src="//code.angularjs.org/1.4.0/angular.js"></script> -->
<script src="js/angular.min.js"></script>
<!-- load ngmessages -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular-messages.js"></script> -->
<script src="js/angular-messages.min.js"></script>
<!--<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular-animate.js"></script> -->
<!-- <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-1.1.2.js"></script> -->
<!-- load our custom app -->
<script src="js/app.js"></script>
<!-- Google Analytics -->
<script src="js/google_analytics.js"></script>
<!-- <script src="/bower_components/angulartics/dist/angulartics.min.js"></script> -->
<!-- <script src="/bower_components/angulartics-google-analytics/dist/angulartics-google-analytics.min.js"></script> -->

</head>

<body>
<!-- =========================
     PRE LOADER
============================== -->
<div class="preloader">
  <div class="status">&nbsp;</div>
</div>

<!-- =========================
     HEADER
============================== -->
<header id="home">

<!-- COLOR OVER IMAGE -->
<div class="color-overlay">

	<div class="navigation-header" id="nav">

		<!-- ONLY LOGO ON HEADER -->
		<div class="navbar non-sticky">

			<div class="container">

				<div class="navbar-header">
					<img src="images/logo.png" alt="">
				</div>

				<ul class="nav navbar-nav navbar-right social-navigation hidden-xs">

				</ul>
			</div>
			<!-- /END CONTAINER -->

		</div>
		<!-- /END ONLY LOGO ON HEADER -->

	</div>
  <style>
    #MainContainer {
      margin-top: -51px;
    }
    #nav { 
     	margin-top : -25px;
    }
  </style>
	<!-- HEADING, FEATURES AND REGISTRATION FORM CONTAINER -->
	<div class="container" id="MainContainer">

		<div class="row">

			<!-- LEFT - HEADING AND TEXTS -->
			<div class="col-md-7 col-sm-7 intro-section">

				<h1 class="intro text-left">
				<strong>SoccerGoal</strong>, planifiez vos tournois de  <strong>football</strong>
				</h1>

				<ul class="feature-list-1">

					<!-- FEATURE ROW -->
					<li>
					<div class="icon-container pull-left">
						<span class="icon_check"></span>
					</div>
					<p class="text-left">
						Créez vos <strong>équipes</strong>.
					</p>
					</li>

					<!-- FEATURE ROW -->
					<li>
					<div class="icon-container pull-left">
						<span class="icon_check"></span>
					</div>
					<p class="text-left">
						Gardez l'<strong>historique</strong> de vos scores.
					</p>
					</li>

					<!-- FEATURE ROW -->
					<li>
					<div class="icon-container pull-left">
						<span class="icon_check"></span>
					</div>
					<p class="text-left">
						Recevez des  <strong>notifications</strong> avant les <strong>matchs</strong>.
					</p>
					</li>
				</ul>

			</div>

			<!-- RIGHT - REGISTRATION FORM -->

			<div class="col-md-5 col-sm-5">

				<div class="vertical-registration-form">
					<div class="colored-line">
					</div>
					<h4 style="color:white;">Essayez le compte premium !</h4>
					<h5 style="color:white;">Gratuit pour les 1000 premiers utilisateurs</h5>
					<form class="registration-form" id="register" role="form" method="post" name="personForm" ng-submit="submitForm()">
			            <input class="form-control input-box" id="nom" type="text" name="nom"
			              ng-model="person.nom" ng-minlength="3" ng-maxlength="100" placeholder=" Votre prénom" required>
			              <div class="help-block" ng-messages="personForm.nom.$error" ng-show="personForm.nom.$touched">
			                <p ng-message="required">Le champ est requis</p>
			                <p ng-message="minlength">This field is too short</p>
			                <p ng-message="maxlength">This field is too long</p>
			              </div>
			            <input class="form-control input-box" id="prenom" type="text" name="prenom"
			              ng-model="person.prenom" ng-minlength="3" ng-maxlength="100" placeholder="Votre nom " required>
			              <div class="help-block" ng-messages="personForm.prenom.$error" ng-show="personForm.prenom.$touched">
			                <p ng-message="required">This field is required</p>
			                <p ng-message="minlength">This field is too short</p>
			                <p ng-message="maxlength">This field is too long</p>
			              </div>
			            <input class="form-control input-box" id="email" type="email" name="email"
			              ng-model="person.email" ng-minlength="8" ng-maxlength="100" placeholder="Votre Email" required>
			              <div class="help-block" ng-messages="personForm.email.$error" ng-show="personForm.email.$touched">
			                <p ng-message="required">This field is required</p>
			                <p ng-message="minlength">This field is too short</p>
			                <p ng-message="maxlength">This field is too long</p>
			                <p ng-message="email">This needs to be a valid email</p>
			              </div>
			            <input class="form-control input-box" id="phone-number" type="text" name="tel"
			            ng-model="person.tel" ng-minlength="10" ng-maxlength="14" placeholder="Votre téléphone" required>
			            <div class="help-block" ng-messages="personForm.tel.$error" ng-show="personForm.tel.$touched">
			              <p ng-message="required">This field is required</p>
			              <p ng-message="minlength">This field is too short</p>
			              <p ng-message="maxlength">This field is too long</p>
			            </div>
			            <button class="btn standard-button standard-button" style="background: #09D176;" type="submit" id="submit" name="submit">S'inscrire</button>
			            <p><strong>{{message}}</strong></p>
					</form>
				</div>
			</div>
			<!-- /END - REGISTRATION FORM -->
		</div>

	</div>
	<!-- /END HEADING, FEATURES AND REGISTRATION FORM CONTAINER -->

</div>

</header>

<body>
  <!-- MODAL START-->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Information</h4>
        </div>
        <div class="modal-body alert-success">
          <p><strong>{{message}}</strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Fermer</button>

        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!-- MODAL END-->

</body>
<!-- =========================
     SECTION 10 - FOOTER
============================== -->
<footer class="bgcolor-2">
<div class="container">

	<div class="footer-logo">
		<img src="images/logo-dark.png" alt="">
	</div>

	<div class="copyright">
		 ©2016 SoccerGoal LLC.
	</div>

</div>
</footer>


<!-- =========================
     SCRIPTS
============================== -->
<script src="js/jquery.min.js"></script>

<script>
/* =================================
   LOADER
=================================== */
// makes sure the whole site is loaded
jQuery(window).load(function() {
	"use strict";
        // will first fade out the loading animation
	jQuery(".status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery(".preloader").delay(1000).fadeOut("slow");
})

</script>
<script src="js/bootstrap.min.js"></script>
<script src="js/retina-1.1.0.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.localScroll.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/simple-expand.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.fitvids.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
