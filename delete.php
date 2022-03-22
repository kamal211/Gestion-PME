<?php 

include 'Connection-BD.php';

function alertDelete() 
{
  

    echo "
    <script>

    Swal.fire({
        title: 'Are you sure?',
        text: 'You won't be able to revert this!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success',
          )
   
        }
      })
      </script>";
}
if(isset($_GET['id']))
{
    alertDelete();
}

$matricule = $_GET['id'];
$requet= "DELETE FROM `employe` WHERE matricule ='$matricule'";
$query = mysqli_query($connectBd,$requet);
if(isset($query))
header("location:liste-employer.php");


?>