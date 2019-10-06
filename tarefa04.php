<!-- Exercício 01 e 02: -->

<!DOCTYPE html>
<html>
    <body>
        <form action="tarefa04.php?John=Doe" method="get">
            Nome: <input type="text" name="nome" id=""><br>
            Email: <input type="text" name="email" id=""><br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

<?php 
    var_dump($_GET);
    foreach ($_GET as $nome => $email) {
        echo "O nome é $nome e o e-mail é $email";
    }
?>

<br><br><br>
b. Modificar ​ imprimir.php​ para que imprima algum valor específico
de ​ $_GET​ .
c. Modificar ​ imprimir.php​ para que imprima todos os valores
utilizando um foreach.
?qualquer=coisa