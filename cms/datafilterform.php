<?php
include '../config/validation.php'
?>

<!DOCTYPE html>
<html lang="en">

<?php
include 'head.php';
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
                <h1 class="box-title">Data Filter<button class="btn btn-success ml-4" id="btnagregar2" onclick="mostrarform2(true)"><i class="fa fa-plus-circle"></i> Agregar</button-->
                </h1>
                <div class="box-tools pull-right">
                </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body table-responsive" id="listadoregistros2">
                <table id="tbllistado2" class="table table-striped table-bordered table-condensed table-hover">
                  <thead>
                    <th>Options</th>
                    <th>Class</th>
                    <th>Filter</th>
                    <th>Language</th>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <div class="panel-body" id="formularioregistros2">
                <form name="formulario2" id="formulario2" method="POST">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Class:</label>
                    <input type="input" class="form-control" name="class" id="class">
                    <input type="hidden" name="id_datafilter" id="id_datafilter">
                    
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Filter:</label>
                    <input type="input" class="form-control" name="filter" id="filter">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Language:</label>
                    <input type="input" class="form-control" name="language" id="language">
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button class="btn btn-primary" type="submit" id="btnGuardar2"><i class="fa fa-save"></i> Guardar</button>

                    <button class="btn btn-danger" onclick="cancelarform2()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
  <script type="text/javascript" src="script/datafilter.js"></script>
</body>

</html>