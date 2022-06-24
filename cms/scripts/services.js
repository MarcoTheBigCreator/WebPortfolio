var tabla8;

function init() {
    mostrarform8(false);
    listar8();

    $("#formulario8").on("submit", function(e) {
        guardaryeditar8(e);
    })
}

//Función limpiar
function limpiar8() {
    $("#id_service").val("");
    $("#icon").val("");
    $("#service").val("");
    $("#description").val("");
}

//Función mostrar formulario
function mostrarform8(flag) {
    limpiar8();
    if (flag) {
        $("#listadoregistros8").hide();
        $("#formularioregistros8").show();
        $("#btnGuardar8").prop("disabled", false);
        $("#btnagregar8").hide();
    } else {
        $("#listadoregistros8").show();
        $("#formularioregistros8").hide();
        $("#btnagregar8").show();
    }
}

//Función cancelarform
function cancelarform8() {
    limpiar8();
    mostrarform8(false);
}

//Función Listar
function listar8() {
    tabla8 = $('#tbllistado8').dataTable({
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
            url: '../ajax/services.php?op=listar8',
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

function guardaryeditar8(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar8").prop("disabled", true);
    var formData = new FormData($("#formulario8")[0]);

    $.ajax({
        url: "../ajax/services.php?op=guardaryeditar8",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos) {
            bootbox.alert(datos);
            mostrarform8(false);
            tabla8.ajax.reload();
        }

    });
    limpiar8();
}

function mostrar8(id_service) {
    $.post("../ajax/services.php?op=mostrar8", { id_service: id_service }, function(data, status) {
        data = JSON.parse(data);
        mostrarform8(true);

        $("#id_service").val(data.id_service);
        $("#icon").val(data.icon);
        $("#service").val(data.service);
        $("#description").val(data.description);
    })
}

init();