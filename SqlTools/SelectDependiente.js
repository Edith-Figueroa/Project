function recargarLista(){
    $.ajax({
        type:"POST",
        url:"database.php",
        data:"Departamentos_idDepartamentos=" + $('#Departamentos_idDepartamentos').val(),
        success:function(r){
            $('Cargos_idCargos').html(r);
        }
    })
}

$(document).ready(function(){
    recargarLista();

    $('#Departamentos_idDepartamentos').change(function(){
        recargarLista();
    });
})