<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <input type="date" name="dataUsuario">
            <input type="submit" value="Enviar">
        </form>
        <?php
        $data = $_GET['dataUsuario'];
        $dia_semana=date('w', strtotime($data));
        switch ($dia_semana){
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo 'Dia útil';
                break;
            case 6:
            case 0:
                echo 'FDS';
                break;
        }
        ?>
    </body>
</html>
