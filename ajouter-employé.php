
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
<img src="background-ajout-employé.png" class='img-fluid' style="width: 100%;" id='background-ajout-employé' alt="">
<?php 
if(isset($_GET['id'])){
  include 'Connection-BD.php';
    $id=$_GET['id'];
    $requet= "SELECT * FROM `employe` WHERE matricule ='$id'";
    $query= mysqli_query($connectBd,$requet);
    $rows = mysqli_fetch_assoc($query);
    $nom = $rows['nom'];
$prénom = $rows['prénom'];
$matricule = $rows['matricule'];
$date = $rows['datenaissance'];
$département = $rows['département'];
$fonction = $rows['fonction'];
$salaire = $rows['salaire'];
$photo = $rows['photo'];
}
?>
<main class="container">
  
<form method='POST' action="géneration-form.php?<?php if(isset($_GET['id'])) echo 'id=update' ?>" class="row g-3">
<input type="hidden" name="id" value ="<?php echo $_GET['id']; ?>">
  <div class="col-md-6">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" name="nom" class="form-control" id="nom" placeholder="Nom" value="<?php if (isset($_GET['id'])) echo $nom; ?>" required>
  </div>
  <div class="col-md-6">
    <label for="Prénom" class="form-label">Prénom</label>
    <input type="text" name="prénom" class="form-control" id="Prénom" placeholder="Prénom"value="<?php if (isset($_GET['id'])) echo $prénom; ?>" required>
  </div>
  <div class="col-md-6">
    <label for="Matricule" class="form-label">Matricule</label>
    <input type="text" name="matricule"  class="form-control" id="Matricule" maxlength="4" placeholder="Matricule d'employer" value="<?php if (isset($_GET['id'])) echo $matricule; ?>" required>
  </div>
  <div class="col-md-6">
    <label for="Date-naissance" class="form-label">Date de naissance</label>
    <input type="date" name="date-naissance" class="form-control" id="Date-naissance" placeholder="date de naissance" value="<?php if (isset($_GET['id'])) echo $date; ?>" required>
  </div>
  <div class="col-md-6">
    <label for="Département" class="form-label">Département</label>
    <input type="text" name="département" class="form-control" id="Département" placeholder="Département" value="<?php if (isset($_GET['id'])) echo $département; ?>" required>
  </div>
  <div class="col-md-4">
    <label for="fonction" class="form-label">Fonction</label>
    <input type="text" name="fonction" class="form-control" id="fonction" placeholder="Fonction" value="<?php if (isset($_GET['id'])) echo $fonction; ?>" required>
  
  </div>
  <div class="col-md-2">
    <label for="Salaire" class="form-label">Salaire</label>
    <input type="number" name="salaire"  class="form-control" min="10" step="10" id="Salaire" placeholder="Salaire" value="<?php if (isset($_GET['id'])) echo $salaire; ?>" required>
  </div>
  <div class="col-12">
   
    <label class="form-label" for="gridCheck">
        insérer une photo
      </label>
      <input class="form-control" name="photo" type="url" id="gridCheck" value="<?php if (isset($_GET['id'])) echo $photo; ?>" required>
    
  </div>
  <div class="col-12">
    <button type="submit" name='btn' class="btn btn-primary"><?php if(isset($_GET['id']))
   echo "Modifier l'employé"; 
    else 
     echo "Ajouter un employé"?></button>
  </div>
</form>

</main>
</body>

</html>

