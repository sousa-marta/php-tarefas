<?php 
    var_dump($_GET);
?>

<!DOCTYPE html>
<html>
    <body>
        <form ​action​ = "imprimir.php" ​method​= "get">
            Nome: <input type = "text" name="nome"><br>
            E​-​mail​: <input type​= "text"​ name​= "email"​><br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>


<br><br><br>
a.O que acontece agora em ​ imprimir.php​ ?
b. Modificar ​ imprimir.php​ para que imprima algum valor específico
de ​ $_GET​ .
c. Modificar ​ imprimir.php​ para que imprima todos os valores
utilizando um foreach.
