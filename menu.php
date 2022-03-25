<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="maroc-pme.jpg" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="liste-employer.php">Liste des employées</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ajouter-employé.php">Ajouter un employé</a>
        </li>
      </ul>
      <form method="POST" class="d-flex">

        <input class="form-control me-2" type="search" name="valeurrechercher" placeholder="Rechercher un employé" aria-label="Search">
        <button class="btn btn-outline-success" name="rechercher"  type="submit">Search</button>
      </form>
     <?php
     
  // if (isset($_POST['rechercher'])){
  //   include 'liste-employer.php'
  //       // rechercher();
  //       //  header('Location : http://localhost/Gestion-PME/liste-employer.php' );


  //       }
      ?>
    </div>
  </div>
</nav>