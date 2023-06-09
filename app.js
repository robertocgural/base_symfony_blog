const express = require("express");
const app = express();

app.get("/", (req, res) => {
    res.send("Estoy dentro de node container");
});

const port = 3000;
app.listen(port, () => {
    console.log('Express listening at http://0.0.0.0:${port}');
});