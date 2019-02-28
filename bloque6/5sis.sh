#!/bin/bash
#Ejercicio 5

total=0
avg=0
i=0
v=1


while [ $v -ne 0 ]; do
	read -p "Introduce un número o 0 para acabar:" v
	if [ $v -ne 0 ]; then
		total=`expr $total + $v`
		i=`expr $i + 1`	
	fi
done

avg=$(echo "$total / $i" | bc -l)
echo "i: $i"
echo "Suma: $total"
echo "Media: $avg"
