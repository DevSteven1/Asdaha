var mysql = require("mysql");

var hostname = "b23.h.filess.io";
var database = "01_subjecthe";
var port = "3307";
var username = "01_subjecthe";
var password = "b5420850e355de60f56f296b825e676646e669d2";

var con = mysql.createConnection({
  host: hostname,
  user: username,
  password,
  database,
  port,
});

con.connect(function (err) {
  if (err) throw err;
  console.log("Connected!");
});

con.query("SELECT 1+1").on("result", function (row) {
  console.log(row);
});
