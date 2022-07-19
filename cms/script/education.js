var tabla4;

function init() {
    mostrarform4(false);
    listar4();

    $("#formulario4").on("submit", function(e) {
        guardaryeditar4(e);
    })
}

//Función limpiar
function limpiar4() {
    $("#id_education").val("");
    $("#date").val("");
    $("#title").val("");
    $("#nameschool").val("");
    $("#description").val("");
    $("#language").val("");
}

//Función mostrar formulario
function mostrarform4(flag) {
    limpiar4();
    if (flag) {
        $("#listadoregistros4").hide();
        $("#formularioregistros4").show();
        $("#btnGuardar4").prop("disabled", false);
        $("#btnagregar4").hide();
    } else {
        $("#listadoregistros4").show();
        $("#formularioregistros4").hide();
        $("#btnagregar4").show();
    }
}

//Función cancelarform
function cancelarform4() {
    limpiar4();
    mostrarform4(false);
}

//Función Listar
function listar4() {
    tabla4 = $('#tbllistado4').dataTable({
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
            url: '../ajax/education.php?op=listar4',
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

function guardaryeditar4(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar4").prop("disabled", true);
    var formData = new FormData($("#formulario4")[0]);

    $.ajax({
        url: "../ajax/education.php?op=guardaryeditar4",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos) {
            bootbox.alert(datos);
            mostrarform4(false);
            tabla4.ajax.reload();
        }

    });
    limpiar4();
}

function mostrar4(id_education) {
    $.post("../ajax/education.php?op=mostrar4", { id_education: id_education }, function(data, status) {
        data = JSON.parse(data);
        mostrarform4(true);

        $("#id_education").val(data.id_education);
        $("#date").val(data.date);
        $("#title").val(data.title);
        $("#nameschool").val(data.nameschool);
        $("#description").val(data.description);
        $("#language").val(data.language);
    });
}

function eliminar4(id_education) {
    var decision = window.confirm('Are you sure you want to delete this record?');
    if (decision === true) {
        $.post("../ajax/education.php?op=eliminar4", { id_education: id_education }, function(data, status) {
            listar4(true);
        })
        window.alert('Record Deleted');
    } else {
        window.alert('Action canceled');
    }
}


init();