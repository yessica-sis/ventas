<?=$this->extend('Views/Plantilla/plantilla');?>
      <?=$this->section('contenido');?>
      <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">

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
          Repuestos
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Modelos
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <?=$this->endSection(); ?>