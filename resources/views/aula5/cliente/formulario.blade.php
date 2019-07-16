<?php
/**
 * Created by PhpStorm.
 * User: Berguerians
 * Date: 7/16/2019
 * Time: 11:08 AM
 */
?>
<html>
<body>
<h1>Aula 5 - Rotas amigáveis POST e formulários </h1>
<form method="POST" action="/aula5/cliente/cadastrar">
    {{ csrf_field() }} <!--<input type="hidden" name="_token" value="$csrf_token">-->
    <label for="name">Name</label>
    <input type="text" name="name" id="name"/>
    <button type="submit">Enviar</button>
</form>
</body>
</html>