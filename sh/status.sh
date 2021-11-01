#!/bin/bash

MAC=$(cat ../.mac)

bluetoothctl info $MAC | egrep 'Device|Name|Connected' | sed 's/^[[:space:]]*//' | sed 's/ (public)//' \
	| sed 's/Device/<b>Device:<\/b>/' \
	| sed 's/Name/<b>Name<\/b>/' \
	| sed 's/Connected/<b>Connected<\/b>/'
