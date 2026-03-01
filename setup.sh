#!/bin/bash

# --- 1. Colors for pretty output ---
GREEN='\033[0;32m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

echo -e "${BLUE}🚀 Starting Laravel 12 Infrastructure Setup...${NC}"

# --- 2. Create local .env from example if it doesn't exist ---
if [ ! -f .env ]; then
    echo -e "${GREEN}📄 Creating .env file...${NC}"
    cp .env.example .env
fi

# --- 3. Automatically detect and set User/Group IDs ---
CURRENT_UID=$(id -u)
CURRENT_GID=$(id -g)

# Update the .env file with the correct IDs for the current user
# This works on both Mac and Linux
sed -i.bak "s/USER_ID=.*/USER_ID=$CURRENT_UID/" .env
sed -i.bak "s/GROUP_ID=.*/GROUP_ID=$CURRENT_GID/" .env
rm .env.bak

echo -e "${GREEN}✅ User ID ($CURRENT_UID) and Group ID ($CURRENT_GID) configured.${NC}"

# --- 4. Prepare the src directory ---
mkdir -p src
sudo chown -R $CURRENT_UID:$CURRENT_GID src/
chmod -R 755 src/

# --- 5. Build and Start Docker ---
echo -e "${BLUE}🐳 Building and starting Docker containers...${NC}"
docker compose up -d --build

# --- 6. Install Laravel if src is empty ---
if [ -z "$(ls -A src)" ]; then
    echo -e "${BLUE}📦 Installing Laravel 12...${NC}"
    docker compose exec app composer create-project laravel/laravel .
else
    echo -e "${GREEN}📂 Laravel already installed, skipping creation.${NC}"
fi

# --- 7. Final Touches ---
echo -e "${BLUE}🐘 Running migrations...${NC}"
# Give MySQL a moment to wake up
sleep 10
docker compose exec app php artisan migrate --force

echo -e "${GREEN}✨ Setup Complete!${NC}"
echo -e "${BLUE}🔗 Access your app at: http://localhost:8080/${NC}"