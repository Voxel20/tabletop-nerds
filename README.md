# Tabletop  Nerds

Tabletop-Nerds is a Laravel based Full Stack project built with massive ammounts of interactivity. Built amongst a small team of 4 developers, this project utilizes several important coding practices and technologies. Functionality between the Front-End/Back-End being seamless & efficient.


![Preview Screenshot](https://images.ctfassets.net/gpz0vzuizl3q/4krNsfhouW9wgiKuqKWOF3/c3cd5e43d9b9f773b4b9a330b7c0edd0/Screenshot_1.png?h=250)


## Local setup
(I recommend using SSH)

1. open an Ubuntu terminal
   1. make sure you're in your home directory, where you've hopefully already created a projects folder: `cd ~/projects`
   2. make sure you have docker desktop running
2. clone this repo: `git clone https://github.com/Voxel20/tabletop-nerds.git`
3. go into the project: `cd tabletop-nerds`
4. copy the `.env.example` file to `.env`
5. run the following docker command to install our Sail dependencies:
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```
6. create app key: `./vendor/bin/sail artisan key:generate`
7. start up the app: `./vendor/bin/sail up -d`

## Authors

- [@Voxel20](https://www.github.com/voxel20)
- [@mihaelavalac](https://www.github.com/mihaelavalac)
- [@benwagner813](https://www.github.com/benwagner813)
- [@beemteam2](https://www.github.com/beemteam2)


## Documentation

[Laravel](https://laravel.com/docs/9.x)

[TailwindCSS](https://tailwindcss.com/docs/installation)

[DaisyUI](https://daisyui.com/)
## Running Tests

To run tests, run the following commands

```bash
  sail artisan test
  sail artisan test:coverage
```


## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

These values can also be located in .env.example
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=tabletop_nerds
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
## Contributing

Contributions are always welcome!

