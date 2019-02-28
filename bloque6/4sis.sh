#!/bin/bash
#Ejercicio 4

v=0

while [ $v -eq 0 ]; do

	read -p "Introduce un número: " n

	if [[ $n =~ [0-9] ]]; then
		if [ $n -gt 0 ]; then
			for  i in `seq 0 $n`; do
				echo "$i"

			done
			v=1
		else
			echo "ERROR: Introduce un valor mayor de 0"
		fi
	else 
		echo "ERROR: El valor introducido debe ser un número"
	fi
done
