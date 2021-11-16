#!/bin/bash

# WARNING: If anything is wrong with the battery indicator, remove the 2> /dev/null redirect!
BAT=$(amixer -D bluealsa 2> /dev/null | tail -n 1 | sed -E 's/.*\[(.*)\].*/\1/g')

if [[ -z $BAT ]]
then
	echo '-'
else
	echo $BAT
fi
