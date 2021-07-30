$(document).ready(function() {

    $("#dtipodeprueba").val("");
    $("#dmarcakit").val("");
    $("#dtecnologia").val("");
    $("#ddestino").val("");
    $("#dfuncion").val("");
    $("#dcapacidad1").prop("checked", false);
    $("#dcapacidad2").prop("checked", false);
    $("#dcapacidad3").prop("checked", false);
    $("#dcapacidad4").prop("checked", false);
    $("#codcalculado").val("");

    $("#generar").click(function() {
        
        let dtipop = $("#dtipodeprueba").val();
        let dmarcak = $("#dmarcakit").val();
        let dtecno = $("#dtecnologia").val();
        let dcapac1 = $("#dcapacidad1").prop("checked");
        let dcapac2 = $("#dcapacidad2").prop("checked");
        let dcapac3 = $("#dcapacidad3").prop("checked");
        let dcapac4 = $("#dcapacidad4").prop("checked");
        let ddest = $("#ddestino").val();
        let dfunc = $("#dfuncion").val();
        let dcapcod = dcapacidad(dcapac1, dcapac2, dcapac3, dcapac4);
        
        if(dcapac1 == false && dcapac2 == false && dcapac3 == false && dcapac4 == false) {
            dcode = "Faltan datos"
            $("#codcalculado").css("color", "red")
        }
        else {
            if(dtipop != null && dmarcak != null && dtecno != null && ddest != null && dfunc != null) {
                var dcode = dtipop + "" + dmarcak + "" + dtecno + "" + dcapcod + "" + ddest + "" + dfunc;
                $("#codcalculado").css("color", "green")
            }
            else {
                dcode = "Faltan datos"
                $("#codcalculado").css("color", "red")
            }
        }
        $("#codcalculado").val(dcode);
    });

    $("#dborrar").click(function() {
        $("#dtipodeprueba").val("");
        $("#dmarcakit").val("");
        $("#dtecnologia").val("");
        $("#dcapacidad1").prop("checked", false);
        $("#dcapacidad2").prop("checked", false);
        $("#dcapacidad3").prop("checked", false);
        $("#dcapacidad4").prop("checked", false);
        $("#ddestino").val("");
        $("#dfuncion").val("");
        $("#codcalculado").val("");
    });

    $("#dtipodeprueba").change(function() {
        $("#codcalculado").val("");
    });
    $("#dmarcakit").change(function() {
        $("#codcalculado").val("");
    });
    $("#dtecnologia").change(function() {
        $("#codcalculado").val("");
    });
    $("#dcapacidad1").change(function() {
        $("#codcalculado").val("");
    });
    $("#dcapacidad2").change(function() {
        $("#codcalculado").val("");
    });
    $("#dcapacidad3").change(function() {
        $("#codcalculado").val("");
    });
    $("#dcapacidad4").change(function() {
        $("#codcalculado").val("");
    });
    $("#ddestino").change(function() {
        $("#codcalculado").val("");
    });
    $("#dfuncion").change(function() {
        $("#codcalculado").val("");
    });
})

function dcapacidad(dcapac1, dcapac2, dcapac3, dcapac4) {
    
    let decimal = Number(dcapac4)*Math.pow(2,3) + Number(dcapac3)*Math.pow(2,2) + Number(dcapac2)*Math.pow(2,1) + Number(dcapac1)*Math.pow(2,0);
    
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

