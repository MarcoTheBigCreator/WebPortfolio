var tabla3;

function init() {
    mostrarform3(false);
    listar3();

    $("#formulario3").on("submit", function(e) {
        guardaryeditar3(e);
    })
}

//Función limpiar
function limpiar3() {
    $("#id_designskill").val("");
    $("#skill").val("");
    $("#percentage").val("");
    $("#language").val("");
}

//Función mostrar formulario
function mostrarform3(flag) {
    limpiar3();
    if (flag) {
        $("#listadoregistros3").hide();
        $("#formularioregistros3").show();
        $("#btnGuardar3").prop("disabled", false);
        $("#btnagregar3").hide();
    } else {
        $("#listadoregistros3").show();
        $("#formularioregistros3").hide();
        $("#btnagregar3").show();
    }
}

//Función cancelarform
function cancelarform3() {
    limpiar3();
    mostrarform3(false);
}

//Función Listar
function listar3() {
    tabla3 = $('#tbllistado3').dataTable({
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
            url: '../ajax/designskills.php?op=listar3',
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

function guardaryeditar3(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar3").prop("disabled", true);
    var formData = new FormData($("#formulario3")[0]);

    $.ajax({
        url: "../ajax/designskills.php?op=guardaryeditar3",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos) {
            bootbox.alert(datos);
            mostrarform3(false);
            tabla3.ajax.reload();
        }

    });
    limpiar3();
}

function mostrar3(id_designskill) {
    $.post("../ajax/designskills.php?op=mostrar3", { id_designskill: id_designskill }, function(data, status) {
        data = JSON.parse(data);
        mostrarform3(true);

        $("#id_designskill").val(data.id_designskill);
        $("#skill").val(data.skill);
        $("#percentage").val(data.percentage);
        $("#language").val(data.language);
    });
}

function eliminar3(id_designskill) {
    var decision = window.confirm('Are you sure you want to delete this record?');
    if (decision === true) {
        $.post("../ajax/designskills.php?op=eliminar3", { id_designskill: id_designskill }, function(data, status) {
            listar3(true);
        })
        window.alert('Record Deleted');
    } else {
        window.alert('Action canceled');
    }
}

init();