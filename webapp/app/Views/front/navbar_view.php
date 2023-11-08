<!--inicio de la barra de navegacion-->
<?php 
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-gradient bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url('principal')?>"> <img class=¨logo¨ src="assets/img/logo.png" alt="logo" width="75">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- Vista Admin -->
        <?php if(session()->perfil_id == 1):?>
          <div class="button btn-secondary active btnUser btn-sm">
            <a href="">ADMIN: <?php echo session('nombre')?></a>
          </div>
        <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca_de">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="agregar_producto">Agregar Producto</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Stock
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="consultar_producto2">Sucursal Resistencia</a></li>
            <li><a class="dropdown-item" href="consultar_producto">Sucursal Corrientes</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout')?>">Cerrar Sesión</a>
        </li>
         <!-- Vista Cliente -->
        <?php elseif(session()->perfil_id == 2):?>
           <div class="button btn-secondary active btnUser btn-sm">
            <a href="">CLIENTE: <?php echo session('nombre')?></a>
          </div>
        <li class="nav-item">
          <a class="nav-link" href="registro">Registrarse</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/logout')?>">Cerrar Sesión</a>
        </li>
         <!-- Vista No Logueado -->
        <?php else:?>
         <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca_de">Acerca De</a>
        </li>
         <!-- 
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Links utiles
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item disabled" href="#">Gobierno Provincial</a></li>
            <li><a class="dropdown-item disabled" href="#">Municipalidad de Corrientes</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item disabled" href="#">TelCo</a></li>
          </ul>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="registro">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
        <?php endif;?>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
</header>
<!--Fin de la barra de navegacion-->
