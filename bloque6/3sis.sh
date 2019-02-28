#!/bin/bash
#Ejercicio 3

v=0

while [ $v -eq 0 ]; do

	read -p "Introduce la nota: " n

	if [[ $n =~ [0-9] ]]; then
		if [ $n -le 10 -a $n -ge 0 ]; then
			
			if [ $n -ge 5 ]; then
			
				if [ $n -ge 9 ]; then				
					echo "Tu nota: $n, es un sobresaliente, máquina"
					v=1
				else
					echo "Tu nota: $n, es un aprobado"
					v=1
				fi
			else
				echo "Tu nota: $n, es un suspenso (Anda que....)"
				v=1
			fi
		else
			echo "ERROR: Introduce un valor entre 0-10"
		fi
	else 
		echo "ERROR: El valor introducido debe ser un número"
	fi
done
