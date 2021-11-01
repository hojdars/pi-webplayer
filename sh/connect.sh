#!/bin/bash

MAC=$(cat ../.mac)
bluetoothctl connect $MAC
