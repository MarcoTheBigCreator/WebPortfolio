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
                <h1 class="box-title">Education<button class="btn btn-success" id="btnagregar9" onclick="mostrarform9(true)"><i class="fa fa-plus-circle"></i> Agregar</button-->
                </h1>
                <div class="box-tools pull-right">
                </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body table-responsive" id="listadoregistros9">
                <table id="tbllistado9" class="table table-striped table-bordered table-condensed table-hover">
                  <thead>
                    <th>Options</th>
                    <th>Name</th>
                    <th>Nickname</th>
                    <th>Pass</th>
                    <th>Type</th>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              </div>
              <div class="panel-body" style="height: 400px;" id="formularioregistros9">
                <form name="formulario9" id="formulario9" method="POST">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Name:</label>
                    <input type="input" class="form-control" name="name" id="name">
                    <input type="hidden" name="id_user" id="id_user">
                    
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Nickname:</label>
                    <input type="input" class="form-control" name="nickname" id="nickname">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Pass:</label>
                    <input type="input" class="form-control" name="pass" id="pass">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Type:</label>
                    <input type="input" class="form-control" name="type" id="type">
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button class="btn btn-primary" type="submit" id="btnGuardar9"><i class="fa fa-save"></i> Guardar</button>

                    <button class="btn btn-danger" onclick="cancelarform9()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
  <script type="text/javascript" src="scripts/users.js"></script>
</body>

</html>