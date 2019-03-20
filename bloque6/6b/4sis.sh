#!/bin/bash
#Ejercicio 4

for i in $(cat numeros.txt); do
	if [ $(expr $i % 2) -eq 0 ]; then 
		pares="$pares $i"
		parcount=$(expr $parcount + 1)		
	else
		impares="$impares $i"
		imparcount=$(expr $imparcount + 1)
	fi
done

echo "Hay $parcount pares, son: $pares"
echo "Hay $imparcount pares, son: $impares"
