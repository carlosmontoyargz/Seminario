<?php if($this->session->userdata('nivel')=='1')  {?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">administrador</a>
  <!-- Links -->
  <ul class="navbar-nav">
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        usuarios
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">supervisor</a>
        <a class="dropdown-item" href="#">colaborador</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        sedes
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">salones</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        pagos
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">reportes</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        lista
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">reportes</a>
      </div>
    </li>
    <a class="navbar-brand" href="<?php echo base_url();?>index.php/welcome/cerrarSesion">cerrar_sesión</a>
  </ul>
</nav>
<?php }?>
<?php if($this->session->userdata('nivel')=='2')  {?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">supervisor</a>
  <!-- Links -->
  <ul class="navbar-nav">
  <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        usuarios
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">colaborador</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        sedes
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">salones</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        pagos
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">reportes</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        lista
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">reportes</a>
      </div>
    </li>
    <a class="navbar-brand" href="<?php echo base_url();?>index.php/welcome/cerrarSesion">cerrar_sesión</a>
  </ul>
</nav>
<?php }?>
<?php if($this->session->userdata('nivel')=='3')  {?>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">capturista</a>
  <!-- Links -->
  <ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="#">Registro</a>
    </li>
    <a class="navbar-brand" href="<?php echo base_url();?>index.php/welcome/cerrarSesion">cerrar_sesión</a>
  </ul>
</nav>

<?php }?>
