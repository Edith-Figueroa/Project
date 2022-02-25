function Confirmation(){
        var ans = confirm("Estas seguro que deseas Agregar el Registro");

        if(ans==true)
            return true

        else
            return false
}

function ConfirmationUpd(){
    var ans = confirm("Estas seguro que deseas Modificar el Registro");

    if(ans==true)
        return true

    else
        return false
}

function ConfirmationDel(){
    var ans = confirm("Estas seguro que deseas Eliminar el Registro");

    if(ans==true)
        return true

    else
        return false
}