## Product Detail

Product Detail is a web application which show lists of products.
This application have these features:

- Products can be shown by users.
- There is a admin section which can be accessible only by log in to the system.
- Admin can create,update the products.

## Requirements
- PHP >= 5.6
- composer

## Installation Process

- Open console and go to the directory where you want to install this application.
- Run `git clone https://github.com/rabibsust/product_detail.git`
- Run `composer install`
- Open your mysql server admin panel and add database.
- Go to your project directory.
- Copy **.env.example** file and change it to **.env**
- Update **.env** file by setting:
  - DB_DATABASE=product   *----change this with your database name----*
  - DB_USERNAME=root      *----change this with your database username-----*
  - DB_PASSWORD=          *------change this with your database password------*
- Open console and go to the project directory.
- Run `php artisan migrate`
- Run `php artisan db:seed`
- Run `php artisan serve`
- Go to your browser and paste this url: `http://localhost:8000/`
- You will get your home page.
