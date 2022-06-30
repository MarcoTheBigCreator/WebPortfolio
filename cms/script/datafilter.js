var tabla2;

function init() {
    mostrarform2(false);
    listar2();

    $("#formulario2").on("submit", function(e) {
        guardaryeditar2(e);
    })
}

//Función limpiar
function limpiar2() {
    $("#id_datafilter").val("");
    $("#class").val("");
    $("#filter").val("");
}

//Función mostrar formulario
function mostrarform2(flag) {
    limpiar2();
    if (flag) {
        $("#listadoregistros2").hide();
        $("#formularioregistros2").show();
        $("#btnGuardar2").prop("disabled", false);
        $("#btnagregar2").hide();
    } else {
        $("#listadoregistros2").show();
        $("#formularioregistros2").hide();
        $("#btnagregar2").show();
    }
}

//Función cancelarform
function cancelarform2() {
    limpiar2();
    mostrarform2(false);
}

//Función Listar
function listar2() {
    tabla2 = $('#tbllistado2').dataTable({
        "aProcessing": true, //Activamos el procesamiento del datatables
        "aServerSide": true, //Paginación y filtrado realizados por el servidor
        dom: 'Bfrtip', //Definimos los elementos del control de tabla
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf'
        ],
        "ajax": {
            url: '../ajax/datafilter.php?op=listar2',
            type: "get",
            dataType: "json",
            error: function(e) {
                console.log(e.responseText);
            }
        },
        "bDestroy": true,
        "iDisplayLength": 5, //Paginación
        "order": [
                [0, "desc"]
            ] //Ordenar (columna,orden)
    }).DataTable();
}
//Función para guardar o editar

function guardaryeditar2(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar2").prop("disabled", true);
    var formData = new FormData($("#formulario2")[0]);

    $.ajax({
        url: "../ajax/datafilter.php?op=guardaryeditar2",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos) {
            bootbox.alert(datos);
            mostrarform2(false);
            tabla2.ajax.reload();
        }

    });
    limpiar2();
}

function mostrar2(id_datafilter) {
    $.post("../ajax/datafilter.php?op=mostrar2", { id_datafilter: id_datafilter }, function(data, status) {
        data = JSON.parse(data);
        mostrarform2(true);

        $("#id_datafilter").val(data.id_datafilter);
        $("#class").val(data.class);
        $("#filter").val(data.filter);
    })
}

init();