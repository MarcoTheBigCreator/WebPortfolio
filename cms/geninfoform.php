<!DOCTYPE html>
<html lang="en">

<?php
include 'header.php';
?>
<body>
<script src="../public/assets/js/jquery-3.1.1.min.js"></script>
 <script>window.jQuery || document.write('<script src="../public/assets/js/jquery-3.1.1.min.js"><\/script>')</script>
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


    <div class="content-wrapper">        
        <!-- Main content -->
        <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box">
                    <div class="box-header with-border">
                          <h1 class="box-title">General Information<button class="btn btn-success" id="btnagregar" onclick="mostrarform(true)"><i class="fa fa-plus-circle"></i> Agregar</button--></h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- centro -->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
                          <thead>
                            <th>Id_geninfo</th>
                            <th>Description</th>
                            <th>Location</th>
                            <th>Current location</th>
                            <th>Age</th>
                            <th>Gender</th>
                          </thead>
                          <tbody>                            
                          </tbody>
                          <tfoot>

                          </tfoot>
                        </table>
                    </div>
                    <div class="panel-body" style="height: 400px;" id="formularioregistros">
                        <form name="formulario" id="formulario" method="POST">
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Description:</label>
                            <input type="input" class="form-control" name="description" id="description" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Location:</label>
                            <input type="input" class="form-control" name="location" id="location" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Current Location:</label>
                            <input type="input" class="form-control" name="clocation" id="clocation" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Age:</label>
                            <input type="input" class="form-control" name="age" id="age" >
                          </div>
                          <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label>Gender:</label>
                            <input type="input" class="form-control" name="gender" id="gender" >
                          </div>
                          <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i> Guardar</button>

                            <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
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
    <?php
    require 'footer.php';
    ?>
    <script type="text/javascript" src="scripts/geninfo.js"></script>
</body>
</html>