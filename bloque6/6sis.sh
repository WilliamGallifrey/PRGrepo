#!/bin/bash
#Ejercicio 6

total=0
val=0
read -p "Introduce el número de litros consumidos: " l

for i in `seq 1 $l`; do

	if [ $i -le 50 ]; then
		val=20
	else
		if [ $i -gt 200 ]; then
			val=0.1
		else
			val=0.2
		fi
	fi	

	total=$(echo "$total + $val" | bc)
done

echo "Total: $total"
