<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <form method="post">
    <table border="1">
        <th colspan="2">CALCULADORA</th>
        <tr><td>Introduzca número 1</td>
        <td><input type="text" name="num1"</td></tr>
        <tr><td>Introduzca número 2</td>
        <td><input type="text" name="num2"</td></tr>
        <tr><td colspan="2" align="center"><input type="submit" name="ok" value="Calcular"</td></tr>
    </table>
    </form>
    
        <?php
            function suma(&$n1,&$n2){
                return $n1+$n2;
            }
            if (isset($_POST["ok"])){
                $num1=$_POST["num1"];
                $num2=$_POST["num2"];
                
            }
            $resultado=suma($num1, $num2);
            echo "El resultado es $resultado"; 
        ?>
    </body>
</html>

//Ejemplo de una función que devuelve un array
<?php
   function sumar_restar($num1, $num2){
      $resultado = array(
         'suma' => $num1 + $num2,
         'resta' => $num1 - $num2
      );
      return $resultado;
   }
   $resultado_de_suma_resta = sumar_restar(20, 7);
   echo 'La suma es: ' . $resultado_de_suma_resta['suma'] . '<br />';
   echo 'La resta es: ' . $resultado_de_suma_resta['resta'] . '<br />';
?>
