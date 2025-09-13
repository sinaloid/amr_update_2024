# Utilise l'image officielle PHP 8.2 avec FPM
FROM php:8.2-fpm

# Installation des dépendances système essentielles
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Installation des extensions PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Installation de l'extension Redis
RUN pecl install redis && docker-php-ext-enable redis

# Installation de Node.js 18.x
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs \
    && rm -rf /var/lib/apt/lists/*

# Installation de Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configuration du répertoire de travail
WORKDIR /var/www/html

# Copie des fichiers de configuration
COPY composer.json composer.lock* ./

# Installation des dépendances PHP
RUN composer install --no-dev --optimize-autoloader --no-scripts --no-interaction

# Copie du code source
COPY . .

# Note: Les assets sont supposés être déjà compilés et présents dans public/
# Pour compiler les assets, exécutez 'npm run production' sur l'hôte avant le build

# Configuration des permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Configuration PHP-FPM
RUN sed -i 's/listen = 127.0.0.1:9000/listen = 0.0.0.0:9000/' /usr/local/etc/php-fpm.d/www.conf \
    && echo 'pm.max_children = 50' >> /usr/local/etc/php-fpm.d/www.conf \
    && echo 'pm.start_servers = 10' >> /usr/local/etc/php-fpm.d/www.conf \
    && echo 'pm.min_spare_servers = 5' >> /usr/local/etc/php-fpm.d/www.conf \
    && echo 'pm.max_spare_servers = 20' >> /usr/local/etc/php-fpm.d/www.conf

# Exposition du port 9000 pour PHP-FPM
EXPOSE 9000

# Commande par défaut
CMD ["php-fpm"]