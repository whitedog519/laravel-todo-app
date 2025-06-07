#!/bin/bash
set -e

APP_DIR="/var/www/laravel-todo-app"

# 依存ライブラリのインストール
cd $APP_DIR
/usr/local/bin/composer install --no-dev --prefer-dist --optimize-autoloader

# npm
npm install
npm run build
