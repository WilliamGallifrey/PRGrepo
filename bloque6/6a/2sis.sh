#!/bin/bash
#ejercicio 2

v=0
while [ $v -eq 0 ]; do
	read -p "Introduce un número mayor de 0: " v
	
	if [ $v -gt 0 ] ;then	

		if [ `expr $v % 2` -eq 0 ]; then
			echo "$v es par"
			v=1
		else
			echo "$v es impar"
			v=1
		fi
	else
		echo "ERROR: El número debe ser mayor de 0"		
	fi
done
