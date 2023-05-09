<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            Informe um número:<br>
            <input type="number" name="num">
            <input type="submit" value="Enviar">
        </form>
        <?php
            $num = $_GET['num'];
            for($j=1;$j<=$num;$j++){
                $cont = 0;
                for($i=1;$i<=$num;$i++){
                    $resto = $j%$i;
                    if($resto==0)
                        $cont++;
                }
                if($cont==2){
                    echo "$j ";
                }
            }
            echo " primos";
        ?>
    </body>
</html>
