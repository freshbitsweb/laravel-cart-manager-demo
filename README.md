# Demo of Laravel Cart Manager

This repo contains the code for the demo of [Laravel Cart Manager](https://github.com/freshbitsweb/laravel-cart-manager) package.

# Installation

You can also download and run this app locally.

1) Clone the repo:
```
git clone https://github.com/freshbitsweb/laravel-cart-manager-demo.git [DIRECTORY_NAME]
```

2) Create `.env` file from the example file:
```
composer run-script post-root-package-install
```

3) Setup .env variables

4) Run following commands:
```
composer install
composer run-script post-create-project-cmd
php artisan storage:link
php artisan migrate --seed
```

Done.
