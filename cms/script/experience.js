var tabla5;

function init() {
    mostrarform5(false);
    listar5();

    $("#formulario5").on("submit", function(e) {
        guardaryeditar5(e);
    })
}

//Función limpiar
function limpiar5() {
    $("#id_experience").val("");
    $("#date").val("");
    $("#title").val("");
    $("#namejob").val("");
    $("#description").val("");
}

//Función mostrar formulario
function mostrarform5(flag) {
    limpiar5();
    if (flag) {
        $("#listadoregistros5").hide();
        $("#formularioregistros5").show();
        $("#btnGuardar5").prop("disabled", false);
        $("#btnagregar5").hide();
    } else {
        $("#listadoregistros5").show();
        $("#formularioregistros5").hide();
        $("#btnagregar5").show();
    }
}

//Función cancelarform
function cancelarform5() {
    limpiar5();
    mostrarform5(false);
}

//Función Listar
function listar5() {
    tabla5 = $('#tbllistado5').dataTable({
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
            url: '../ajax/experience.php?op=listar5',
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

function guardaryeditar5(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar5").prop("disabled", true);
    var formData = new FormData($("#formulario5")[0]);

    $.ajax({
        url: "../ajax/experience.php?op=guardaryeditar5",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos) {
            bootbox.alert(datos);
            mostrarform5(false);
            tabla5.ajax.reload();
        }

    });
    limpiar5();
}

function mostrar5(id_experience) {
    $.post("../ajax/experience.php?op=mostrar5", { id_experience: id_experience }, function(data, status) {
        data = JSON.parse(data);
        mostrarform5(true);

        $("#id_experience").val(data.id_experience);
        $("#date").val(data.date);
        $("#title").val(data.title);
        $("#namejob").val(data.namejob);
        $("#description").val(data.description);
    })
}

init();