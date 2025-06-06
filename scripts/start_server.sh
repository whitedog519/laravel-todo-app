#!/bin/bash
set -e

# PHP-FPM と Web サーバー（nginx）を再起動
sudo systemctl restart php-fpm
sudo systemctl restart nginx
