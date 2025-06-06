#!/bin/bash
set -e

APP_DIR="/var/www/laravel-todo-app"

# 既存ディレクトリを削除して新規を配置
rm -rf $APP_DIR/*
cp -r /tmp/codedeploy/$DEPLOYMENT_ID/* $APP_DIR/

cd $APP_DIR

# 依存ライブラリのインストール
/usr/bin/composer install --no-dev --prefer-dist --optimize-autoloader

# npm
npm run build

# パーミッション設定（例：storage と bootstrap/cache）
chown -R ec2-user:nginx $APP_DIR
chmod -R 775 $APP_DIR/storage $APP_DIR/bootstrap/cache
