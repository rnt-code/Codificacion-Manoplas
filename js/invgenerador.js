$(document).ready(function() {
    
    console.log("La página cargó")
    
    $("#codigo").focus();

    $(document).keydown(function(e) {
        if(e.keyCode == 13) {
            console.log(e);
            e.preventDefault();
            return false;
        }
    });

    $("#leercodigo").click(function() {

        var code = $("#codigo").val();
        var longitud = code.length;
        //console.log(longitud);
        if(longitud == 12) {
            code = code.toUpperCase();
            var tipop = code.slice(0,1);
            var marcak = code.slice(1,3);
            var tecno = code.slice(3,5);
            var capac = code.slice(5,8);
            var dest = code.slice(8,10);
            var func = code.slice(10);
            //--------------------------------
            if(tipoprueba(tipop) == "ERR" || marcakit(marcak) == "ERR" || tecnologia(tecno) == "ERR" || capacidad(capac) == "ERR" || destino(dest) == "ERR" || funcion(func) == "ERR") {
                $("#codigo").css("color", "red");
            }
            else {
                $("#codigo").css("color", "green");
            }
            //--------------------------------
            if(tipoprueba(tipop) == "ERR") {
                $("#tipodeprueba").css("color", "red");
            }
            else {
                $("#tipodeprueba").css("color", "black");
            }
            $("#tipodeprueba").val(tipoprueba(tipop));
            //--------------------------------
            if(marcakit(marcak) == "ERR") {
                $("#marcadekit").css("color", "red");
            }
            else {
                $("#marcadekit").css("color", "black");
            }
            $("#marcadekit").val(marcakit(marcak));
            //--------------------------------
            if(tecnologia(tecno) == "ERR") {
                $("#tecnologia").css("color", "red");
            }
            else {
                $("#tecnologia").css("color", "black");
            }
            $("#tecnologia").val(tecnologia(tecno)); 
            //--------------------------------
            if(capacidad(capac) == "ERR") {
                $("#capacidades").css("color", "red");
            }
            else {
                $("#capacidades").css("color", "black");
            }              
            $("#capacidades").val(capacidad(capac));
            //--------------------------------
            if(destino(dest) == "ERR") {
                $("#destino").css("color", "red");
            }
            else {
                $("#destino").css("color", "black");
            }    
            $("#destino").val(destino(dest));
            //--------------------------------
            if(funcion(func) == "ERR") {
                $("#funcion").css("color", "red");
            }
            else {
                $("#funcion").css("color", "black");
            }  
            $("#funcion").val(funcion(func));
            //--------------------------------
        }
        else {
            alert("Código erróneo");
        }
    });

    $("#borrar").click(function() {
        $("#tipodeprueba").val("");
        $("#marcadekit").val("");
        $("#tecnologia").val("");
        $("#destino").val("");
        $("#funcion").val("");
        $("#capacidades").val("");
        $("#codigo").css("color", "green")
        $("#codigo").val("");
        $("#codigo").focus();
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