<?php 
$nom = $_POST['nom'];
$prénom = $_POST['prénom'];
$matricule = $_POST['matricule'];
$date = $_POST['date-naissance'];
$département = $_POST['département'];
$fonction = $_POST['fonction'];
$salaire = $_POST['salaire'];
$photo = $_POST['photo'];
// echo "le ".$nom."et ".$prénom."et ".$matricule."et ".$date."et ".$département."et ".$fonction."et ".$salaire."et ".$photo;
include 'Connection-BD.php';
//$myRequet= "INSERT INTO `employé`( `nom`, `prénom`, `datenaissance`, `département`, ` salaire`, `fonction`, `photo`) VALUES('$matricule','$nom','$prénom','$date','$département','$salaire','$fonction','$photo')";
$myRequet= "INSERT INTO `employé`( `nom`, `prénom`) VALUES('bakali','rachid')" ;/*(nom =:nom,prénom=:prénom)";*/
// $query = mysqli_query($connectBd,$myRequet);
$insert = $db->prepare($myRequet);
$insert ->execute();//['nom' =>'bakali','prénom'=> 'aziz',]);
// if($)
// echo "<h1> Requete passez avec succes </h1> ";
// else
// echo "<h1> Requete non passez avec succes </h1> ";
?>