# TESTE PRÁTICO

### SUPORTES BALANCEADOS
1. Escreva uma função que receba uma string de colchetes como entrada e determine se a ordem
dos parênteses é válido. Um colchete é considerado qualquer um dos seguintes caracteres: (, ),
{, }, [, ou ].\
Dizemos que uma sequência de colchetes é válida se as seguintes condições forem atendidas:\
● Não contém colchetes sem correspondência.\
● O subconjunto de colchetes dentro dos limites de um par de colchetes correspondente é
também um par de colchetes.
Exemplos:\
● (){}[] é válido\
● [{()}](){} é válido\
● []{() não é válido\
● [{)] não é válido 

### BACK-END DA LISTA DE CONTATOS
2. Crie uma API REST que armazenará as pessoas e seus contatos. Uma pessoa pode ter vários
contatos como telefone, e-mail ou whatsapp. A API deve permitir criar, atualizar, obter e
exclua as pessoas e os contatos.

### FRONT-END DA LISTA DE CONTATOS
3. Crie um aplicativo Web que explore a API criada na segunda atribuição. O design da interface
do usuário é totalmente até você. 

#

# API, REST E RESTFUL

## API

Cliente (Client, App)
Garçon (pedidos, levar pedidos, para cozinha) API
Cozinha (Server, Serviço)

Acronimo de Application Programing Interface (Interface de Programação de Aplicações) é basicamente um conjunto de rotinas e padrões possam utilizar as funcionalidades desta aplicação.

- Responsável por estabelecer comunicação entre diferentes serviços.
- Meio de campo entre as tecnologias.
- Intermediador para troca de informações.

## REST

Um acronimo para Representation State Transfer (Transferência de Estado Representativo)

Será feira a transferência de dados de uma maneira simbólica, figurativa, representativa, de maneira didática.

A transferência de dados, usando o protocolo HTTP.

O Rest, delimita algumas obrigações nessas transferências de dados.

Resources seria então, uma entidade, um objeto.

### 6 NECESSIDADES (constraints) para ser RESTful

- _Client-Server_: Separação do cliente e do armazenamento de dados (servidor), dessa forma, poderemos ter uma portabilidade do nosso sitema, usando o React para WEB e React Native para o smartphone, por exemplo.

- _Stateless_: Cada requisição que o cliente faz para o servidor, deverá conter todas as informações necessárias para o servidor entender e responder (RESPONSE) a requisição (REQUEST). EXEMPLO: A sessão do usuário deverá ser enviada em todas as requisições, para saber se aquele usuário está autenticado e apto a usar os serviços, e o servidor não pode lembrar que o cliente foi autenticado na requisição anterior. Nos nossos cursos, temos por padrão usar tokens para as comunicações.

- _Cacheable_: As respostas para uma requisição, deverão ser explicitadas ao dizer se aquela requisição, pode ou não ser cacheada pelo cliente.

- _Layered System_: O cliente acessa a um endpoint, sem precisar saber da complexidade, de quais passos estão sendo necessários para o servidor responder a requisição, ou quais outras camadas o servidor estará lidando, para que a requisição seja respondida.

- _Code on Demand (optional)_: Dá a possibilidade da nossa aplicação pegar códigos, como o javascript, por exemplo, e executar no cliente.

## RESTFUL

RESTfull, é a aplicação dos padrões RESTful

## BOAS PRÁTICAS

- Utilizar os verbos HTTP para fazer as requisições
- Utilizar plural ou singular na criação dos endpoints? _NÃO IMPORTA_ use um padrão
- Não deixar barra no final do endpoint
- Nunca deixe o cliente sem resposta


## VERBOS HTTP

- GET: Receber dados de um Resource
- POST: Enviar dados ou informações para serem processados por um Resource.
- PUT: Atualizar dados de um Resource.
- DELETE: Deletar um Resource.

## STATUS DAS RESPOSTAS

- 1xx: Informação
- 2xx: Sucesso
    - 200: OK
    - 201: CREATED
    - 204: Não tem conteúdo PUT POST DELETE
- 3xx: Redirection
- 4xx: Client Error
    - 400: Bad Request
    - 404: Not Found!
- 5xx: Server error
    500: Internal Server Error

