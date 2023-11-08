  <?php if(session()->getFlashdata('msg')):?>
    <div class="alert alert-warning">
      <?= session()->getFlashdata('msg');?>
    </div>
    <?php endif;?>
<form method="post" action="<?php echo base_url('/enviar-login')?>" class="py-4 mt-5">
    <div class="container">
    <div class="row">
    <h1 class="text-center">Ingresar Usuario</h1>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input name="email" type="email" class="form-control" id="email1" placeholder="Email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
    <input name="pass" type="password" class="form-control" id="password" placeholder="Contraseña">
  </div>
  <button type="submit" class="btn btn-dark my-2">Enviar</button>
  <button type="reset" class="btn btn-danger my-2">Cancelar</button>
  <br><span>¿Aun no se registró? <a href="<?php echo base_url('/registro');?>">Registrarse aquí</a></span>
</div>
</div>
</form>