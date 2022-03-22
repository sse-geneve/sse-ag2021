<?php



require("users.php");

if(!isset($_GET['cardID']))
	header("location:login.php");

else{
	
	$cardID = strtoupper(preg_replace("/[^a-zA-Z0-9]+/", "", $_GET['cardID']));

	
	if(!isset($users[$cardID]))
	header("location:login.php?back");


else
	$loggedInUser = $users[$cardID];


}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SSE Genève - Portail AG2021</title>
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
                <h4 class="display-4 text-center" style="font-size: 38px;">Bienvenue <?= $loggedInUser['companyName']; ?></h4>
            </div>
        </div>
        <div class="row">
		
		<?php
		
			if(time() < 1624269601){
		
		?>
            <div class="col-4" style="font-family: 'Open Sans', sans-serif;">
                <p class="text-center" style="margin: 0;font-size: 44px;height: 40px;"><i class="fa fa-question-circle-o" style="width: 50px;color: var(--blue);"></i></p>
                <p style="font-family: 'Open Sans', sans-serif;">Les questions au Comité peuvent être posées en ligne jusqu'au 21.06.2021 12h00.<br></p><a class="btn btn-primary" role="button" style="width: 100%;font-family: 'Open Sans', sans-serif;" href="https://forms.office.com/r/NGdsXW2uAz" target="_blank">Poser une question</a>
            </div> 
			
			
			
			<?php
			}
			
			else{
			?>
			
			
			<div class="col-4" style="font-family: 'Open Sans', sans-serif;">
                <p class="text-center" style="margin: 0;font-size: 44px;height: 40px;"><i class="fa fa-question-circle-o" style="width: 50px;color: var(--gray-dark);"></i></p>
                <p style="font-family: 'Open Sans', sans-serif;">Le délai de dépôt des questions est échu.&nbsp;<br></p>
            </div>
			
			<?php
			
			}
			
			?>
			
			<?php
		
			if(time() < 1623320001){
		
			?>
			
            <div class="col-4" style="font-family: 'Open Sans', sans-serif;">
                <p class="text-center" style="margin: 0;font-size: 44px;height: 40px;"><i class="fa fa-file-text" style="width: 50px;color: var(--gray);"></i></p>
                <p style="font-family: 'Open Sans', sans-serif;">L'ordre du jour, le rapport annuel 2020 et le projet de modification des statuts seront disponibles sur cette page dès le 10.06.2021</p>
            </div> 
			
				
			<?php
			}
			
			else{
			?>
			
			
			
			<div class="col-4" style="font-family: 'Open Sans', sans-serif;">
                <p class="text-center" style="margin: 0;font-size: 44px;height: 40px;"><i class="fa fa-file-text" style="width: 50px;color: var(--blue);"></i></p>
                <p style="font-family: 'Open Sans', sans-serif;">L'ordre du jour, le rapport annuel 2020 et le projet de modification des statuts sont disponibles.</p>
				
				
				<a class="btn btn-primary" type="button" style="width: 100%;font-family: 'Open Sans', sans-serif;" ;" href="getDocument.php?docID=20210610_SGSSE_AG225_ODJ&cardID=<?= $cardID; ?>" target="_blank">Ordre du jour de l'Assemblée générale par correspondance</a><br /><br />
				
				<a class="btn btn-primary" type="button" style="width: 100%;font-family: 'Open Sans', sans-serif;" ;" href="documents/20210610_SGSSE_RA2020.pdf?cardID=<?= $cardID; ?>" target="_blank">Rapport annuel 2020</a><br /><br />
				
				<a class="btn btn-primary" type="button" style="width: 100%;font-family: 'Open Sans', sans-serif;" ;" href="getDocument.php?docID=20210610_SGSSE_PVAG_20200617&cardID=<?= $cardID; ?>" target="_blank">Procès-verbal de l'Assemblée générale du 17 juin 2020</a><br /><br />
				
				
				<a class="btn btn-primary" type="button" style="margin-bottom:3px;width: 100%;font-family: 'Open Sans', sans-serif;" ;" href="getDocument.php?docID=20210610_StatutsSGSSE_modification&cardID=<?= $cardID; ?>" target="_blank">Projet de modification des Statuts (soumis au vote)</a><br />
				<a class="btn btn-primary" type="button" style="width: 100%;font-family: 'Open Sans', sans-serif;" ;" href="getDocument.php?docID=00000000_PROJET_StatutsSGSSE_consolide&cardID=<?= $cardID; ?>" target="_blank">Projet de statuts consolidés (document pour information, non soumis au vote)</a><br /><br />
				<?php 
				
				/*<a class="btn btn-primary" type="button" style="margin-top: 18px;width: 100%;font-family: 'Open Sans', sans-serif;">Télécharger le rapport d'activité 2020</a>
				<a class="btn btn-primary" type="button" style="margin-top: 18px;width: 100%;font-family: 'Open Sans', sans-serif;">Télécharger le projet de modification des statuts</a>*/
				
				?>
            </div>
			
				<?php
			
			}
			
			?>
			
			<?php
		
			if(time() < 1623320001){
		
			?>
			
            <div class="col-4" style="font-family: 'Open Sans', sans-serif;">
                <p class="text-center" style="margin: 0;font-size: 44px;height: 40px;"><i class="fa fa-video-camera" style="width: 50px;color: var(--gray);"></i></p>
                <p>Le lien d'accès au webinaire Zoom sera publié sur cette page dès le 10.06.2021</p>
					
					</p>
					
            </div>
						
			<?php
			}
			
			else{
			?>
			
            <div class="col-4" style="font-family: 'Open Sans', sans-serif;">
                <p class="text-center" style="margin: 0;font-size: 44px;height: 40px;"><i class="fa fa-video-camera" style="width: 50px;color: var(--blue);"></i></p>
                <p class="lead text-center"><b>Vidéoconférence : 23 juin 2021, 16h30</b></a></p>
                <p class="lead text-center">Accès webinaire Zoom : <a href="https://zoom.us/j/99389828608?pwd=RmcyVzZ2T0NiZjJUR0F2YWFUdHgyZz09" target="_new">cliquez ici</b></a></p>
                <p class="lead">ID : 993 8982 8608<br>Mot de passe : 141201</p>
                <p class="lead text-left">Accès par téléphone : 022 591 00 05 <br />(depuis la France : +33 1 70 37 97 29)</p>
                <p class="lead text-left"><b>Fonctionnement du webinaire</b> : Votre caméra et votre micro seront désactivés durant la réunion. Vous ne pourrez pas voir les autres participants et les autres participants ne pourront pas vour voir. Vous pourrez poser des questions par écrit au moyen du bouton "Q&amp;R" au bas de l'écran.</p>
        
            </div>
			
			
				<?php
			
			}
			
			?>
			
        </div>
        <div class="row">
            <div class="col" style="margin-top: 35px;">
                <h1 style="font-size: 26px;">Calendrier</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <?php
				
				echo (time() < 1623320001 ? '<p><i class="far fa-hourglass" style="font-size: 39px;"></i></p>' : '<p><i class="far fa-check-circle" style="font-size: 39px;color:green;"></i></p>');
				
				?>
            </div>
            <div class="col-3">
                <p style="font-family: 'Open Sans', sans-serif;">10.06.2021</p>
            </div>
            <div class="col-8">
                <p style="font-family: 'Open Sans', sans-serif;">Publication des documents</p>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
       <?php
				
				echo (time() < 1624269601 ? '<p><i class="far fa-hourglass" style="font-size: 39px;"></i></p>' : '<p><i class="far fa-check-circle" style="font-size: 39px;color:green;"></i></p>');
				
				?>            </div>
            <div class="col-3">
                <p style="font-family: 'Open Sans', sans-serif;">21.06.2021<br>12h00</p>
            </div>
            <div class="col-8">
                <p style="font-family: 'Open Sans', sans-serif;">Délai pour le dépôt des questions écrites</p>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
  <?php
				
				echo (time() < 1624464001 ? '<p><i class="far fa-hourglass" style="font-size: 39px;"></i></p>' : '<p><i class="far fa-check-circle" style="font-size: 39px;color:green;"></i></p>');
				
				?>   
				</div>
            <div class="col-3">
                <p style="font-family: 'Open Sans', sans-serif;">23.06.2021<br>16h30</p>
            </div>
            <div class="col-8">
                <p style="font-family: 'Open Sans', sans-serif;">Webinaire Zoom - Présentation des points à l'ordre du jour et réponse aux questions</p>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
  <?php
				
				echo (time() < 1624658399 ? '<p><i class="far fa-hourglass" style="font-size: 39px;"></i></p>' : '<p><i class="far fa-check-circle" style="font-size: 39px;color:green;"></i></p>');
				
				?>               </div>
            <div class="col-3">
                <p style="font-family: 'Open Sans', sans-serif;">25.06.2021</p>
            </div>
            <div class="col-8">
                <p style="font-family: 'Open Sans', sans-serif;">Délai pour l'envoi des bulletins de vote</p>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
  <?php
				
				echo (time() < 1625090820 ? '<p><i class="far fa-hourglass" style="font-size: 39px;"></i></p>' : '<p><i class="far fa-check-circle" style="font-size: 39px;color:green;"></i></p>');
				
				?>               </div>
            <div class="col-3">
                <p style="font-family: 'Open Sans', sans-serif;">30.06.2021</p>
            </div>
            <div class="col-8">
                <p style="font-family: 'Open Sans', sans-serif;">Dépouillement des votes et communication des résultats aux membres</p>
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