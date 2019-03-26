<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <title>Document</title>
</head>
<body>
<div class="container-fluid">
      <form class="form-horizontal">
      <fieldset>

      <!-- Form Name -->
      <legend>Création Personnage</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nom">Nom Perso</label>  
        <div class="col-md-4">
        <input id="nom" name="nom" type="text" placeholder="Nom Perso" class="form-control input-md" required="">
          
        </div>
      </div>

      <!-- Points de caractéristiques -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="force">Points de caractéristiques (Max 100)</label>  
        <div class="col-md-4">
            <input type="range" name="point" id="point" min="0" max="100" step="1" value="100" class="form-control input-md" required="">
            <span class="pointCompteur"></span>
        </div>
      </div>



      <!-- Force -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="force">Force (Max 20)</label>  
        <div class="col-md-4">
            <input type="range" name="force" id="force" min="0" max="20" step="1" value="0" class="form-control input-md" required="">
            <span class="forceCompteur"></span>
        </div>
      </div>

      <!-- Magie -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="magie">Magie (Max 10)</label>  
        <div class="col-md-4">
            <input type="range" name="magie" id="magie" min="0" max="10" step="1" value="0" class="form-control input-md" required="">
            <span class="magieCompteur"></span>
        </div>
      </div>

      <!-- Armure -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="armure">Armure (Max 10)</label>  
        <div class="col-md-4">
            <input type="range" name="armure" id="armure" min="0" max="10" step="1" value="0" class="form-control input-md" required="">
            <span class="armureCompteur"></span>
        </div>
      </div>

      <!-- Soin -->
      <div class="form-group">
        <label class="col-md-4 control-label" for="soin">Soin (Max 10)</label>  
        <div class="col-md-4">
            <input type="range" name="soin" id="soin" min="0" max="10" step="1" value="0" class="form-control input-md" required="">
            <span class="soinCompteur"></span>
        </div>
      </div>

      <!-- Vie-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="vie">Vie</label>  
        <div class="col-md-4">
        <input type="number" name="vie" id="vie" min="80" max="110" step="5" class="form-control input-md" required="">
          
        </div>
      </div>

      


      

      </fieldset>
      </form>
<div>
<script src="js/script.js"></script>
</body>
</html>