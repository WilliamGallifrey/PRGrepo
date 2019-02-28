#!/bin/bash
#Ejercicio 7

num=0
v=0
fila=0
mult=0

while [ $v -eq 0 ]; do
	read -p "Introduce un número de día del 1 al 30: " d
	
	if [ $d -lt 1 -o $d -gt 30 ]; then
		echo "El número debe estar entre 1 y 30"
	else
		v=1
		fila=$(echo "$d / 7" | bc)
		mult=$(echo "$fila * 7" | bc)
		num=$(echo "$d - $mult" | bc)
	

		case $num in
	
			1)
				echo "Lunes"
				;;
			2)
				echo "Martes"
				;;
			3)
				echo "Miércoles"
				;;
			4)
				echo "Jueves"
				;;
			5)
				echo "Viernes"
				;;
			6)
				echo "Sábado"
				;;
			0)
				echo "Domingo"
				;;
		esac
	fi
done


