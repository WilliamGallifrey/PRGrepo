var num1;
var num2;
var rand;
var operaciones = ["+","-"];
var quest = "";
var resp;
var resu = 0;

while(true)
{
	num1 = Math.floor(Math.random()*10);
	num2 = Math.floor(Math.random()*10);
	rand = Math.round(Math.random());


	quest = num1 + operaciones[rand] + num2;

	resp = Number(prompt("¿Cuánto es " + quest+"?"));



	if (rand == 0){resu = eval(num1+num2);}
			else{resu = eval(num1-num2);}
	
		if(resu == resp) alert("respuesta correcta");
			else alert(`respuesta incorecta, era ${resu}`);
	


}