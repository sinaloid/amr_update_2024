#!/bin/bash

# Script d'entrée pour le container Laravel
set -e

echo "🚀 Initialisation du container Laravel..."

# Attendre que les services de base de données soient prêts
echo "⏳ Attente de la base de données..."
until php artisan migrate:status >/dev/null 2>&1; do
    echo "Attente de la connexion à la base de données..."
    sleep 2
done

# Génération de la clé d'application si nécessaire
if [ -z "$APP_KEY" ]; then
    echo "🔑 Génération de la clé d'application..."
    php artisan key:generate --force
fi

# Exécution des migrations
echo "📊 Exécution des migrations..."
php artisan migrate --force

# Génération des caches Laravel
echo "🗂️ Génération des caches..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Installation/mise à jour des clés Passport si le package est installé
if [ -f "vendor/laravel/passport/src/PassportServiceProvider.php" ]; then
    echo "🔑 Configuration de Passport..."
    php artisan passport:keys --force
fi

# Optimisation pour la production
echo "⚡ Optimisation pour la production..."
php artisan optimize

echo "✅ Container Laravel initialisé avec succès!"

# Démarrage de PHP-FPM
exec "$@"