<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Listar</title>

        <style rel="stylesheet">
            tbody tr td {
                border: 1px solid gray;
                padding: 5px
            }

            .btn-novo {
                color: white;
                text-decoration: none;
                float: right;
                padding: 5px;
                border: 1px solid white;
                margin: 9px 5px;
            }

            section {
                background: indianred;
                border: 1px solid white;
            }

            h4 {
                position: relative;
                padding: 10px;
                margin: 5px 5px;
                display: inline-block;
                color: white
            }

            h4:before {
                content: "::";
                position: absolute;
                top: 9px;
                left: -2px;
            }

            table {
                width: 100%;
            }
        </style>
    </head>
    <body>
        <section>
            <h4>CLIENTES</h4>
            <a class="btn-novo" href="/admin/clientes/cadastrar">Cadastrar</a>
        </section>

        <table>
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>E-mail</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{$client->id}}</td>
                        <td>{{$client->name}}</td>
                        <td>{{$client->email}}</td>
                        <td>
                            <a href="/admin/clientes/{{ $client->id }}/editar">Editar</a> |
                            <a onclick="
                                    event.preventDefault();
                                    if(window.confirm('Deseja Realmente Excluir?')){
                                        window.location.href = '/admin/clientes/{{ $client->id }}/delete'
                                    }
                                    " href="#">Remover</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>