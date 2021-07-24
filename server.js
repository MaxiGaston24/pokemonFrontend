const express = require("express");
const bodyParser = require("body-parser");
const cors = require("cors");

const app = express();

var corsOptions = {
  origin: "http://localhost:8080",
  
};
let allowCrossDomain = function(req, res, next) {
  res.header('Access-Control-Allow-Origin', "*");
  res.header('Access-Control-Allow-Headers', "*");
  req.header('Access-Control-Allow-Origin', "*");
  req.header('Access-Control-Allow-Headers', "*");
  
  next();
}
app.use(allowCrossDomain);

// app.use(cors(corsOptions));

// parse requests of content-type - application/json
 app.use(bodyParser.json());

// parse requests of content-type - application/x-www-form-urlencoded
 app.use(bodyParser.urlencoded({ extended: true }));
 

const db = require("./models");
db.sequelize.sync();
//db.sequelize.sync({ force: true }).then(() => {

 //   console.log("Drop and re-sync db.");
    
 //   });
// simple route
app.get("/", (req, res) => {
  res.json({ message: "Welcome to pokedexs application." });
});
require("./routes/pokedex.routes")(app);
// set port, listen for requests
const PORT = process.env.PORT || 8080;
app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}.`);
});
