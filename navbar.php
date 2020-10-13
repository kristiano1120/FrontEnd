        
<header class="navbar navbar-bright navbar" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="col-md-12">
        <div class="col-md-offset-4 col-md-4" style="padding: 10px;">
            <form class="form-inline" method="post" action="search.php">
             <input type="text" name="search" class="form-control" style="width: 100%"  id="span5" placeholder="Buscar">
            </form>
        </div>
        <div class="col-md-offset-2 col-md-2" style="padding: 10px 5px 5px 5px">
            <li class="pull-right">
              <a href="logout.php"><i class="icon-signout"></i> Cerrar Sesión</a>
            </li>
        </div>
    </div>
    <div class="col-md-12">
      <div class="col-md-offset-4 col-md-4" style="text-align: center;"> 
        <img class="image-circle" src="<?php echo $image; ?>" height="140" width="140" style="border: 3px solid #fff; border-radius: 50%; ">
        <a class="btn btn-success" href="change_pic.php" style="margin:10px;">Cambiar Foto de Perfil</a>
      </div>
    </div>
    <div class="col-md-12">
      <nav class="collapse navbar-collapse col-md-offset-3 col-md-10" style="padding:0px 40px; " role="navigation">
      <ul class="nav navbar-nav">
        <li><a href="home.php" class="navbar-brand"><i class="icon-home"></i> Inicio</a>
        <li><a href="profile.php"><i class="icon-user"></i> Perfil</a></li>
        <li><a href="photos.php"><i class="icon-picture"></i> Fotos</a></li>
        <li><a href="friends.php"><i class="icon-group"></i> Amigos</a></li>
        <li><a href="message.php"><i class="icon-group"></i> Mensaje</a></li>   
      </ul>   
    </nav>
    </div>
  </div>
</header>