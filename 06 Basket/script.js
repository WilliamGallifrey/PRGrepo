var nombres = [];
var dobles = [];
var triples = [];
var minutos = [];

var nombre;
var doble;
var triple;
var minuto;

var totDobles = 0;
var totTriples = 0;
var totMinutos = 0;

var mediaDobles = 0;
var mediaTriples = 0;
var mediaMinutos = 0;


var maxNombre = "";
var maxPuntos = 0;
var nuevoPuntos = 0;

while(true)
{
	nombre = prompt("Nombre del jugador");
	if(nombre == "salir") break;
	doble = Number(prompt("Número de dobles"));
	triple = Number(prompt("Número de triples"));
	minuto = Number(prompt("Minutos jugados"));

	nombres.push(nombre);
	dobles.push(doble);
	triples.push(triple);
	minutos.push(minuto);

	nuevoPuntos = (doble*2) + (triple*3);
	
	if(nuevoPuntos >= maxPuntos)
	{
		maxPuntos = nuevoPuntos;
		maxNombre = nombre;
	}



}

function resultados () 
{
	for (var i = 0; i < nombres.length; i++)
	{
		totDobles += dobles[i];
		totTriples += triples[i];
		totMinutos += minutos[i];
	}

	mediaDobles = totDobles/dobles.length;
	mediaTriples = totTriples/triples.length;
	mediaMinutos = totMinutos/minutos.length;

	console.log(`Media de los dobles ${mediaDobles}`);
	console.log(`Media de los triples ${mediaTriples}`);
	console.log(`Media de los minutos jugados ${mediaMinutos}`);
	console.log(`El jugador con más puntos es ${maxNombre}, con ${maxPuntos} puntos`);
}

resultados();
