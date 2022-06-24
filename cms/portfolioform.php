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
                <h1 class="box-title">Education<button class="btn btn-success" id="btnagregar7" onclick="mostrarform7(true)"><i class="fa fa-plus-circle"></i> Agregar</button-->
                </h1>
                <div class="box-tools pull-right">
                </div>
              </div>
              <!-- /.box-header -->
              <!-- centro -->
              <div class="panel-body table-responsive" id="listadoregistros7">
                <table id="tbllistado7" class="table table-striped table-bordered table-condensed table-hover">
                  <thead>
                    <th>Options</th>
                    <th>Class</th>
                    <th>Link</th>
                    <th>ImgRoute</th>
                    <th>Name</th>
                    <th>Description</th>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
              </div>
              <div class="panel-body" style="height: 400px;" id="formularioregistros7">
                <form name="formulario7" id="formulario7" method="POST">
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Class:</label>
                    <input type="input" class="form-control" name="class" id="class">
                    <input type="hidden" name="id_portfolio" id="id_portfolio">
                    
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Link:</label>
                    <input type="input" class="form-control" name="link" id="link">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>ImgRoute:</label>
                    <input type="input" class="form-control" name="imgroute" id="imgroute">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Name:</label>
                    <input type="input" class="form-control" name="name" id="name">
                  </div>
                  <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <label>Description:</label>
                    <input type="input" class="form-control" name="description" id="description">
                  </div>
                  <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button class="btn btn-primary" type="submit" id="btnGuardar7"><i class="fa fa-save"></i> Guardar</button>

                    <button class="btn btn-danger" onclick="cancelarform7()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
  <script type="text/javascript" src="scripts/portfolio.js"></script>
</body>

</html>