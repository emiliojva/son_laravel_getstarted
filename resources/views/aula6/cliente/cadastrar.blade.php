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
    <h1>Aula 6 - Criando views e passando params </h1>
    <p>
        @foreach($nomes as $k=>$nome)
            {{ $nome .' '. $sobrenomes[$k] }} <br>
        @endforeach
    </p>
</body>
</html>