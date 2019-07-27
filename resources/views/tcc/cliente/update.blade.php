<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar Cliente</title>

        <style>

            form {
                border: 1px solid #0d3625;
                padding: 20px;
                width: max-content;
                display: block;
                margin: 0px auto;
            }

            form h3  {
                margin:0px 0px 10px 0px;
                text-align: center;
            }

            label {
                display: block;
                width: 200px;
            }

            input {
                margin-bottom: 20px;
                display: block;
                width: -webkit-fill-available;
                width: -moz-available;
            }



        </style>
    </head>
    <body>

        <form method="POST" action="/admin/clientes/gravar">

            <h3>Editar Cliente {{ explode(' ',$cliente->name)[0] }}</h3>

            {!! csrf_field() !!}

            <input type="hidden" name="data[id]" value="{{ $cliente->id }}" />

            <label for="name">Nome</label>
            <input type="text" id="name" name="data[name]"  value="{{ $cliente->name }}" />

            <br>

            <label for="email">E-mail</label>
            <input type="email" id="email" name="data[email]" value="{{ $cliente->email }}"/>

            <br>

            <button type="submit">Gravar</button>
            <button type="button" onclick="window.location.href = '/admin/clientes'">Voltar</button>

        </form>

    </body>
</html>