<?php $validation = \Config\Services::validation(); ?>
<form method="post" action="<?php echo base_url('/enviar-producto') ?>" class="py-3 h-100">
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
      <h1 class="text-center">Agregar Producto</h1>
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
        <label for="exampleFormControlInput1" class="form-label">Precio</label>
        <input name="precio" type="text" class="form-control" placeholder="Precio">
        <?php if ($validation->getError('precio')) { ?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('precio'); ?>
          </div>
        <?php } ?>
      </div>
       <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Sucursal_id</label>
        <input name="sucursal_id" type="text" class="form-control" placeholder="Id Sucursal">
        <?php if ($validation->getError('sucursal_id')) { ?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('sucursal_id'); ?>
          </div>
        <?php } ?>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Stock</label>
        <input name="stock" type="text" class="form-control" placeholder="Stock">
        <?php if ($validation->getError('stock')) { ?>
          <div class="alert alert-danger mt-2">
            <?= $error = $validation->getError('stock'); ?>
          </div>
        <?php } ?>
      </div>
      <input type="submit" value="Guardar" class="btn btn-dark">
      <input type="reset" value="Cancelar" class="btn btn-danger">
    </div>
  </div>
</form>