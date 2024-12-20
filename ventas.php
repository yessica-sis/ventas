<?=$this->extend('Views/Plantilla/plantilla');?>
      <?=$this->section('contenido');?>
      <section class="content">

      <!-- Default box -->
      <div class="card card-secondary">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="true" href="#nuevos"data-bs-toggle="tab">nuevos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="#registrados" data-bs-toggle="tab">Registrados</a>
            </li>
          </ul>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane fade show active"id="nuevos">
            <form method="post" action="<?php echo base_url('insertar_u');?>" id="formulario">
             <label>Marca:</label>
             <select name="marca" id="marca" class="form-control form-select-sm">
               <option selected>selecione marca</option>
               <?php foreach ($marca_v as $imp): ?>
                <option value="<?php echo $imp->id_marcas; ?>"> <?php echo $imp->den_marcas;?></option>
              <?php endforeach; ?>
             </select>
             <br>

             <label>Modelos:</label>
             <select name="modelos" id="modelos" class="form-control form-select-sm">
               <option selected>elija el modelo</option>
               <?php foreach ($modelos_v as $imp): ?>
                <option value="<?php echo $imp->id_modelo;?>"><?php echo $imp->den_modelo;?></option>
              <?php endforeach; ?>
             </select>
             <br>

             <label>Categorias:</label>
             <select name="categorias" id="categorias" class="form-control form-select-sm">
               <option selected>elija las categorias</option>
               <?php foreach ($categorias_v as $imp): ?>
                <option value="<?php echo $imp->id_categorias; ?>"><?php echo $imp->den_categorias;?></option>
              <?php endforeach; ?>
             </select>
             <br>
            <label>s/precio:</label>
             <input type="text" name="txt_precio" class="form-control"><br>
             <label>Fecha:</label>
             <input type="date" name="txt_fecha" class="form-control form-select-sm"></input><br>
             <button type="submit" class="btn btn-primary">Guardar</button>
             <button type="submit" class="btn btn-danger">Limpiar</button>
            
            </form>
            </div>
             <div class="tab-pane fade"id="registrados">
              <table class="table table-striped table-success">
                <thead>
                <tr>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Categorias</th>
                  <th>s/Precio</th>
                  <th>Fecha</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($listar_v as $imp): ?>
                <tr>
                  <td><?php echo $imp->den_marcas; ?></td>
                  <td><?php echo $imp->den_modelo; ?></td>
                  <td><?php echo $imp->den_categorias; ?></td>
                  <td><?php echo $imp->precio; ?></td>
                  <td><?php echo $imp->fecha_venta; ?></td>
                  <td>
                    <div class="btn-group dropend">
                      <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">ACCIONES</button>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url().'modificar_u/'.$imp->id_ventas; ?>" class="btn btn-info mb-2">Modificar</a></li>
                        <li><a href="<?php echo base_url().'eliminar_u/'.$imp->id_ventas; ?>" class="btn btn-danger">Eliminar</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
              </table>

             </div>
          </div>
        </div>
        <!-- /.card-body -->
       
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
   <script type="text/javascript">
      let mensaje = '<?php echo $mensaje; ?>';
      if(mensaje == '1'){
        Swal.fire(':)','eliminacion correcta','success');
      }else if
        (mensaje == '2'){
        Swal.fire(':(','eliminacion incorrecta','error');  
        }else if
        (mensaje == '3'){
        Swal.fire(':)','registro correcto','success');
         }else if
        (mensaje == '4'){
        Swal.fire(':(','registro incorrecto','error');
         }else if
        (mensaje == '5'){
        Swal.fire(':)','modificacion correcto','success');
         } else if
        (mensaje == '6'){
        Swal.fire(':(','modioficacion incorrecta','error');
         }

    </script>
    <?=$this->endSection(); ?>