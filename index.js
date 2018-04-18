let http = require("http");

let hostname = '127.0.0.1';
let port = 8080;

http.createServer((req, res) => {
    res.writeHead(200, { 'Content-type': 'text/html' });
    res.end();
}).listen(port);