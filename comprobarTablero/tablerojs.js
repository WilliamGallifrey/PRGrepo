
var fil = Number(prompt("Introduce el valor de fila"));

while(fil < 1 || fil > 6)
	{	alert("El valor de fila debe estar entre 1 y 6");
		fil = Number(prompt("Introduce el valor de fila"));
	}

var col = Number(prompt("Introduce el valor de columna"));
while(col < 1 || col > 6) 
	{
		alert("El valor de columna debe estar entre 1 y 6");
		col = Number(prompt("Introduce el valor de columna"));

	}

console.log("fila: " + fil + " columna: " + col);