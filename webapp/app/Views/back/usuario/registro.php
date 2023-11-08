<?php $validation = \Config\Services::validation(); ?>
<form method="post" action="<?php echo base_url('/enviar-form') ?>" class="py-3 h-100">
  <?= csrf_field(); ?>
  <?= csrf_field(); ?>
  <?php if (!empty(session()->getFlashdata('fail'))) : ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('fail') ?></div>
  <?php endif ?>
  <?php if (!empty(session()->getFlashdata('succes'))) : ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('succes') ?></div>
  <?php endif ?>
  <div class="container">
    <div class="row">
      <h1 class="text-center">Registrarse</h1>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
        <input name="nombre" type="text" class="form-control" placeholder="Nombre">
        <?php if ($validation->getError('nombre')) { ?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('nombre'); ?>
          </div>
        <?php } ?>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Apellido</label>
        <input name="apellido" type="text" class="form-control" placeholder="Apellido">
        <?php if ($validation->getError('apellido')) { ?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('apellido'); ?>
          </div>
        <?php } ?>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Usuario</label>
        <input name="usuario" type="text" class="form-control" placeholder="Usuario">
        <?php if ($validation->getError('usuario')) { ?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('usuario'); ?>
          </div>
        <?php } ?>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Email">
        <?php if ($validation->getError('email')) { ?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('email'); ?>
          </div>
        <?php } ?>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
        <input name="pass" type="password" class="form-control" id="InputPassword1" placeholder="Contraseña">
        <?php if ($validation->getError('pass')) { ?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('pass'); ?>
          </div>
        <?php } ?>
      </div>
      <input type="submit" value="Guardar" class="btn btn-dark">
      <input type="reset" value="Cancelar" class="btn btn-danger">
    </div>
  </div>
</form>