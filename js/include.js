$(document).ready(function () {

//****   SIMULADOR  ****/	
    var ambiente = '';

    $.Simulador = function (img) {
        var d = 'images/catalogo/grafiatos/' + img;

        if (ambiente == 'simulador-externo1.png') {
            $("#quadro").css({"background": "url(" + d + ")", "background-size": "15%"});
        } else {
            $("#quadro").css({"background": "url(" + d + ")", "background-size": "25%"});
        }
        //alert(d);
    }
    $.Ambiente = function (img) {
        ambiente = img;
        var d = 'catalogo/simulador/' + img;
        $("#ambienteFoto").css({"background": "url(" + d + ")"});

        //alert(d);
    }

});
