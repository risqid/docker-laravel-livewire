# --- 1. Styling ---
Write-Host "🚀 Starting Laravel 12 Infrastructure Setup for Windows..." -ForegroundColor Cyan

# --- 2. Create .env from example if missing ---
if (!(Test-Path ".env")) {
    Write-Host "📄 Creating .env file from .env.example..." -ForegroundColor Green
    Copy-Item ".env.example" ".env"
}

# --- 3. Set Default IDs for Windows ---
# On Windows Docker Desktop, UID 1000/GID 1000 is the standard mapping for the WSL2 backend.
$currentUID = "1000"
$currentGID = "1000"

$envContent = Get-Content ".env"
$envContent = $envContent -replace 'USER_ID=.*', "USER_ID=$currentUID"
$envContent = $envContent -replace 'GROUP_ID=.*', "GROUP_ID=$currentGID"
$envContent | Set-Content ".env"

Write-Host "✅ User ID ($currentUID) and Group ID ($currentGID) configured for Docker Desktop." -ForegroundColor Green

# --- 4. Prepare the src directory ---
if (!(Test-Path "src")) {
    New-Item -ItemType Directory -Path "src" | Out-Null
}
Write-Host "📂 Directory 'src' is ready." -ForegroundColor Green

# --- 5. Build and Start Docker ---
Write-Host "🐳 Building and starting Docker containers..." -ForegroundColor Blue
docker-compose up -d --build

# --- 6. Install Laravel if src is empty ---
$srcItems = Get-ChildItem "src"
if ($srcItems.Count -eq 0) {
    Write-Host "📦 Installing Laravel 12... (This may take a few minutes)" -ForegroundColor Blue
    docker-compose exec -e COMPOSER_PROCESS_TIMEOUT=2000 app composer create-project laravel/laravel .
} else {
    Write-Host "📂 Laravel already installed, skipping creation." -ForegroundColor Green
}

# --- 7. Final Touches ---
Write-Host "🐘 Running migrations..." -ForegroundColor Blue
Start-Sleep -Seconds 10
docker-compose exec app php artisan migrate --force

Write-Host "✨ Setup Complete!" -ForegroundColor Green
Write-Host "🔗 Access your app at: http://localhost:8080/" -ForegroundColor Cyan