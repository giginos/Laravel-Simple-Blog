# Simple blog based on Laravel
This is a simple blog which is based on the laravel framework. It uses a mysql db for storage and PHP 7.x.

## Quickstart
To get the blog running, you have to do the following steps:

1. Run `composer install` to install external packages
2. Run `php artisan key:generate`
3. Run `php artisan migrate` to init the database

## Start with docker
You may use docker to start a local environment.

Commands:

`cd recources/docker`

`docker-compose up`

Access via SSH: `docker exec -it lsb_php_development-site bash`


## License

This blog licensed under the [MIT license](http://opensource.org/licenses/MIT).

## Hints

Run `docker-compose build` to rebuild docker images.
