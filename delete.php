<?php 
 include "link.php";

//  <div class="modal" tabindex="-1">
//  <div class="modal-dialog">
//    <div class="modal-content">
//      <div class="modal-header">
//        <h5 class="modal-title">Modal title</h5>
//        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
//      </div>
//      <div class="modal-body">
//        <p>Modal body text goes here.</p>
//      </div>
//      <div class="modal-footer">
     
//        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
//        <button type="button"  class="btn btn-primary">Save changes</button>
//      </div>
//    </div>
//  </div>
// </div>


function alertDelete() 
{
  
  if(isset($_GET['id'])){
  include 'Connection-BD.php';
  $matricule = $_GET['id'];
$requet= "DELETE FROM `employe` WHERE matricule ='$matricule'";
$query = mysqli_query($connectBd,$requet);
}
if(isset($query))
header("location:liste-employer.php");


    // echo "
    // <script>

    // Swal.fire({
    //     title: 'Are you sure?',
    //     text: 'You won't be able to revert this!',
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
    //         'success',
    //       )
   
    //     }
    //   })
    //   </script>";
}
if(isset($_GET['id']))
{
    alertDelete();
   
}

// $matricule = $_GET['id'];
// $requet= "DELETE FROM `employe` WHERE matricule ='$matricule'";
// $query = mysqli_query($connectBd,$requet);



?>