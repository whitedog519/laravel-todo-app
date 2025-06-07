#!/bin/bash
set -e

APP_DIR="/var/www/laravel-todo-app"

# 最新のバックアップディレクトリ
BACKUP_DIR=$(ls -1d "${APP_DIR}_bak."[0-9]* 2>/dev/null | sort -r | head -n1)

if [ -z "$BACKUP_DIR" ]; then
    echo "No backup directory found."
    exit 1
fi

echo "Restoring .env from $BACKUP_DIR"

# 環境ファイルをバックアップからアプリディレクトリに復元
if [ -f "${BACKUP_DIR}/.env" ]; then
    cp "${BACKUP_DIR}/.env" "${APP_DIR}/.env"
else
    echo "No .env in backup directory."
fi

# 必要に応じてキャッシュクリアやマイグレーション
cd "$APP_DIR"
php artisan config:cache
