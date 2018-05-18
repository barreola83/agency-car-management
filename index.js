let http = require('http');

http.createServer(function (req, res) {
    let pathname = url.parse(req.url).pathname;
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.end();
}).listen(8080);