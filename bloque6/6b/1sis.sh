#!/bin/bash
#Ejercicio 1

mkdir ej1

for i in $(cat nombres.txt); do

	mkdir ej1/$i

	for j in `seq 1 $1`; do
	touch ej1/$i/personal$j
	done
done
