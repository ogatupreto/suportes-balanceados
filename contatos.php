<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="javascript" href="server.js">
</head>
<body>
    <a href="index.php">Suportes Balanceados</a>
    <h1>Lista de Contatos</h1>

    <h3>Lista de contatos</h3>
    <button type="submit" class="input-group-text flex-nowrap" id="btn-input" onclick="get()">GET</button>
    <!-- <button type="submit" class="input-group-text flex-nowrap" id="btn-input" onclick="post()">POST</button> -->
    
    <ul id="ul-contatos" class="list-group list-group-horizontal">
        <!-- li gerados automaticamente em JS-->
    </ul>

    <br>
    <div id="texts">
        <h2>Back-end da lista de contatos</h2>
        <p>Crie uma API REST que armazenará as pessoas e seus contatos. Uma pessoa pode ter vários contatos como telefone, e-mail ou whatsapp. A API deve permitir criar, atualizar, obter e exclua as pessoas e os contatos.</p>
        <h2>Front-end da lista de contatos</h2>
        <>Crie um aplicativo Web que explore a API criada na segunda atribuição. O design da interface do usuário é totalmente até você.</p>
    </div>

    <script>
        fetch ('http://127.0.0.1:3000/clients', {
            method: 'GET'
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.length);
            console.log(data[0]);
            console.log(data[1]);
            console.log(data[2]);
            
        })
        function get() {
            fetch('http://127.0.0.1:3000/clients', {
                method: 'GET'
            })
            .then(response => response.json())
            .then(data => {
                var btn = document.getElementById('btn-input').value;
                var ul = document.getElementById('ul-contatos').innerHTML;
                
                for (var i = 0; i <= data.length; i++) {
                    var id      = data[i].id;
                    var nome    = data[i].nome;
                    var email   = data[i].email;
                    var tel     = data[i].telefone;

                    ul += '<li class="list-group-items">' + id + "</li>";
                    ul += '<li class="list-group-items">' + nome + "</li>";
                    ul += '<li class="list-group-items">' + email + "</li>";
                    ul += '<li class="list-group-items">' + tel + "</li>";

                    document.getElementById('ul-contatos').innerHTML = ul;
                }
            });
        }
    </script>

</body>
</html>