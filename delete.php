  
<?php 

  include 'Connection-BD.php';
  include "link.php";

  // if(isset($_GET['id'])){
  //  include 'liste-employer.php';
  //   echo 
  
  //   "<script> 
  //   Swal.fire({
  //     title: 'Are you sure?',
  //     text: 'You won\'t be able to revert this!',
  //     icon: 'warning',
  //     showCancelButton: true,
  //     confirmButtonColor: '#3085d6',
  //     cancelButtonColor: '#d33',
  //     confirmButtonText: 'Yes, delete it!'
  //   }).then((result) => {
  //     if (result.isConfirmed) {
  //       Swal.fire(
  //         'Deleted!',
  //         'Your file has been deleted.',
  //         'success'
          
  //       )
  //       window.location ='delete.php?id=$id'
  //     }
  //   })
    
  //   </script>";
  // }


  $matricule = $_GET['id'];
  $requet= "DELETE FROM `employe` WHERE matricule ='$matricule'";
  $query = mysqli_query($connectBd,$requet);
    if($query)
    header("location:liste-employer.php");
  



// $matricule = $_GET['id'];
// $requet= "DELETE FROM `employe` WHERE matricule ='$matricule'";
// $query = mysqli_query($connectBd,$requet);



?>