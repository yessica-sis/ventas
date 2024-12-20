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
             <form method="POST" action="<?php echo base_url('insertar_c') ?>">
              <label>INGRESE CATEGORIA</label>
              <input type="text" name="txt_categorias" class="form-control mb-3" placeholder="ingrese categoria">
              <button type="submit" class="btn btn-secondary">REGISTRAR</button>
              <button type="submit" class="btn btn-danger">ELIMINAR</button>
             </form>
            </div>
             <div class="tab-pane fade"id="registrados">
             <table class="table table-striped table-success">
               <thead>
                 <tr>
                   <th>ID_CATEGORIAS</th>
                   <th>CATEGORIAS</th>
                   <th>ACCIONES</th>
                 </tr>
               </thead>
               <tbody>
                <?php foreach ($categorias_v as $imp):?>
                 <tr>
                   <td><?php echo $imp->id_categorias; ?></td>
                   <td><?php echo $imp->den_categorias; ?></td>
                   <td>
                      <div class="btn-group dropend">
                      <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">ACCIONES</button>
                      <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url().'modificar_c/'.$imp->id_categorias; ?>" class="btn btn-info mb-2">Modificar</a></li>
                        <li><a href="<?php echo base_url().'eliminar_c/'.$imp->id_categorias; ?>" class="btn btn-danger">Eliminar</a></li>
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