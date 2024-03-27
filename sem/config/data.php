<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tipo"])) {
    include('../db/db.php');
    header('Content-Type: application/json');
    extract($_POST);
    $accion = match ($tipo) {
        'panel' => function () {
            echo json_encode('juvenal', JSON_UNESCAPED_UNICODE);
        },
        'coaguila'=>function () {
            echo json_encode('leandro', JSON_UNESCAPED_UNICODE);
        },'suma'=>function () {
            extract($_POST);
            $suma=$valor1+$valor2;
            echo json_encode($suma, JSON_UNESCAPED_UNICODE);
        },
        'usuario' => function () {
            extract($_POST);
            if(isset($_POST["accion"])) {
                if ($accion == 'ver') {

                }
            }
            /* echo json_encode($accion, JSON_UNESCAPED_UNICODE); */
        },
        
    };
    $accion();
}
