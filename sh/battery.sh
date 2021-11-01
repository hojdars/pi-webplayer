#!/bin/bash

amixer -D bluealsa | tail -n 1 | sed -E 's/.*\[(.*)\].*/\1/g'
