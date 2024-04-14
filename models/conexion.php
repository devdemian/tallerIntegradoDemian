<?php
/*Datos de conexion a la base de datos*/

function Conectarse()
{
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "base_colegabot";
    if (!($link = mysqli_connect("localhost", "root", ""))) {
        echo "No Se Encuentra Conexion a la Base de Datos";
        exit();
    }
    if (!mysqli_select_db($link, $db_name)) {
        echo "No Se Conecta a la Base de Datos Indicada";
        exit();
    }
    return $link;
}
