
permite ​ editar e excluir

<?php

$users = json_decode(file_get_contents(__DIR__."/usuarios.json"),true); 

$userProfile = $_GET[$id];

var_dump($userProfile);





?>