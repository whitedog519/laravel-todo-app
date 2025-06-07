#!/bin/bash
set -e

APP_DIR="/var/www/laravel-todo-app"
cd "$APP_DIR"

# キャッシュファイル削除
rm -f bootstrap/cache/config.php
rm -f bootstrap/cache/routes.php
rm -f bootstrap/cache/views.php

# 環境キャッシュクリア
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear

# 再キャッシュ
php artisan config:cache
php artisan route:cache