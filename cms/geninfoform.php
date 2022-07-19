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
                <h1 class="box-title">General Information<button class="btn btn-success ml-4" id="btnagregar6" onclick="mostrarform6(true)"><i class="fa fa-plus-circle"></i> Agregar</button-->
                </h1>
                <div class="box-tools pull-right">
                </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body table-responsive" id="listadoregistros6">
                <table id="tbllistado6" class="table table-striped table-bordered table-condensed table-hover">
                  <thead>
                    <th>Options</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Current Location</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Language</th>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              </div>
              <div class="panel-body" id="formularioregistros6">
                <form name="formulario6" id="formulario6" method="POST">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Description:</label>
                    <input type="input" class="form-control" name="description" id="description">
                    <input type="hidden" name="id_geninfo" id="id_geninfo">
                    
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Location:</label>
                    <input type="input" class="form-control" name="location" id="location">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Current Location:</label>
                    <input type="input" class="form-control" name="clocation" id="clocation">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Age:</label>
                    <input type="input" class="form-control" name="age" id="age">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Gender:</label>
                    <input type="input" class="form-control" name="gender" id="gender">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Language:</label>
                    <input type="input" class="form-control" name="language" id="language">
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button class="btn btn-primary" type="submit" id="btnGuardar6"><i class="fa fa-save"></i> Guardar</button>

                    <button class="btn btn-danger" onclick="cancelarform6()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
  <script type="text/javascript" src="script/geninfo.js"></script>
</body>

</html>