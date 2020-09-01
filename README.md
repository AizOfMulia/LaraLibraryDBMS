# IEB 20603 DATABASE MANAGEMENT SYSTEM

## Group assignment

### Requirement(s)
1. Docker
2. Docker Compose

### How to during first boot

1. Clone the repo `git clone https://github.com/AizOfMulia/LaraLibraryDBMS.git`
2. Cd into the directory.
3. Copy paste the .env.example file, and rename to .env
4. Run `docker-compose up -d`
5. Run `docker-compose exec app composer install`
6. Run `docker-compose exec app php artisan key:generate`
7. Run `docker-compose exec app php artisan config:cache`
5. Shut down the server `docker-compose down`

### How to use after first boot
1. Run `docker-compose up -d`
2. Run to shut down server `docker-compose down`

### How to input commands
If you need to use composer commands or artisan command, you can use `docker-compose exec <service_name>`

For any basic usage:
`docker-compose exec app php artisan`

### Laravel features
The project uses laravel as a MVC framework, the basic folders used are
1. `app` (MODEL)
This folders contain the model and data representation of a table.

2. `resource/views` (VIEW)
This folder contains all the frontend design templates and html files.
[View Doc](https://laravel.com/docs/7.x/blade)

2. `app/Http/Controllers` (CONTROLLER)
This folder contains all the backend logic and data manipulations. i.e: routing
[Controller Doc](https://laravel.com/docs/7.x/controllers)

3. `database/migrations` - Migration
[Migrations Doc](https://laravel.com/docs/7.x/migrations)

4. `routes/web.php`
All the routes and configured URI are kept within the file
[Routing Doc](https://laravel.com/docs/7.x/routing)
