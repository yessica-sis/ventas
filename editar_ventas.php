<?php
 $id_ventas = $datos[0]['id_ventas'];
 $marcas = $datos[0]['marca'];
 $modelo = $datos[0]['modelos'];
 $categorias = $datos[0]['categorias'];
 $precio = $datos[0]['precio'];
 $fecha_venta = $datos[0]['fecha_venta'];

 ?>

<?=$this->extend('Views/Plantilla/plantilla');?>
      <?=$this->section('contenido');?>
      <section class="content">

      <!-- Default box -->
      <div class="card card-secondary">
        </div>
        <div class="card-body">
          <div class="tab-content">
            <form method="post" action="<?php echo base_url('actualizar_u');?>" id="formulario">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <input type="hidden" name="txt_id" value="<?php echo $id_ventas; ?>">
                    <label for="marca">Marcas</label>
                    <select name="marcas" id="marcas" class="form-control form-select-sm">
                      <?php foreach ($marca_v as $imp): ?>
                     <option value="<?php echo $imp->id_marcas; ?>"> <?php echo $imp->den_marcas;?></option>
                     <?php endforeach; ?>
                    </select>
                    
                  </div>
                  
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="modelos">Modelos</label>
                    <select name="modelos" id="modelos" class="form-control form-select-sm">
                      <?php foreach ($modelos_v as $imp): ?>
                     <option value="<?php echo $imp->id_modelo;?>"><?php echo $imp->den_modelo;?></option>
                     <?php endforeach; ?>
                    </select>
                    
                  </div>
                  
                </div>
                
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-3">
                    <label for="categorias">Categorias</label>
                    <select name="categorias" id="categorias" class="form-control form-select-sm">
                      <?php foreach ($categorias_v as $imp): ?>
                    <option value="<?php echo $imp->id_categorias; ?>"><?php echo $imp->den_categorias;?>
                      
                    </option>
                      <?php endforeach; ?>
                    </select>
                    
                  </div>
                  
                </div>
                
              </div>
              <label>precio:</label>
              <input type="text" name="precio" class="form-control" value="<?php echo $precio; ?>"><br>
              <label>Fecha:</label>
              <input type="date" name="fecha_venta" class="form-control form-select-sm" value="<?php echo $fecha_venta; ?>"></input><br>
              <div>
                <a href="<?php echo base_url('ventas') ?>" class="btn btn-danger">Eliminar</a>
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