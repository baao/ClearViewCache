# ClearViewCache
Clears the view cache, for laravel lumen

# Installation
    composer require baao/clear-view-cache

# Register the Service Provider 
in bootstrap/app.php

    $app->register('Baao\ClearViewCache\ClearViewCacheServiceProvider');

# Clear all cached views:
    php artisan view:clear

# License

MIT 
 