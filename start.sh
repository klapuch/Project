#!/bin/sh
grep -Rl --exclude-dir={vendor,.git} "Project" . | xargs sed -i "s/Project/$APP_NAME/g"
rm start.sh
