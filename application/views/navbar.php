<div class="wrapper">
  <div class="sidebar"  data-image="assets/img/sidebar-5.jpg">
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
          <a class="nav-link" href="<?php echo base_url('req_controller/index'); ?>">
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
          <a class="nav-link" href="<?php echo base_url('usuario_controller/index'); ?>">
            <i class="nc-icon nc-paper-2"></i>
            <p>Marcas</p>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="main-panel">
    <nav class="navbar navbar-expand-lg " color-on-scroll="500">
      <div class="container-fluid">
        <a class="navbar-brand" href="#pablo"> User </a>
        <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar burger-lines"></span>
          <span class="navbar-toggler-bar burger-lines"></span>
          <span class="navbar-toggler-bar burger-lines"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navigation">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#pablo">
                <span class="no-icon">Account</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="no-icon">Dropdown</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">
                <span class="no-icon">Log out</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

