<?php
      if(!(isset($_SESSION['stat'])))
      {
        session_start();
        $_SESSION['stat'] = 'NULL';
      }
     else{
          session_destroy();
      }
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>ICyber</title>
  <link rel="stylesheet" type="text/css" href="Semantic/dist/semantic.css">
  <link rel="stylesheet" type="text/css" href="Semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="Semantic/dist/icon.css">
  <link rel="stylesheet" type="text/css" href="Semantic/dist/style.css">
  <link rel="stylesheet" type="text/css" href="Semantic/dist/checkbox.css">
  <link rel="stylesheet" type="text/css" href="Semantic/dist/popup.css">
  <link rel="stylesheet" type="text/css" href="Semantic/dist/jquery-ui.css">
  <link rel="stylesheet" type="text/css" href="Semantic/dist/style.css">

  <script src="Semantic/dist/jquery.js"></script>
  <script src="Semantic/dist/semantic.js"></script>
  <script src="Semantic/dist/semantic.min.js"></script>

  <script src="Semantic/dist/transition.js"></script>
  <script src="Semantic/dist/form.js"></script>
  <script src="Semantic/dist/jquery.min.js"></script>
  <script src="Semantic/dist/date.js"></script>
   <script src="Semantic/dist/checkbox.js"></script>
   <script src="Semantic/dist/popup.js"></script>
  <script src="Semantic/dist/jquery-1.12.4.js"></script>
  <script src="Semantic/dist/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  	<!--[if !IE]><!-->
	<style>
	
	/* 
	Max width before this PARTICULAR table gets nasty
	This query will take effect for any screen smaller than 760px
	and also iPads specifically.
	*/
	@media 
	only screen and (max-width: 760px),
	(min-device-width: 768px) and (max-device-width: 1024px)  {
	
		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr { 
			display: block; 
		}
		
		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr { 
			position: absolute;
			top: -9999px;
			left: -9999px;
		}
		
		tr { border: 1px solid #ccc; }
		
		td { 
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee; 
			position: relative;
			padding-left: 50%; 
		}
		
		td:before { 
			/* Now like a table header */
			position: absolute;
			/* Top/left values mimic padding */
			top: 6px;
			left: 6px;
			width: 45%; 
			padding-right: 10px; 
			white-space: nowrap;
		}
		
		/*
		Label the data
		*/
		td:nth-of-type(1):before { content: "Cours"; }
		td:nth-of-type(2):before { content: "Debut"; }
		td:nth-of-type(3):before { content: "Fin"; }
		td:nth-of-type(4):before { content: "Jours"; }
		td:nth-of-type(5):before { content: "Heures"; }
		td:nth-of-type(6):before { content: "Emplacement"; }
		td:nth-of-type(7):before { content: ""; }
	
	
	
	
	
	
	}
	
	/* Smartphones (portrait and landscape) ----------- */
	@media only screen
	and (min-device-width : 320px)
	and (max-device-width : 480px) {
		body { 
			padding: 0; 
			margin: 0; 
			width: 320px; }
		}
	
	/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
		body { 
			width: 495px; 
		}
	}
	
	</style>
	<!--<![endif]-->
<style type="text/css">a {text-decoration: none}</style>
</head>
<body id="home">
  <div class="ui masthead segment" style="background-color: darkslategrey">
  <div class="ui stackable two column grid" style="background-color: darkslategrey">
      <div class="column">
          <div class="ui large image">
            <img src="images/cyber1.jpg">
          </div>
      </div>
      <div class="column">
                <div class="ui compact menu" style="float:right">
  <a class="item" href="liste_cours.php"><i class="list icon"></i>List des cours</a>
  <a class="item" href="liste_CoursEleves.php"><i class="list icon"></i>Les Cours auxquels je suis inscrits</a>
  <?php
if($_SESSION['stat'] !='NULL'){
       ?>
  <a class="item" href="liste_eleves.php"><i class="list icon"></i>Liste des élèves inscrits </a>
  <a class="item" href="enregistrer_cours.php"><i class="add icon"></i>Enregistrer un nouveau cours</a>
  <a class="item" href="deconnexion.php"><i class="sign out icon"></i>Déconnexion</a>
  <?php }?>
</div>
      </div>
  </div>
  </div>