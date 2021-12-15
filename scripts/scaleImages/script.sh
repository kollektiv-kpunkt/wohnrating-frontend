#!/bin/bash

find /Users/toesch/Sites/k/pn44/frontend/public/uploads -type f -iname "*.jpeg" -exec mogrify -verbose -path /Users/toesch/Sites/k/pn44/frontend/public/kandis -format jpeg -layers Dispose -resize 400\>x1024\> {} +
find /Users/toesch/Sites/k/pn44/frontend/public/uploads -type f -iname "*.jpg" -exec mogrify -verbose -path /Users/toesch/Sites/k/pn44/frontend/public/kandis -format jpg -layers Dispose -resize 400\>x1024\> {} +
find /Users/toesch/Sites/k/pn44/frontend/public/uploads -type f -iname "*.png" -exec mogrify -verbose -path /Users/toesch/Sites/k/pn44/frontend/public/kandis -format png -alpha on -layers Dispose -resize 400\>x1024\> {} +