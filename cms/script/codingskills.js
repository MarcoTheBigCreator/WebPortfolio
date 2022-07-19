var tabla1;

function init() {
    mostrarform1(false);
    listar1();

    $("#formulario1").on("submit", function(e) {
        guardaryeditar1(e);
    })
}

//Función limpiar
function limpiar1() {
    $("#id_codingskill").val("");
    $("#language").val("");
    $("#percentage").val("");
}

//Función mostrar formulario
function mostrarform1(flag) {
    limpiar1();
    if (flag) {
        $("#listadoregistros1").hide();
        $("#formularioregistros1").show();
        $("#btnGuardar1").prop("disabled1", false);
        $("#btnagregar1").hide();
    } else {
        $("#listadoregistros1").show();
        $("#formularioregistros1").hide();
        $("#btnagregar1").show();
    }
}

//Función cancelarform
function cancelarform1() {
    limpiar1();
    mostrarform1(false);
}

//Función Listar
function listar1() {
    tabla1 = $("#tbllistado1")
        .dataTable({
            aProcessing: true, //Activamos el procesamiento del datatables
            aServerSide: true, //Paginación y filtrado realizados por el servidor
            dom: "Bfrtip", //Definimos los elementos del control de tabla
            buttons: ["copyHtml5", "excelHtml5", "csvHtml5", "pdf"],
            ajax: {
                url: "../ajax/codingskills.php?op=listar1",
                type: "get",
                dataType: "json",
                error: function(e) {
                    console.log(e.responseText);
                },
            },
            bDestroy: true,
            iDisplayLength: 5, //Paginación
            order: [
                [0, "desc"]
            ], //Ordenar (columna,orden)
        })
        .DataTable();
}
//Función para guardar o editar

function guardaryeditar1(e) {
    e.preventDefault(); //No se activará la acción predeterminada del evento
    $("#btnGuardar1").prop("disabled", true);
    var formData = new FormData($("#formulario1")[0]);

    $.ajax({
        url: "../ajax/codingskills.php?op=guardaryeditar1",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,

        success: function(datos) {
            bootbox.alert(datos);
            mostrarform1(false);
            tabla1.ajax.reload();
        },
    });
    limpiar1();
}

function mostrar1(id_codingskill) {
    $.post("../ajax/codingskills.php?op=mostrar1", { id_codingskill: id_codingskill }, function(data, status) {
        data = JSON.parse(data);
        mostrarform1(true);

        $("#id_codingskill").val(data.id_codingskill);
        $("#language").val(data.language);
        $("#percentage").val(data.percentage);
    });
}

function eliminar1(id_codingskill) {
    var decision = window.confirm('Are you sure you want to delete this record?');
    if (decision === true) {
        $.post("../ajax/codingskills.php?op=eliminar1", { id_codingskill: id_codingskill }, function(data, status) {
            listar1(true);
        })
        window.alert('Record Deleted');
    } else {
        window.alert('Action canceled');
    }
}

init();