# Laravel 8 User Roles and Permissions Tutorial
 
## Installation

First clone this repository, install the dependencies, and setup your .env file.

```
git clone https://github.com/yogeshvakhre5057/laravel-8-roles-and-permissions.git
cd laravel-8-roles-and-permissions/
composer install
cp .env.example .env
```

Setup database configuration in .env file on root directory.

```
DB_DATABASE=laravel_app
DB_USERNAME=root
DB_PASSWORD=
```

And run the initial run your application.

```
php artisan key:generate
php artisan migrate 
php artisan cache:clear
php artisan config:clear
```

After this we have to run bellow command for run PermissionTableSeeder seeder:

```
php artisan db:seed --class=PermissionTableSeeder
```  

After this we have to run bellow command for run CreateAdminUserSeeder seeder:

```
php artisan db:seed --class=CreateAdminUserSeeder
```

And run the your laravel application. 

```
php artisan serve
```

Now you can login with following credential:

```
Email: admin@gmail.com
Password: 123456
```

if you face permissioan realated issue  in the your laravel application on Ubuntu or Centos oprating systeme then do this.

```
sudo chown -R deployer:www-data /var/www/html/{your-project-name}/;
find /var/www/html/{your-project-name} -type f -exec chmod 664 {} \;
find /var/www/html/{your-project-name} -type d -exec chmod 775 {} \;
chgrp -R www-data storage bootstrap/cache
chmod -R ug+rwx storage bootstrap/cache
```
## Learn More

Laravel 8 User Roles and Permissions Tutorial (https://www.itsolutionstuff.com/post/laravel-8-user-roles-and-permissions-tutorialexample.html).