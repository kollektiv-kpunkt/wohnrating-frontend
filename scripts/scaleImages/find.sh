#!/bin/bash

find /Users/toesch/Sites/k/pn44/frontend/public/uploads -type f -iname "*87fe3d4ebf0eb8879aa800aac0f242a8f007a4e3d9938ade0087f6f179c1f64e*" -exec mogrify -verbose -path /Users/toesch/Sites/k/pn44/frontend/public/kandis -format jpeg -layers Dispose -resize 400\>x1024\> {} +