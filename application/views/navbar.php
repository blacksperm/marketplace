<style type="text/css">
nav.navbar {
  background-color: #191A1A;
  position: fixed;
  z-index: 1;
  top: 0;
  border-radius:10px;
  text-align: center;
  width: 90%;
  height: 10vh;
  <?php if($this->session->userdata('logged')==TRUE){echo "left: 5%;";}else{echo "left: 7%;";} ?>
}

ul li{
  margin: 7px;
  list-style: none;
}
</style>
</head>
<!-- background: -webkit-linear-gradient(left, rgba(183,222,237,1) 0%, rgba(113,206,239,1) 0%, rgba(33,180,226,1) 0%, rgba(183,222,237,1) 100%);margin-top: 5px -->
<body>
  <nav class="navbar navbar-expand-lg navbar-ling" style="background: transparent;">
    <a class="navbar-brand" style="font-family: 'sastisfy';font-size:35px; color: white;margin-left: 5px; text-shadow: 1px 2px #999;">MarketPlace</a>

   
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto"> 
        <font color="Lime">
          <?php 
          if($this->session->userdata('logged')==TRUE){echo "";}?>
        </font>


<!-- //Así se crean los links del Navbar -->
<!--         <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('ejemplo_controller/index') ?>">Algún sitio lejano</a>
        </li> -->


      </ul>  
      <?php 
      if($this->session->userdata('logged')==TRUE){ ?>
        <label class="mr-4" style="font-family; font-size: 20px; color: white; margin-left: 30px">
         <?php if($this->session->userdata('rol')== 1){echo "Sr. ";}elseif($this->session->userdata('rol')== 2){echo "Bienvenido/a: ";} ?>
         <?php echo $this->session->userdata('nombre'); ?>

         <img src="<?= base_url('props/img/profile.jpg')?>" width="30" height="30" class="d-inline-block align-top" alt="">

       </label>   
       <a href="<?= base_url('login_cont/cerrar_sesion/') ;?>"><button class="btn btn-success btn-sm my-2 my-sm-0">Cerrar Sesión</button></a>
     <?php }else{ ?>
      <a href="<?= base_url('/login_cont');?>"><button class="btn btn-success btn-sm my-2 my-sm-0">Iniciar Sesión</button></a>
    <?php } ?>
<div style="margin-left: 10px">
  <a class="btn btn-primary btn-sm" href="<?= base_url('usuario_cont/cambiar_clave/'); ?>">Cambiar contraseña</a>
</div>
  </div>
</nav>