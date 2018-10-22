

var marca = 0;
var persona = "";

var primero = Infinity;
var segundo = Infinity;
var tercero = Infinity;

var primeroNombre = "";
var segundoNombre = "";
var terceroNombre = "";

var res = document.getElementById('resultado');



function ordenar (marca, persona)
{


	if (marca <= tercero) 

	{
		if(marca<=primero) 
		{
			tercero = segundo;
			segundo = primero;
			primero = marca;
			terceroNombre = segundoNombre;
			segundoNombre = primeroNombre;
			primeroNombre = persona;
		}

		else 
		{
			if(marca<=segundo) 
			{	
			tercero = segundo;
			segundo = marca; 
			terceroNombre = segundoNombre;
			segundoNombre = persona;
			}

			
			else
			{
				tercero = marca;
				terceroNombre = persona;
			}
			
		}
	}

	
} 


while(true)
{	
	persona = prompt("Nombre competidor");
	if(persona.toLowerCase() == "salir") break;
	marca = prompt("marca de competidor");
	ordenar(marca, persona);
	console.log("primero: "+primeroNombre);
	console.log("segundo: "+segundoNombre);
	console.log("tercero: "+terceroNombre);
}


res.innerHTML = "<h1> Primero: "+ primeroNombre +" (" + primero + ")</h1>" 
				+"<h1> Segundo: "+ segundoNombre + " (" + segundo + ")</h1>" 
				+"<h1> Tercero: "+ terceroNombre + " (" + tercero + ")</h1>" ;

