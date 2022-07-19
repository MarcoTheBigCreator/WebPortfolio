var tabla6;

function init() {
    mostrarform6(false);
    listar6();

    $("#formulario6").on("submit", function(e) {
        guardaryeditar6(e);
    })
}

//Función limpiar
function limpiar6() {
    $("#id_geninfo").val("");
    $("#description").val("");
    $("#location").val("");
    $("#clocation").val("");
    $("#age").val("");
    $("#gender").val("");
    $("#language").val("");
}

//Función mostrar formulario
function mostrarform6(flag) {
    limpiar6();
    if (flag) {
        $("#listadoregistros6").hide();
        $("#formularioregistros6").show();
        $("#btnGuardar6").prop("disabled", false);
        $("#btnagregar6").hide();
    } else {
        $("#listadoregistros6").show();
        $("#formularioregistros6").hide();
        $("#btnagregar6").show();
    }
}

//Función cancelarform
function cancelarform6() {
    limpiar6();
    mostrarform6(false);
}

//Función Listar
function listar6() {
    tabla6 = $('#tbllistado6').dataTable({
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
            url: '../ajax/geninfo.php?op=listar6',
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

function guardaryeditar6(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar6").prop("disabled", true);
    var formData = new FormData($("#formulario6")[0]);

    $.ajax({
        url: "../ajax/geninfo.php?op=guardaryeditar6",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos) {
            bootbox.alert(datos);
            mostrarform6(false);
            tabla6.ajax.reload();
        }

    });
    limpiar6();
}

function mostrar6(id_geninfo) {
    $.post("../ajax/geninfo.php?op=mostrar6", { id_geninfo: id_geninfo }, function(data, status) {
        data = JSON.parse(data);
        mostrarform6(true);

        $("#id_geninfo").val(data.id_geninfo);
        $("#description").val(data.description);
        $("#location").val(data.location);
        $("#clocation").val(data.clocation);
        $("#age").val(data.age);
        $("#gender").val(data.gender);
        $("#language").val(data.language);
    });
}


function eliminar6(id_geninfo) {
    var decision = window.confirm('Are you sure you want to delete this record?');
    if (decision === true) {
        $.post("../ajax/geninfo.php?op=eliminar6", { id_geninfo: id_geninfo }, function(data, status) {
            listar6(true);
        })
        window.alert('Record Deleted');
    } else {
        window.alert('Action canceled');
    }
}

init();