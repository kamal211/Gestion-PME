<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require "link.php" 
    include 'Connection-BD.php';
    $requet="SELECT `matricule`, `nom`, `prénom`, `datenaissance`, `département`, `salaire`, `fonction`, `photo` FROM `employe`";
    $query= mysqli_query($connectBd,$requet)
    ?>
    <title>Liste des employées</title>
</head>
<body>
    <?php include "header.php" ?>
    <!-- <img src="background-list-employer.jpg" class='img-fluid' id='background-table' alt=""> -->
    <table class="table" style="color:#006586;">
  <thead>
    <tr>
      <th scope="col" colspan="2">Image</th>
      <th scope="col">Matricule</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Département</th>
      <th scope="col">Fonction</th>
      <th scope="col">Salaire</th>
    </tr>
  </thead>
  <tbody>
      <?php 
    
  </tbody>
</table>
    
</body>
</html>