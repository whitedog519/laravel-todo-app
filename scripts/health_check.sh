#!/bin/bash
set -e

# 80 ポート／URL が 200 返すか確認
HTTP_STATUS=$(curl -o /dev/null -s -w "%{http_code}\n" http://localhost/login)
if [ "$HTTP_STATUS" -ne 200 ]; then
    echo "Health check failed: returned status $HTTP_STATUS"
    exit 1
fi
