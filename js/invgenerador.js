$(document).ready(function() {
    
    $("#itipodeprueba").val("");
    $("#imarcadekit").val("");
    $("#itecnologia").val("");
    $("#idestino").val("");
    $("#ifuncion").val("");
    $("#icapacidades").val("");
    $("#codingresado").css("color", "green")
    $("#codingresado").val("");
    $("#codingresado").focus();
    $("#codingresado").focus();

    $("#leer").click(function() {

        let icode = $("#codingresado").val();
        let longitud = icode.length;

        if(longitud == 12) {
            icode = icode.toUpperCase();
            let tipop = icode.slice(0,1);
            let marcak = icode.slice(1,3);
            let tecno = icode.slice(3,5);
            let capac = icode.slice(5,8);
            let dest = icode.slice(8,10);
            let func = icode.slice(10);
            //--------------------------------
            if(tipoprueba(tipop) == "ERR" || marcakit(marcak) == "ERR" || tecnologia(tecno) == "ERR" || capacidad(capac) == "ERR" || destino(dest) == "ERR" || funcion(func) == "ERR") {
                $("#codingresado").css("color", "red");
            }
            else {
                $("#codingresado").css("color", "green");
            }
            //--------------------------------
            if(tipoprueba(tipop) == "ERR") {
                $("#itipodeprueba").css("color", "red");
            }
            else {
                $("#itipodeprueba").css("color", "black");
            }
            $("#itipodeprueba").val(tipoprueba(tipop));
            //--------------------------------
            if(marcakit(marcak) == "ERR") {
                $("#imarcadekit").css("color", "red");
            }
            else {
                $("#imarcadekit").css("color", "black");
            }
            $("#imarcadekit").val(marcakit(marcak));
            //--------------------------------
            if(tecnologia(tecno) == "ERR") {
                $("#itecnologia").css("color", "red");
            }
            else {
                $("#itecnologia").css("color", "black");
            }
            $("#itecnologia").val(tecnologia(tecno)); 
            //--------------------------------
            if(capacidad(capac) == "ERR") {
                $("#icapacidades").css("color", "red");
            }
            else {
                $("#icapacidades").css("color", "black");
            }              
            $("#icapacidades").val(capacidad(capac));
            //--------------------------------
            if(destino(dest) == "ERR") {
                $("#idestino").css("color", "red");
            }
            else {
                $("#idestino").css("color", "black");
            }    
            $("#idestino").val(destino(dest));
            //--------------------------------
            if(funcion(func) == "ERR") {
                $("#ifuncion").css("color", "red");
            }
            else {
                $("#ifuncion").css("color", "black");
            }  
            $("#ifuncion").val(funcion(func));
            //--------------------------------
        }
        else {
            alert("Código erróneo");
        }
    });

    $("#iborrar").click(function() {
        $("#itipodeprueba").val("");
        $("#imarcadekit").val("");
        $("#itecnologia").val("");
        $("#idestino").val("");
        $("#ifuncion").val("");
        $("#icapacidades").val("");
        $("#codingresado").css("color", "green")
        $("#codingresado").val("");
        $("#codingresado").focus();
    });
})

function tipoprueba(tipop) {
    
    if(tipop == "F") return "Funcional";
    if(tipop == "S") return "Seg. Eléctrica";
    return "ERR";
}

function marcakit(marcak) {
    
    if(marcak == "HS") return "Hisense";
    if(marcak == "MD") return "Midea";
    if(marcak == "AX") return "Aux";
    if(marcak == "SM") return "Samsung";
    return "ERR";
}

function tecnologia(tecno) {

    if(tecno == "IV") return "Inverter";
    if(tecno == "ON") return "On/Off";
    return "ERR";
}

function capacidad(capac) {
    
    if(capac == "C00") return "9k";
    if(capac == "C01") return "12k";
    if(capac == "C02") return "18k";
    if(capac == "C03") return "24k";
    if(capac == "C04") return "9k-12k";
    if(capac == "C05") return "12k-18k";
    if(capac == "C06") return "18k-24k";
    if(capac == "C07") return "9k-12k-18k";
    if(capac == "C08") return "9k-12k-24k";
    if(capac == "C09") return "9k-12k-18k-24k";
    if(capac == "C10") return "9k-24k";
    if(capac == "C11") return "9k-18k";
    if(capac == "C12") return "9k-18k-24k";
    if(capac == "C13") return "12k-18k-24k";
    if(capac == "C14") return "12k-24k";
    return "ERR";
}

function destino(dest) {
    
    if(dest == "FS") return "p/Frío Solo";
    if(dest == "FC") return "p/Frío-Calor";
    if(dest == "AM") return "p/Ambos";
    return "ERR";
}

function funcion(func) {

    if(func == "UE") return "Unidad Exterior";
    if(func == "UI") return "Unidad Interior";
    return "ERR";
}