#!/bin/bash

BAT=$(amixer -D bluealsa | tail -n 1 | sed -E 's/.*\[(.*)\].*/\1/g')

if [ $BAT -z ]
then
	echo '-'
else
	echo $BAT
fi
