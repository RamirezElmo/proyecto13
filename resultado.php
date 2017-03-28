<!--
/* #################################################################### \
||                                                                     ||
|| Use of this software is strictly prohibited.                        *#
|| # Copyright (C) 2017  Moises Ramirez.                               *#
||---------------------------------------------------------------------*#
||---------------------------------------------------------------------*#
||              UNIVERSIDAD AUTONOMA DE CHIAPAS                        ||
\ ################################################################### */
-->
<html>
    <style type="text/css">
        body{
            background: pink;
            text-align: center;
        }
    </style>
    <body>
        <!--MGP -->
<?php
    
if($_POST ["valor1"] !="" and $_POST ["valor2"] !="")
{
    if($_POST ["operador"] == "suma")
    {
        echo 'El resultado de la suma es: <br>';
        echo "<br>";
        echo $resultado = $_POST ["valor1"] + $_POST ["valor2"];
        echo '<br/><a href="index.php">Volver</a>';
    }
    elseif ($_POST ["operador"] == "resta")
        {
        echo 'El resultado de la resta es: <br>';
            echo "<br>";
        echo $resultado = $_POST ["valor1"] - $_POST ["valor2"];
        echo ('<br/><a href="index.php">Volver</a>');
    }
    elseif ($_POST ["operador"] == "multiplicacion")
        {
        echo 'El resultado de la multiplicacion es: <br>';
            echo "<br>";
        echo $resultado = $_POST ["valor1"] * $_POST ["valor2"];
        echo ('<br/><a href="index.php">Volver</a>');
    }
    elseif ($_POST ["operador"] == "division")
        {
        echo 'El resultado de la division es: <br>';
            echo "<br>";
        echo $resultado = $_POST ["valor1"] / $_POST ["valor2"];
        echo ('<br/><a href="index.php">Volver</a>');
    }
}
else
{
    print("Ingresa alg&uacute; n valor");
    print('<br /><a href="index.php">Volver</a>');
    
}

?>
</body>
    <!--MGP -->
</html>