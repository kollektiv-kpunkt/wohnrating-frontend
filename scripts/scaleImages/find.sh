#!/bin/bash

find /Users/toesch/Sites/k/pn44/frontend/public/uploads -type f -iname "*3ee3b2e9cced99f0886a3fb5a181b1866c7746bd2f733492cf8d46580d556a3e*" -exec mogrify -verbose -path /Users/toesch/Sites/k/pn44/frontend/public/kandis -format jpeg -layers Dispose -resize 400\>x1024\> {} +