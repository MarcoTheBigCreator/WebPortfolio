var tabla7;

function init() {
    mostrarform7(false);
    listar7();

    $("#formulario7").on("submit", function(e) {
        guardaryeditar7(e);
    })
}

//Función limpiar
function limpiar7() {
    $("#id_portfolio").val("");
    $("#class").val("");
    $("#link").val("");
    $("#imgroute").val("");
    $("#name").val("");
    $("#description").val("");
    $("#language").val("");
}

//Función mostrar formulario
function mostrarform7(flag) {
    limpiar7();
    if (flag) {
        $("#listadoregistros7").hide();
        $("#formularioregistros7").show();
        $("#btnGuardar7").prop("disabled", false);
        $("#btnagregar7").hide();
    } else {
        $("#listadoregistros7").show();
        $("#formularioregistros7").hide();
        $("#btnagregar7").show();
    }
}

//Función cancelarform
function cancelarform7() {
    limpiar7();
    mostrarform7(false);
}

//Función Listar
function listar7() {
    tabla7 = $('#tbllistado7').dataTable({
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
            url: '../ajax/portfolio.php?op=listar7',
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

function guardaryeditar7(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar7").prop("disabled", true);
    var formData = new FormData($("#formulario7")[0]);

    $.ajax({
        url: "../ajax/portfolio.php?op=guardaryeditar7",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos) {
            bootbox.alert(datos);
            mostrarform7(false);
            tabla7.ajax.reload();
        }

    });
    limpiar7();
}

function mostrar7(id_portfolio) {
    $.post("../ajax/portfolio.php?op=mostrar7", { id_portfolio: id_portfolio }, function(data, status) {
        data = JSON.parse(data);
        mostrarform7(true);

        $("#id_portfolio").val(data.id_portfolio);
        $("#class").val(data.class);
        $("#link").val(data.link);
        $("#imgroute").val(data.imgroute);
        $("#name").val(data.name);
        $("#description").val(data.description);
        $("#language").val(data.language);
    })
}

init();