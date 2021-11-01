#!/bin/bash

MAC=$(cat ../.mac)
bluetoothctl disconnect $MAC
