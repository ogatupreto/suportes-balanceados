<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewport</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <a href="contatos.php">Lista de Contatos</a><br>
    <h1>Suportes Balanceados</h1>
    
    <form action="index.php" method="post" class="input-group-text flex-nowrap" id="div-input">
        <span class="input-group-text flex-nowrap" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-type" viewBox="0 0 16 16">
                <path d="m2.244 13.081.943-2.803H6.66l.944 2.803H8.86L5.54 3.75H4.322L1 13.081h1.244zm2.7-7.923L6.34 9.314H3.51l1.4-4.156zm9.146 7.027h.035v.896h1.128V8.125c0-1.51-1.114-2.345-2.646-2.345-1.736 0-2.59.916-2.666 2.174h1.108c.068-.718.595-1.19 1.517-1.19.971 0 1.518.52 1.518 1.464v.731H12.19c-1.647.007-2.522.8-2.522 2.058 0 1.319.957 2.18 2.345 2.18 1.06 0 1.716-.43 2.078-1.011zm-1.763.035c-.752 0-1.456-.397-1.456-1.244 0-.65.424-1.115 1.408-1.115h1.805v.834c0 .896-.752 1.525-1.757 1.525"/>
            </svg>
        </span>
        <input name="text" type="text"class="form-control" placeholder="Escreva aqui">
        <input name="botao" type="submit" class="input-group-text flex-nowrap" id="btn-input">
    </form>

    <br>
    <div id="texts">
        <p>Escreva uma função que receba uma string de colchetes como entrada e determine se a ordem dos parênteses é válido. Um colchete é considerado qualquer um dos seguintes caracteres: (, ),{, }, [, ou ].</p>
        <p>Dizemos que uma sequência de colchetes é válida se as seguintes condições forem atendidas:</p>
        <p>
            <li>Não contém colchetes sem correspondência.</li>
            <li>O subconjunto de colchetes dentro dos limites de um par de colchetes correspondente é também um par de colchetes.</li>
        </p>
        <p>Exemplos:
            <li>(){}[] é válido</li>
            <li>[{()}](){} é válido</li>
            <li>[]{() não é válido</li>
            <li>[{)] não é válido </p></li>
        </p>
    </div>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $string = $_POST['text'];
            validarString($string);
        };

        function validarString ($string) {
            $parenteses  = '/[({1,}){1,}][{{1,}}{1,}][\[{1,}\]{1,}]/';
            if (preg_match($parenteses, $string) != null) {
                echo "
                    <div id='retorno'>
                        <p>String Válida!</p>
                    </div>
                ";
            } else {
                echo "
                <div id='retornoNegativo'>
                    <p>String Inválida!</p>
                </div>
            ";
            };
        };
    ?>
</body>
</html>