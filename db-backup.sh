#!/bin/bash
# Load password from .env
source .env

TIMESTAMP=$(date +%Y%m%d_%H%M%S)
FILENAME="src/backup_${TIMESTAMP}.sql"

echo "💾 Backing up database to $FILENAME..."
docker compose exec db mysqldump -u root -p"$DB_PASSWORD" laravel_db > "$FILENAME"
echo "✅ Done!"