var sha1 = require("sha1")
var mysql = require("mysql")
var o = mysql.createConnection({host:"localhost", user:"root", password:"root", database:"haisau"});

o.connect();
    console.log("Connected to haisau.");
    var sqlProjet = "INSERT INTO Projet (nom, dureeSprint) VALUES ?";
    var valuesProjet = [
        ['T4DummyProject', 42],
        ['T6DummyProject', 17],
        ['T7DummyProject', 346]
    ];
    o.query(sqlProjet, [valuesProjet], function (err, result) {
        if (err) throw err;
        console.log("Inserted " + result.affectedRows + " entries into Projet.");
    });

    var sqlUsers = "INSERT INTO Utilisateur (login, password, mail) VALUES ?";
    var valuesUsers = [
        ['TestUser', sha1('KaedeTakagaki'), 'test@bidoof.nico'],
        ['T2kaede', sha1('T2takagaki'), 'T2user@bidoof.nico']
    ];
    o.query(sqlUsers, [valuesUsers], function (err, result) {
        if (err) throw err;
        console.log("Inserted " + result.affectedRows + " entries into Utilisateur.");
    });
o.end();
