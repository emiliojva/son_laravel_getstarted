<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar Cliente</title>
    </head>
    <body>

        <form method="POST" action="admin/clientes/gravar">

            {!! csrf_field() !!}

            <input type="hidden" name="id" value="{{ $cliente->id }}">

            <label for="name">Nome</label>
            <input type="text" id="name" name="name" value="{{ $cliente->id }}">

            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" value="{{ $cliente->email }}">

            <button type="submit">Enviar</button>

        </form>

    </body>
</html>