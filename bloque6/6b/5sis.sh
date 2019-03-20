#!/bin/bash
#Ejercicio 5

max=$(cat listado.txt | wc -l)

for i in $(seq 1 $max); do

	s=$(cat listado.txt | awk -F " " '{print $2}' | head -n $i | tail -n 1 )
	p=$(cat listado.txt | awk -F " " '{print $3}' | head -n $i | tail -n 1 )
 
	if [ $s = "Linux" ]; then
		l=$(expr $l + 1)
		lpro=$(expr $lpro + $p)
	else
		w=$(expr $w + 1)
		wpro=$(expr $wpro + $p)
	fi

done

echo "Linux -> $l $lpro"
echo "Windows -> $w $wpro"
