# Blog Site

### Installation

Step-by-step guide on how to install and set up your project.

```bash
# Example command or code snippet
git clone https://github.com/SayidMuhammad007/Blog-Site.git
cd Blog-Site
composer require laravel/jetstream
php artisan jetstream:install livewire
composer require filament/filament:"^3.1" -W
php artisan filament:install --panels
php artisan migrate

