<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SSE Genève - Portail AG2021 - Connexion</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>

<body>
    <header class="d-block masthead" style="background: url(&quot;assets/img/about-bg.jpg&quot;);height: 300px;">
        <div class="container" style="height: 300px;">
            <div class="row" style="height: 100px;">
                <div class="col" style="height: 70px;margin-top: 21px;"><a class="navbar-brand" href="index.php" style="height: 80px;"><img src="assets/img/logo%20SSE-negatif.png" style="height: 53px;"></a></div>
            </div>
            <div class="row" style="height: 200px;">
                <div class="col-md-10 col-lg-8 mx-auto" style="height: 200px;margin: 0;margin-top: 0;margin-right: 0;margin-bottom: 0;margin-left: 0;">
                    <div class="site-heading" style="height: 200px;padding: 0px;">
                        <h1 style="font-size: 44px;height: 78px;margin: 0;margin-top: 0;margin-right: 0;margin-bottom: 0;margin-left: 0;width: 100%;">Assemblée générale 2021</h1>
                        <h6 class="display-4" style="font-size: 30px;height: 78px;margin: 0;margin-top: 14px;margin-right: 0;margin-bottom: 0;margin-left: 0;width: 100%;">Vote par correspondance</h6>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col" style="margin-bottom: 21px;">
                <h4 class="display-4 text-center" style="font-size: 38px;">Bienvenue</h4>
            </div>
        </div>
        <div class="row">
            <div class="col" style="margin-bottom: 21px;">
                <h4 class="display-4 text-center" style="font-size: 26px;">Saisissez votre numéro de carte de vote à 8 caractères</h4>
            </div>
        </div>
        <div class="row">
            <div class="col" style="margin-bottom: 21px;">
                <form method="get" action="index.php" autocomplete="off">
				<?php
					if(isset($_GET['back'])){
				?>
                    <div class="form-group" style="width: 200px;margin-right: auto;margin-left: auto;">
                        <div class="alert alert-danger" role="alert" style="font-family: 'Open Sans', sans-serif;"><span><strong>Login incorrect</strong></span></div>
                    </div>
				<?php
					}
				?>
                    <div class="form-group" style="width: 200px;margin-right: auto;margin-left: auto;"><input name="cardID" class="form-control" required minlength="8" maxlength="9" type="text" placeholder="&bull;&bull;&bull;&bull;-&bull;&bull;&bull;&bull;" style="width: 187px;margin-left: auto;margin-right: auto;font-family: 'Open Sans', sans-serif;font-size: 24px;text-align: center;"></div>
                    <div class="form-group" style="width: 131px;margin-right: auto;margin-left: auto;"><input class="btn btn-secondary" type="submit" style="width: 100%;" value="ACCÉDER"></div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="col-md-10 col-lg-8 mx-auto">
            <p class="text-muted copyright" style="font-family: 'Open Sans', sans-serif;">©&nbsp;SG/SSE 2021</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>