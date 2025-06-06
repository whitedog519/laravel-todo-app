#!/bin/bash
set -e

TARGET_DIR="/var/www/laravel-todo-app"
if [ -f "${TARGET_DIR}/.env" ]; then
    cp "${TARGET_DIR}/.env" "${TARGET_DIR}/.env.bak.$(date +%Y%m%d%H%M%S)"
fi
