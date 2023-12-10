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
    <a href="inserir.html">Inserir</a>
    <h1>Lista de Contatos</h1>



    <h3>Lista de contatos</h3>
    <ul class="list-group list-group-horizontal">
        <!-- INPUT GET COM ID -->
        <input id="input-id" type="text" placeholder="Ex.: 1 (0 recomeça)" class="input-group-text flex-nowrap" method="get">
        <button type="submit" class="input-group-text flex-nowrap" id="btn-input" onclick="get()">Consultar ID</button>
        
    </ul>
    
    
    <ul id="ul-contatos" class="list-group list-group-horizontal">
        <ul id="id0" class="list-group list-group-flush">

        </ul>
        <ul id="id1" class="list-group list-group-flush">

        </ul>
        <ul id="id2" class="list-group list-group-flush">

        </ul>
        <ul id="id3" class="list-group list-group-flush">

        </ul>
        <ul id="id4" class="list-group list-group-flush">

        </ul>
        <ul id="id5" class="list-group list-group-flush">

        </ul>
    </ul>

    <br>
    <div id="texts">
        <h2>Back-end da lista de contatos</h2>
        <p>Crie uma API REST que armazenará as pessoas e seus contatos. Uma pessoa pode ter vários contatos como telefone, e-mail ou whatsapp. A API deve permitir criar, atualizar, obter e exclua as pessoas e os contatos.</p>
        <h2>Front-end da lista de contatos</h2>
        <>Crie um aplicativo Web que explore a API criada na segunda atribuição. O design da interface do usuário é totalmente até você.</p>
    </div>

    <script>
        fetch ('http://127.0.0.1:3000/clients', { // autorun onload page
            method: 'GET'
        })
        .then(response => response.json())
        .then(data => {
            for (var i = 0; i < data.length; i++) {
                var dado = `
                <li class="list-group-item list-group-flush">${data[i].id}</li>
                <li class="list-group-item list-group-flush">${data[i].nome}</li>
                <li class="list-group-item list-group-flush">${data[i].email}</li>
                <li class="list-group-item list-group-flush">${data[i].telefone}</li>
                <button id="btn-edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                </button>
                <button id="btn-edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                    </svg>
                </button>
                `
                document.getElementById(`id${i}`).innerHTML = dado
            }
            
        })

        function get() { // chamada da função para execução
            var id = Number(document.getElementById('input-id').value)
            if (id == 0) return window.location.reload()
            fetch (`http://127.0.0.1:3000/clients/${id}`, {
                method: 'GET'
            })
            .then(response => response.json())
            .then(data => {
                var dado = `
                <li class="list-group-item list-group-flush">${data.id}</li>
                <li class="list-group-item list-group-flush">${data.nome}</li>
                <li class="list-group-item list-group-flush">${data.email}</li>
                <li class="list-group-item list-group-flush">${data.telefone}</li>
                <button id="btn-edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                    </svg>
                </button>
                <button id="btn-edit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                    </svg>
                </button>
                `
                document.getElementById(`id0`).innerHTML = dado
                document.getElementById('id1').innerHTML = ''
                document.getElementById('id2').innerHTML = ''
                document.getElementById('id3').innerHTML = ''
                document.getElementById('id4').innerHTML = ''
                document.getElementById('id5').innerHTML = ''
            })
        }
    </script>
</body>
</html>