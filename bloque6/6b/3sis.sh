#!/bin/bash
#Ejercicio 3
max=$(cat precipitaciones.txt | wc -l)
for i  in $(seq 1 $max); do

	d=$(cat precipitaciones.txt | awk -F " " '{print $1}' | head -n $i | tail -n 1 )
	ll=$(cat precipitaciones.txt | awk -F " " '{print $2}' | head -n $i | tail -n 1 )

	if [ $ll -eq 0 ]; then
		j=$(echo "$d / 7" | bc)
		k=$(echo "$j * 7" | bc)
		l=$(echo "$d - $k" | bc)

		case $l in
			
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
