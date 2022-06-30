var tabla9;

function init() {
    mostrarform9(false);
    listar9();

    $("#formulario9").on("submit", function(e) {
        guardaryeditar9(e);
    })
}

//Función limpiar
function limpiar9() {
    $("#id_user").val("");
    $("#name").val("");
    $("#nickname").val("");
    $("#pass").val("");
    $("#type").val("");
}

//Función mostrar formulario
function mostrarform9(flag) {
    limpiar9();
    if (flag) {
        $("#listadoregistros9").hide();
        $("#formularioregistros9").show();
        $("#btnGuardar9").prop("disabled", false);
        $("#btnagregar9").hide();
    } else {
        $("#listadoregistros9").show();
        $("#formularioregistros9").hide();
        $("#btnagregar9").show();
    }
}

//Función cancelarform
function cancelarform9() {
    limpiar9();
    mostrarform9(false);
}

//Función Listar
function listar9() {
    tabla9 = $('#tbllistado9').dataTable({
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
            url: '../ajax/users.php?op=listar9',
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

function guardaryeditar9(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar9").prop("disabled", true);
    var formData = new FormData($("#formulario9")[0]);

    $.ajax({
        url: "../ajax/users.php?op=guardaryeditar9",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos) {
            bootbox.alert(datos);
            mostrarform9(false);
            tabla9.ajax.reload();
        }

    });
    limpiar9();
}

function mostrar9(id_user) {
    $.post("../ajax/users.php?op=mostrar9", { id_user: id_user }, function(data, status) {
        data = JSON.parse(data);
        mostrarform9(true);

        $("#id_user").val(data.id_user);
        $("#name").val(data.name);
        $("#nickname").val(data.nickname);
        $("#pass").val(data.pass);
        $("#type").val(data.type);
    })
}

init();