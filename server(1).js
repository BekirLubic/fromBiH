var express = require('express')
var app = express()

app.use(express.static('public'))

app.get('/registracija', function(req, res, next) {
	var prikaz = [
		"firmatrlalala",
		"nestotralalal hos kos"
		];
		res.send(prikaz);

});

app.listen(3000, function () {
  console.log('Example app listening on port 3000!')
});