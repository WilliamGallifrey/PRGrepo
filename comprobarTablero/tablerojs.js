


var fil = Number(prompt("Introduce el valor de fila"));
var col = Number(prompt("Introduce el valor de columna"));
var enfil = true;
var encol = true;


function compruebaTablero (fila, columna)
{
	if(fila < 1 || fila > 6) enfil = false;

	if(columna < 1 || columna > 6) encol = false;


	if(!encol)
		{
			console.log("la columna  no es válida");return false;
		}

	if(!enfil) 
		{
			console.log("la fila  no es válida");return false;
		}
		
	return true;


}



console.log(compruebaTablero(fil,col));