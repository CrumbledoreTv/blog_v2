<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

     <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="../css/style.css" media="screen" title="no title">
</head>

<body>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Blog</a></li>

          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Visiteur<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Deconnexion</a></li>
            </ul>
          </li> -->
          <!-- <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrateur <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a><img src="../img/placeholder.jpg" alt="" /></a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Parametres</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Deconnexion</a></li>
            </ul>
          </li> -->
              <!-- <li><a href="#">Se connecter</a></li>
              <li><a href="#">S'enregistrer</a></li> -->
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <!-- ************************************************************************************
  ************************************************************************************
  ************************************************************************************ -->

  <div class="container">
    <div class="row ">

      <div class="alert alert-info">
        <h1>Connexion</h1>
      </div>

<form class="connexion col-md-4 col-md-offset-4">
 <div class="form-group">
   <label for="email">Adresse mail </label>
   <input type="email" class="form-control" id="email">
 </div>
 <div class="form-group">
   <label for="pwd">Mot de passe </label>
   <input type="password" class="form-control" id="pwd">
 </div>
 <div class="checkbox">
   <label><input type="checkbox">Se souvenir de moi </label>
 </div>
 <button type="submit" class="btn btn-default">Valider</button>
 <button class="btn btn-default">Annuler</button>

</form>


  </div><!--Row -->
  </div><!--container-->

  <footer> copiryght </footer>



</body>


<script src="https://use.fontawesome.com/5ae75527aa.js"></script>
<script type="text/javascript" src="../js/index.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>

</html>