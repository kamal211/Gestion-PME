<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "link.php"?>
    <title>Gestion PME</title>
</head>
<body>
<?php include "header.php"?>
<img src="background-ajout-employé.png" class='img-fluid' id='background-ajout-employé' alt="">
<main class="container">
<form method='POST' action="géneration-form.php" class="row g-3">
  <div class="col-md-6">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" name="nom" class="form-control" id="nom">
  </div>
  <div class="col-md-6">
    <label for="Prénom" class="form-label">Prénom</label>
    <input type="text" name="prénom" class="form-control" id="Prénom">
  </div>
  <div class="col-md-6">
    <label for="Matricule" class="form-label">Matricule</label>
    <input type="text" name="matricule" class="form-control" id="Matricule" placeholder="">
  </div>
  <div class="col-md-6">
    <label for="Date-naissance" class="form-label">Date de naissance</label>
    <input type="date" name="date-naissance" class="form-control" id="Date-naissance" placeholder="">
  </div>
  <div class="col-md-6">
    <label for="Département" class="form-label">Département</label>
    <input type="text" name="département" class="form-control" id="Département">
  </div>
  <div class="col-md-4">
    <label for="fonction" class="form-label">Fonction</label>
    <input type="text" name="fonction" class="form-control" id="fonction">
  
  </div>
  <div class="col-md-2">
    <label for="Salaire" class="form-label">Salaire</label>
    <input type="number" name="salaire"  class="form-control" id="Salaire">
  </div>
  <div class="col-12">
   
    <label class="form-label" for="gridCheck">
        insérer une photo
      </label>
      <input class="form-control" name="photo" type="file" id="gridCheck">
    
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Ajouter un employé</button>
  </div>
</form>
</main>
</body>
</html>

