const express = require('express');
const port = process.env.port || 5000 ;
const mysql = require('mysql');

// initialisation de ma variable
const app = express();


app.get("/", (req,res) =>{
    // connection à ma base de dennée
const connection = mysql.createConnection({
        host:'localhost',
        user:'root',
        password:'',
        database:'hkservice',
});
//connection
connection.connect((err) =>{
    if(err){
        console.error('Erreur de connection :'+ err.stack);
        return;
    }
    console.log('Connection à la base de donnée reuisit avec succès')
})

// Operation dans ma base de donnée 

connection.query("SELECT * FROM inscription", (err, rows, fields) => {
    if(err) throw err;
    res.json(rows);
});

connection.end;
})

app.listen(port, () =>{
    console.log('serveur est en ligne');
})