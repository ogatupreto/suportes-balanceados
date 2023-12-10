const express = require("express");
const app = express();
const cors = require('cors');
const data = require("./data.json");

const http = require('node:http');
const hostname = '127.0.0.1';
const port = 3000;

const server = http.createServer((req, res) => {
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain');
    res.end('Hello World');
});




app.use(express.json());
app.use(cors());

// retorna os clients
app.get("/clients", function(req, res) {
    res.json(data);
});

// retorna os clients por id
app.get("/clients/:id", function(req, res) {
    const { id } = req.params;
    const client = data.find(cli => cli.id = id);
    if (!client) return res.status(204).json(); // caso não haja conteúdo retornar "204 no content". Sucesso, porém sem resultado.
    res.json(client);
});

app.post("/clients", function(req, res) {
    const { id, nome, email, telefone } = req.body;

    // salvar

    res.json({id, nome, email, telefone});
});

app.put("/clients/:id", function(req, res) {
    const { id } = req.params;
    const client = data.find(cli => cli.id = id);

    if (!client) return res.status(204).json();

    client.name = name;

    res.json(client);
});

app.delete("/clients:/id", function(req, res) {
    const { id } = req.params;
    const clientFiltered = data.filter(client => client.id != id);

    res.json(clientFiltered);
});



app.listen(port, hostname, function() {
    console.log("Server is running");
});