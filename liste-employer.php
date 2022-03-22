<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    include "link.php";
    // include 'Connection-BD.php';
    // $requet="SELECT `matricule`, `nom`, `prénom`, `datenaissance`, `département`, `salaire`, `fonction`, `photo` FROM `employe`";
    // $query= mysqli_query($connectBd,$requet)
    function filterTable($query)
    {
    include 'Connection-BD.php';
    $filtrerTableau= mysqli_query($connectBd,$query);
    return $filtrerTableau;
   }


  if (isset($_POST['rechercher']))
  {
    $recherche= htmlspecialchars($_POST['valeurrechercher']);
    $query= "SELECT `matricule`, `nom`, `prénom`, `datenaissance`, `département`, `salaire`, `fonction`, `photo` FROM `employe` WHERE CONCAT(`matricule`,`nom`, `prénom`,`département`,`fonction`) LIKE'%".$recherche."%'";
    $resultat= filterTable($query);
  }
  else
  {
    $query= "SELECT `matricule`, `nom`, `prénom`, `datenaissance`, `département`, `salaire`, `fonction`, `photo` FROM `employe`";
    $resultat = filterTable($query);
  }
    ?>
    <title>Liste des employées</title>
</head>
<body>
    <?php include "header.php" ?>
    <!-- <img src="background-list-employer.jpg" class='img-fluid' id='background-table' alt=""> -->
 


    <table class="table" style="color:#006586;">
    <?php 

    $hideHead=0;
   

    while($rows=mysqli_fetch_assoc($resultat))
    {
     $hideHead++;
     if($hideHead== 1){
      echo '<thead>
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
    </thead>';
   }
   

    echo '<tr>';
    echo '<td colspan="2"><img src="<?php echo '.$rows['photo'].'?>"></td>';
    echo '<td>'.$rows['matricule'].'</td>';
    echo '<td>'.$rows['nom'].'</td>';
    echo '<td>'.$rows['prénom'].'</td>';
    echo '<td>'.$rows['datenaissance'].'</td>';
    echo '<td>'.$rows['département'].'</td>';
    echo '<td>'.$rows['fonction'].'</td>';
    echo '<td>'.$rows['salaire'].'</td>';
    echo '</tr>';
    }
    
    
    ?>
    </table>
    <?php 
     if ($hideHead==0) { 
      echo "<script> 
      Swal.fire({
        icon: 'info',
        title: 'Oops...',
        text: 'Il n\'ya aucun employer pour le moment',
        footer: `<a href='ajouter-employé.php'>Ajoutez un employer</a>`
       
      });
      
      </script>";
    }
    ?>
   
    
  <!-- <thead>
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
  </thead> -->
  <!-- <tbody>
      
    
  </tbody> -->

    
</body>
</html>