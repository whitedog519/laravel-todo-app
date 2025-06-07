#!/bin/bash
set -e

APP_DIR="/var/www/laravel-todo-app"

# 所有者と権限を設定
chown -R ec2-user:nginx "$APP_DIR"
chmod -R 775 "$APP_DIR/storage" "$APP_DIR/bootstrap/cache"
