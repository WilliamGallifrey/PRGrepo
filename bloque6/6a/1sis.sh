#!/bin/bash
#Ejercicio 1

read -p "Introduce un valor: " x
read -p "Introduce otro valor: " y

if [ $x -eq $y ]; then
	echo "$x y $y son iguales"

else
	if [ $x -gt $y ]; then	
		echo "$x es mayor que $y"
	else
		echo "$x es menor que $y"
	fi	
fi
