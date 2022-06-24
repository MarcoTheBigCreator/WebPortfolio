<!DOCTYPE html>
<html lang="en">

<?php
include 'header.php';
?>

<body>
<section>
<?php
include 'nav.php';
?>


</section>
  <section>
 
    <script src="..\public\assets\js\jquery-3.1.1.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="../public/assets/js/jquery-3.1.1.min.js"><\/script>')
    </script>
    <!-- DATATABLES -->
    <script src="../public/datatables/jquery.dataTables.min.js"></script>
    <script src="../public/datatables/dataTables.buttons.min.js"></script>
    <script src="../public/datatables/buttons.html5.min.js"></script>
    <script src="../public/datatables/buttons.colVis.min.js"></script>
    <script src="../public/datatables/jszip.min.js"></script>
    <script src="../public/datatables/pdfmake.min.js"></script>
    <script src="../public/datatables/vfs_fonts.js"></script>

    <script src="../public/assets/js/bootbox.min.js"></script>
    <script src="../public/assets/js/bootstrap-select.min.js"></script>
    <script src="../public/assets/js/bootstrap.js"></script>



    <div class="content-wrapper">
      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h1 class="box-title">Education<button class="btn btn-success" id="btnagregar5" onclick="mostrarform5(true)"><i class="fa fa-plus-circle"></i> Agregar</button-->
                </h1>
                <div class="box-tools pull-right">
                </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body table-responsive" id="listadoregistros5">
                <table id="tbllistado5" class="table table-striped table-bordered table-condensed table-hover">
                  <thead>
                    <th>Options</th>
                    <th>Date</th>
                    <th>Title</th>
                    <th>NameJob</th>
                    <th>Description</th>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              </div>
              <div class="panel-body" style="height: 400px;" id="formularioregistros5">
                <form name="formulario5" id="formulario5" method="POST">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Date:</label>
                    <input type="input" class="form-control" name="date" id="date">
                    <input type="hidden" name="id_education" id="id_education">
                    
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Title:</label>
                    <input type="input" class="form-control" name="title" id="title">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>NameJob:</label>
                    <input type="input" class="form-control" name="namejob" id="namejob">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Description:</label>
                    <input type="input" class="form-control" name="description" id="description">
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button class="btn btn-primary" type="submit" id="btnGuardar5"><i class="fa fa-save"></i> Guardar</button>

                    <button class="btn btn-danger" onclick="cancelarform5()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                  </div>
                </form>
              </div>
              <!--Fin centro -->
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->

    </div><!-- /.content-wrapper -->
    <!--Fin-Contenido-->



  </section>
  <section>
    <?php
    require 'footer.php';
    ?>


  </section>
  <script type="text/javascript" src="scripts/experience.js"></script>
</body>

</html>