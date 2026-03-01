🪟 Windows Users

If you are not using WSL2, follow these manual steps:

1. Copy .env.example to .env
2. Open .env and manually set USER_ID=1000 and GROUP_ID=1000
3. Run docker compose up -d --build
4. Run docker compose exec app composer create-project laravel/laravel .

🤝 How to Contribute

To keep the project clean and the infrastructure stable, please follow these steps when making changes:
1. Sync Your Environment

Before starting, ensure your local containers are up to date with the latest code:
Bash

    git pull origin main
    docker compose up -d --build

2. Branching Strategy

Never work directly on the main branch. Create a feature branch instead:
Bash

    git checkout -b feature/your-feature-name

3. Coding Standards

Permissions: If you create new files inside the container (e.g., php artisan make:controller), they should automatically have the correct permissions thanks to our UID/GID mapping. If you hit a "Permission Denied" error, run sudo chown -R $(id -u):$(id -g) src/ on your host.

Database: If you change the database schema, make sure to include the migration file:
Bash

    docker compose exec app php artisan make:migration your_migration_name

4. Committing Your Changes

Before you commit, check your git status to ensure you aren't accidentally pushing:
❌ Personal .env files
❌ vendor/ or node_modules/ folders
❌ OS junk files (.DS_Store or Thumbs.db)

Bash

    git add .
    git commit -m "feat: described your change here"
    git push origin feature/your-feature-name

5. Cleaning Up

If you ever need to reset your environment entirely without losing your source code:
Bash

    docker compose down --volumes --remove-orphans