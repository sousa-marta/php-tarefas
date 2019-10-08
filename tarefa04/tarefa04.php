<!-- Dúvida no Exercício 4, no item do checkbox, no name. -->

<!-- Exercício 01 e 02: -->
<!-- 
<!DOCTYPE html>
<html>
    <body>
        <form action="tarefa04.php" method="GET">
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
?> -->


<!-- Exercício 03: -->
<!-- 
<!DOCTYPE html>
<html>
    <body>
        <form action="tarefa04.php" method="POST">
            Nome: <input type="text" name="nome" id=""><br>
            Email: <input type="text" name="email" id=""><br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

<?php 
    echo "<h4>"."exercício 3"."</h4>";
    foreach ($_POST as $key => $value) {
        echo "$key : $value <br>";
    }
?>
 -->


<!-- Exercício 04: -->

<!DOCTYPE html>
<html>
    <body>
        <form action="tarefa04.php" method="POST">
            Nome: <input type="text" name="nome" id=""><br>
            Email: <input type="text" name="email" id=""><br><br>
            Como você ficou sabendo deste site?<br>
                Amigos<input type="checkbox" name="conhecimentoSite1" value="amigos"><br>
                Rede Social<input type="checkbox" name="conhecimentoSite2" value="redeSocial"><br>
                Propaganda<input type="checkbox" name="conhecimentoSite3" value="propaganda"><br><br>
            Qual seu gênero?<br>
                Feminino <input type="radio" name="genero" value="feminino"><br>
                Masculino <input type="radio" name="genero" value="masculino"><br>
                Prefiro não declarar <input type="radio" name="genero" value="naoInformado"><br><br>
            Dormiu bem ontem? Dê uma nota:
                <select name="dormiu">
                    <?php 
                    $notas = range(0,10); //cria uma array de 0 à 10.
                    foreach ($notas as $nota) { ?>
                        <option value="<?php $nota ?>"><?php echo $nota; ?></option>
                    <?php } ?>            
                </select><br><br>
            Aceita Termos e Condições?<br>
                Sim <input type="checkbox" name="termos" value="sim"><br>
                Não <input type="checkbox" name="termos" value="nao"><br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

<?php 
echo "<h4> Resultado: </h4>";
foreach ($_POST as $key => $value) {
    echo "$key : $value <br>";
}
echo "<br><br>";

/* Exercício 05: */
$headers = getallheaders();
foreach ($headers as $key => $value) {
    echo "$key : $value <br>";
}
echo "<br><br>";

/* Exercício 06: */
var_dump($GLOBALS);

?>



<br><br><br>