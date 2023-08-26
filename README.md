# How To Install

## Step 1: Install Dependencies

Before installing the this project, we need to make sure that our system has all the required dependencies installed. We will need to install the following dependencies:

-   PHP 8.0 or higher
-   Composer

## Step 2: Go To project directory and composer install

- first go to the project directory

```bash
cd project-name
```

- Then install composer

```bash
composer install
```

## Step 3: Now serve your application using php artisan serve command

```bash
 php artisan serve
```

## Step 4: You can find the new package in packages\arif\crud folder and to make the model,controller and request file run this command

```bash
php artisan crud:generate YourControllerName
```