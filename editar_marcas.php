<?php
 $id_marcas = $datos[0]['id_marcas'];
 $den_marcas = $datos[0]['den_marcas'];
 ?>

<?=$this->extend('Views/Plantilla/plantilla');?>
      <?=$this->section('contenido');?>
      <section class="content">

      <!-- Default box -->
      <div class="card card-secondary">
        </div>
        <div class="card-body">
          <div class="tab-content">
            <form method="POST" action="<?php echo base_url('actualizar_m'); ?>">
              <input type="hidden" name="txt_id" value="<?php echo $id_marcas; ?>">
              <label>MARCA</label>
              <input type="text" name="txt_marca" class="form-control mb-3" value="<?php echo $den_marcas; ?>">
              <div>
                <a href="<?php echo base_url('marcas'); ?>" class="btn btn-danger">Eliminar</a>
                <button type="submit" class="btn btn-secondary">Actualizar</button>
              </div>
             </form>
        <!-- /.card-body -->
       <div class="card-footer">
       </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <?=$this->endSection(); ?>