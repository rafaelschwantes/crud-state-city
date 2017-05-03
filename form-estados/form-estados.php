<?php
include "../form-estados/includes/conect.php";
include "../form-estados/includes/conect-test.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="utf-8"/>
    <title>Title</title>
</head>

<!-- STATES CITY -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="api-estado-cidade/function.js"></script>

<script type="application/javascript">

    // FUNCTION ENVIAR (VALIDAÇÕES)
    function enviar(){
    var f = document.getElementById('formulario');
        document.forms[0].submit();
    }
</script>


<body>
<div class="box-body">
        <form name="formulario" id="formulario" action='controlers/insert-report-include.php' method="POST">
        <!--form name="formulario" id="formulario" action='./controlers/insert-report.php' method="POST"-->



        <div>
            <label for="nome">Nome: </label>
            <div>
                <input type="text" id="nome" name="nome" />
            </div>
        </div>
        <br><br>
        <div>
            <label for="estados">Estado: </label>
            <div>
                <select id="estados" name="estados" ></select>
            </div>
        </div>
        <br><br>
        <div>
            <label for="cidades">Cidade: </label>
            <div>
                <select id="cidades" name="cidades" onChange="myChange(this);"></select>

            </div>
        </div>

        <br><br>

        <div>
            <div>
                <input type="submit" id="enviar" name="enviar" value="ENVIAR" />
            </div>
        </div>

        <br><br>

        <div>
           <label></label>
            <div>
                <input class="btn btn-primary" value="Iniciar cadastro" onclick="javascript:void(enviar());" />
           </div>
        </div>

    </form>
</div>


</body>
</html>