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
    echo "<h4>"."exercício 2b"."</h4>";
    var_dump($_GET);
    echo "<br>".$_GET['nome']."<br>";

    echo "<h4>"."exercício 2c"."</h4>";
    foreach ($_GET as $key => $value) {
        echo "$key : $value <br>";
    }
?>

<br><br><br>