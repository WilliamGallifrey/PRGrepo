#!/bin/bash
#Ejercicio 2

total=$( cat  precipitaciones.txt | wc -l )

for i in $(awk -F " " '{print $2}' precipitaciones.txt); do
	suma=$(expr $suma + $i)

done
	res=$(expr "$suma / $total" | bc -l)

echo "La media de precipitaciones es $res"
