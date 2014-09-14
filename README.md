# Slim & Eloquent & AngularJS

The Slim PHP micro framework paired with Laravel's Illuminate Database toolkit and AngularJS

## Getting started

```bash
# Download composer
curl -s https://getcomposer.org/installer | php

# Install project dependencies
php composer.phar install
```

Edit the database configuration in `public/api/config.php` to match your settings.

Now set your server's document root to the `public/` directory.

The end.

## Database Migration and Seeding

The novice script provides a primitive means of migrating and seeding the database.
Follow the `UserMigration.php` and `UserSeed.php` templates located in `app/database/` for
your own migrations/seeds.

To migrate and seed your database:
```bash
# Migrate
php novice migrate

# Seed
php novice seed

# Migrate then seed
php novice migrate --seed
```

> __Note:__
> These just run whatever is in the `run()` function of each seed or migration.
There's no support for updating or rolling back unless you put it there.

## Documentation

#### Slim framework
http://docs.slimframework.com

#### Eloquent ORM
http://laravel.com/docs/eloquent

#### AngularJS
https://angularjs.org/

#### Based on Kladd slim-eloquent 
https://github.com/kladd/slim-eloquent
