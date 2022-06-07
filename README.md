## Install and setup

1. Setup docker database

```
docker-compose up -d
```

2. Install dependencies

```
composer install
```

3. Setup .env file

```
cp .env.example .env
```

4. Generate application key

```
php artisan key:generate
```

5. Run migrations

```
php artisan migrate
```

## Running the app

1. To run the server use:

```
php artisan serve
```

2. To run the tests use:

```
php artisan test
```
