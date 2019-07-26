<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Listar</title>

        <style rel="stylesheet">
            tbody tr td { border: 1px solid gray; padding :5px }
        </style>
    </head>
    <body>
        <table >
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>E-mail</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody >
                @foreach ($clients as $client)
                    <tr>
                        <td>{{$client->id}}</td>
                        <td>{{$client->name}}</td>
                        <td>{{$client->email}}</td>
                        <td><a href="#">Editar</a> | <a href="#">Remover</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>