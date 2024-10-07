var usu_id = $("#useridx").val();

function init(){
    $("#detalle_form").on("submit",function(e){
        guardaryeditar(e);	
    });
}

$(document).ready(function(){ // load para haga algo cuando se carga
    $.post("../../controller/registro.php?op=insert",{usu_id:usu_id},function(data){
        data = JSON.parse(data);
        $('#reg_id').val(data.reg_id);

        llenartabla(data.reg_id);
    

    });
});

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#detalle_form")[0]);
    $.ajax({
        url: "../../controller/registro.php?op=insertdetalle",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){ 
            Swal.fire(
                'Mesa De Entrada',
                'Se registro Correctamente',
                'success'
            );
            $("#modalarchivo").modal('hide');
            var reg_id =  $('#reg_id').val();
            llenartabla(reg_id);
           
        }
    });        
}

$(document).on("click","#btnguardar", function(){
    var reg_id = $('#reg_id').val();
    var reg_asun = $('#reg_asun').val();
    var reg_desc = $('#reg_desc').val();

    if(reg_asun=='' || reg_desc==''){
        Swal.fire(
            'Mesa De Entrada',
            'Campos vacios, por favor verificar',
            'error'
        );
        
    }else{
        $.post("../../controller/registro.php?op=update",{reg_id:reg_id,reg_asun:reg_asun,reg_desc:reg_desc},function(data){
            let timerInterval;
            Swal.fire({
            title: 'Mesa de Entrada',
            html: 'Guardado Registro...Espere..<b></b>.',
            timer: 2000,
            timerProgressBar: true,
            onBeforeOpen: () => {
                Swal.showLoading();
                timerInterval = setInterval(() => {
                const content = Swal.getContent();
                if (content) {
                    const b = content.querySelector('b');
                    if (b) {
                    b.textContent = Swal.getTimerLeft();
                    }
                }
                }, 100);

                
            },
            onClose: () => {
                clearInterval(timerInterval);
            }
            }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                    location.reload();
                }
            });
        });

    }
  

});

$(document).on("click","#btnadd", function(){
    $("#modalarchivo").modal('show');
});

function llenartabla(reg_id){
    tabla= $('#detalle_data').DataTable({
        "aProcessing": true,//Activamos el procesamiento del datatables
        "aServerSide": true,//Paginación y filtrado realizados por el servidor
        dom: 'Bfrtip',//Definimos los elementos del control de tabla
        "ajax":{
        url:"../../controller/registro.php?op=listardetalle",
        type : "post",
        data:{reg_id:reg_id},						
            error: function(e){
                console.log(e.responseText);
            },
        },
        "bDestroy": true,
        "responsive": true,
        "bInfo":true,
        "iDisplayLength": 10,
        "order": [[ 0, "desc" ]],
        "language": {
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {          
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        },
    });
}

function eliminar(regd_id){
    $.post("../../controller/registro.php?op=deletedetalle",{regd_id:regd_id},function(data){
        Swal.fire(
            'Mesa De Entrada',
            'Se elimino correctamente',
            'info'
        );
    });

    var reg_id =  $('#reg_id').val();
    llenartabla(reg_id);
}




init();