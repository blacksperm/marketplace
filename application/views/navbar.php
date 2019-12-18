<div class="wrapper">
  <div class="sidebar"  data-image="../assets/img/sidebar-5.jpg">
    <div class="sidebar-wrapper">
      <div class="logo">
        <a href="<?php echo base_url('inicio_controller'); ?>"  class="simple-text">
          Inicio
        </a>
      </div>
      <ul class="nav">
        <li>
          <a class="nav-link" href="<?php echo base_url('req_controller/index'); ?>">
            <i class="nc-icon nc-notes"></i>
            <p>Requerimientos</p>
          </a>
        </li>
        <li>
          <a class="nav-link" href="<?php echo base_url('propuesta_controller/index'); ?>">
            <i class="nc-icon nc-notes"></i>
            <p>Propuestas</p>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('usuario_controller/index'); ?>">
            <i class="nc-icon nc-circle-09"></i>
            <p>Usuarios</p>
          </a>
        </li>
        
        <li>
          <a class="nav-link" href="<?php echo base_url('marca_controller/index'); ?>">
            <i class="nc-icon nc-paper-2"></i>
            <p>Marcas</p>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="main-panel">
    <nav class="navbar navbar-expand-lg " color-on-scroll="500" style="background-color: #4E595C;">
      <div class="container-fluid">
        <a class="navbar-brand" href="" style="color: white;"> <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= "<strong>Bienvenido</strong>: ".$this->session->userdata('nombre'). " " .$this->session->userdata('apellido') ?></span></a>
        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar burger-lines"></span>
          <span class="navbar-toggler-bar burger-lines"></span>
          <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div  id="navigation">
          <ul class="navbar-nav ">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="no-icon" style="color: white;">Opciones</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= base_url('user_comps/Cambiar_clave') ?>">Cambiar contraseña</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Salir
                </a>
              </div>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

