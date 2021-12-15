#!/bin/bash

find /Users/toesch/Sites/k/pn44/frontend/public/uploads -type f -iname "*01c376845262ebdd8fc3919ced3f4a080925e41839fcc62f4dbf2550408519d0*" -exec mogrify -verbose -path /Users/toesch/Sites/k/pn44/frontend/public/kandis -format jpeg -layers Dispose -resize 400\>x1024\> {} +