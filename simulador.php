<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>

        <div id="simulador">

            <div id="quadro">
                <div id="ambienteFoto"></div>
            </div>

            <div id="paleta">
                <figure style="background:url('images/catalogo/grafiatos/BT01_grafiato_branco_arizona.jpg')" onclick="$.Simulador('BT01_grafiato_branco_arizona.jpg');" title="BT01 grafiato branco arizona"></figure>
                <figure style="background:url('images/catalogo/grafiatos/BT02_grafiato_cabelo_de_anjo.jpg')" onclick="$.Simulador('BT02_grafiato_cabelo_de_anjo.jpg');" title="BT02 grafiato cabelo de anjo"></figure>
            </div>

            <div id="ambiente">
                <figure style="background:url(catalogo/simulador/simulador.png); background-size: 100%" onclick="$.Ambiente('simulador.png')"></figure>
                <figure style="background:url(catalogo/simulador/simulador-quarto.png); background-size: 100%" onclick="$.Ambiente('simulador-quarto.png')"></figure>
                <figure style="background:url(catalogo/simulador/simulador-quarto2.png); background-size:100%" onclick="$.Ambiente('simulador-quarto2.png');"></figure>
                <figure style="background:url(catalogo/simulador/simulador-externo1.png); background-size:100%" onclick="$.Ambiente('simulador-externo1.png');"></figure>
            </div>

        </div>


        <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>

        <script type="text/javascript">
                    $(document).ready(function () {

                        var ambiente = '';

                        $.Simulador = function (img) {
                            var dir = 'images/catalogo/grafiatos/' + img;

                            if (ambiente == 'simulador-externo1.png') {
                                $("#quadro").css({"background": "url(" + dir + ")", "background-size": "15%"});
                            } else {
                                $("#quadro").css({"background": "url(" + dir + ")", "background-size": "25%"});
                            }
                            //alert(dir);
                        }

                        $.Ambiente = function (img) {
                            ambiente = img;
                            var dir = 'catalogo/simulador/' + img;

                            $("#ambienteFoto").css({"background": "url(" + dir + ") no-repeat", "background-size": "100%"});

                            //alert(ambiente);
                        }

                    });
        </script>
    </body>
</html>
