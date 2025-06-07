#!/bin/bash
set -e

APP_DIR="/var/www/laravel-todo-app"
BACKUP_DIR="${APP_DIR}_bak.$(date +%Y%m%d%H%M%S)"

# 古いバックアップを削除
rm -rf "${APP_DIR}_bak."*

# アプリ本体をバックアップ（待避）
mv "$APP_DIR" "$BACKUP_DIR"
