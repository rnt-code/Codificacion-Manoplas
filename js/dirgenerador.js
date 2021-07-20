$(document).ready(function() {

    console.log("La página cargó")

    $("#generar").click(function() {
        
        var tipop = $("#tipodeprueba").val();
        var marcak = $("#marcakit").val();
        var tecno = $("#tecnologia").val();
        var capac1 = $("#capacidad1").prop("checked");
        var capac2 = $("#capacidad2").prop("checked");
        var capac3 = $("#capacidad3").prop("checked");
        var capac4 = $("#capacidad4").prop("checked");
        var dest = $("#destino").val();
        var func = $("#funcion").val();
        var capcod = capacidad(capac1, capac2, capac3, capac4);
        
        if(capac1 == false && capac2 == false && capac3 == false && capac4 == false) {
            code = "Faltan datos"
            $("#codigo").css("color", "red")
        }
        else {
            if(tipop != "Seleccionar" && marcak != "Seleccionar" && tecno != "Seleccionar" && dest != "Seleccionar" && func != "Seleccionar") {
                var code = tipop + "" + marcak + "" + tecno + "" + capcod + "" + dest + "" + func;
                $("#codigo").css("color", "green")
            }
            else {
                code = "Faltan datos"
                $("#codigo").css("color", "red")
            }
        }
        $("#codigo").val(code);
        console.log("Código = "+code);
    });

    $("#borrar").click(function() {
        $("#tipodeprueba").val("Seleccionar");
        $("#marcakit").val("Seleccionar");
        $("#tecnologia").val("Seleccionar");
        $("#destino").val("Seleccionar");
        $("#funcion").val("Seleccionar");
        $("#capacidad1").prop("checked", false);
        $("#capacidad2").prop("checked", false);
        $("#capacidad3").prop("checked", false);
        $("#capacidad4").prop("checked", false);
        $("#codigo").val("");
    });
})

function capacidad(capac1, capac2, capac3, capac4) {
    
    var decimal = Number(capac4)*Math.pow(2,3) + Number(capac3)*Math.pow(2,2) + Number(capac2)*Math.pow(2,1) + Number(capac1)*Math.pow(2,0);

    switch(decimal) {

        case 1:
            return "C00";
        break;
        case 2:
            return "C01";
        break;
        case 3:
            return "C04";
        break;
        case 4:
            return "C02";
        break;
        case 5:
            return "C11";
        break;
        case 6:
            return "C05";
        break;
        case 7:
            return "C07";
        break;
        case 8:
            return "C03";
        break;
        case 9:
            return "C10";
        break;
        case 10:
            return "C14";
        break;
        case 11:
            return "C08";
        break;
        case 12:
            return "C06";
        break;
        case 13:
            return "C12";
        break;
        case 14:
            return "C13";
        break;
        case 15:
            return "C09";
        break;
    }
}