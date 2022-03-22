
<?php 
include "link.php";
include 'Connection-BD.php';

if (isset($_GET['id'])){
  $nom = $_POST['nom'];
$prénom = $_POST['prénom'];
$matricule = $_POST['matricule'];
$date = $_POST['date-naissance'];
$département = $_POST['département'];
$fonction = $_POST['fonction'];
$salaire = $_POST['salaire'];
$photo = $_POST['photo'];

  $id=$_POST['id'];
  $requetUpdate= "UPDATE `employe` SET `matricule`=[$matricule],`nom`=[$nom],`prénom`=[$prénom],`datenaissance`=[$date],`département`=[$département],`salaire`=[$salaire],`fonction`=[$fonction],`photo`=[$photo] WHERE matricule ='$id'";
  $queryUp = mysqli_query($connectBd,$requetUpdate);
  if(isset($queryUp))
  echo 'succesfull';
  else  echo 'unsuccesfull'; 
}
else{
$reload=1;
$nom = $_POST['nom'];
$prénom = $_POST['prénom'];
$matricule = $_POST['matricule'];
$date = $_POST['date-naissance'];
$département = $_POST['département'];
$fonction = $_POST['fonction'];
$salaire = $_POST['salaire'];
$photo = $_POST['photo'];

// echo "le ".$nom."et ".$prénom."et ".$matricule."et ".$date."et ".$département."et ".$fonction."et ".$salaire."et ".$photo;

$myRequet= "INSERT INTO `employe`(`matricule`,`nom`, `prénom`, `datenaissance`, `département`, `salaire`, `fonction`, `photo`) VALUES('$matricule','$nom','$prénom','$date','$département','$salaire','$fonction','$photo')";
// $myRequet= "INSERT INTO employé( `nom`, `prénom`) VALUES('bakali','rachid')" ;/*(nom =:nom,prénom=:prénom)";*/
$query = mysqli_query($connectBd,$myRequet);

// $insert = $db->prepare($myRequet);
// $insert ->execute(['nom' =>'bakali','prénom'=> 'aziz']);
if($query == true && $reload == 1)
{
    include "ajouter-employé.php";
    
   
    $reload = 2;
}
else
include "ajouter-employé.php";
echo "<body><script> 
Swal.fire({
  icon: 'error',
  title: 'Echec d\'ajout',
  text: 'la matricule que vous avez saisie est déja existe',
  footer: `<a href='liste-employer.php'>Vérifier la liste des employer</a>`
 
});

</script></body>";

if($reload== 2)
{
    echo "<body><script> 
    Swal.fire({
      icon: 'success',
      title: 'Merci!',
      text: 'L\'employé a été ajouté avec succès',
      footer: `<a href='liste-employer.php'>Vérifier la liste des employer</a>`
     
    });
    
    </script></body>";
    

}
}
?>