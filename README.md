# Install the required dependencies with `npm`:

```sh
npm install
```

Then start the dev server:

```sh
npm run dev
```
>Installing forms plugin
```sh
npm install @tailwindcss/forms
const plugin = require('tailwindcss/plugin')
plugins: [
    require('@tailwindcss/forms'),
  ]
```

## New Project Initial Commands:

>Install Composer
```sh
composer install
```
>Copy .env.example
```sh
copy .env.example .env
```
>Generate app key
```sh
php artisan key:generate
```
>Install Modules
```sh
npm install && npm run dev
```
>Run migration and seeder
```sh
php artisan migrate:fresh --seed
```
>Run Server
```sh
php artisan serve
```