const MySqlManager = require("./MySqlManager");

let a = new MySqlManager();
a.setHost = "localhost";
a.connect();
let b = new MySqlManager();
b.connect();
let c = new MySqlManager();
c.setHost = "127.0.0.1";
c.connect();
let d = new MySqlManager();
d.connect();

console.log(Object.is(a, b));