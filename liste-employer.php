<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    include "link.php";
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
 

    <div class="table-responsive ">
    <table class="table" style="color:#006586;">
    <?php 

    $hideThead=0;
   

    while($rows=mysqli_fetch_assoc($resultat))
    {
     $hideThead++;
     if($hideThead== 1){
      echo '<thead>
      <tr>
        <th scope="col" colspan="2" class="text-center">Image</th>
        <th scope="col" class="text-center">Matricule</th>
        <th scope="col" class="text-center">Nom</th>
        <th scope="col" class="text-center">Prénom</th>
        <th scope="col" class="text-center">Date de naissance</th>
        <th scope="col" class="text-center">Département</th>
        <th scope="col" class="text-center">Fonction</th>
        <th scope="col" class="text-center">Salaire</th>
        <th scope="col" class="text-center">Action</th> 
      </tr>
    </thead>';
   }
   $id=$rows['matricule'];
   
    echo '<tr>';
    echo '<td colspan="2"><img src="'.$rows['photo'].'" height="100" width="100" class="rounded mx-auto d-block"></td>';
    echo '<td class="text-center">'.$rows['matricule'].'</td>';
    echo '<td class="text-center">'.$rows['nom'].'</td>';
    echo '<td class="text-center">'.$rows['prénom'].'</td>';
    echo '<td class="text-center">'.$rows['datenaissance'].'</td>';
    echo '<td class="text-center">'.$rows['département'].'</td>';
    echo '<td class="text-center">'.$rows['fonction'].'</td>';
    echo '<td class="text-center">'.$rows['salaire'].'</td>';
    echo '<td colspan="2" class="text-center"><a class="btn btn-outline-success btn-sm me-1"  href="ajouter-employé.php?id='.$id.'">Modifier</a><a href="delete.php?id='.$id.'" type="button" onclick="alertDelete()" class="btn btn-outline-danger btn-sm">Supprimer</a></td>';
    echo '</tr>';
    }
    
    
    ?>
    </table>
<<<<<<< HEAD
    </div>
    <?php 
     if ($hideThead==0) { 
=======
    <?php 
     if ($hideHead==0) { 
>>>>>>> e0f90704ddc42c5cb752085ed3af3a9521466330
      echo "<script> 
      Swal.fire({
        icon: 'info',
        title: 'Oops...',
        text: 'Il n\'ya aucun employer pour le moment',
<<<<<<< HEAD
        footer: `<a href='ajouter-employé.php'>Ajoutez un employer</a>`,
=======
        footer: `<a href='ajouter-employé.php'>Ajoutez un employer</a>`
>>>>>>> e0f90704ddc42c5cb752085ed3af3a9521466330
       
      });
      
      </script>";
<<<<<<< HEAD
      
=======
>>>>>>> e0f90704ddc42c5cb752085ed3af3a9521466330
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