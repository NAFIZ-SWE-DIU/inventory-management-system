# Inventory Management System (IMS) with Laravel

This is a basic Inventory Management System developed with Laravel. The system allows you to manage product details through a simple and user-friendly interface.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Database Setup](#database-setup)
- [Seeding Initial Data](#seeding-initial-data)
- [Running the Application](#running-the-application)
- [Accessing Product Management](#accessing-product-management)
- [Authentication](#authentication)
- [Deployment](#deployment)

## Prerequisites

Make sure you have the following installed on your machine:

- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/)
- [Node.js](https://nodejs.org/)
- [MySQL](https://www.mysql.com/) or any other database of your choice

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/NAFIZ-SWE-DIU/inventory-management-system.git


## Navigate to the project directory:
cd inventory-management-system

## Install PHP dependencies:
composer install

## Install JavaScript dependencies:
npm install

#Copy the .env.example file to .env:

## Generate the application key:
php artisan key:generate


## Database Setup
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

## Run the database migrations:
php artisan migrate

<<<<<<< HEAD
## Create migration for products table
=======
# Create migration for products table
>>>>>>> 80d9aa5d7abb6fb60101b31c857892fdeaafa256
php artisan make:migration create_products_table

## Seeding Initial Data
php artisan db:seed --class=ProductsTableSeeder

## Running the Application
php artisan serve


## Accessing Product Management
1. Register a new user or login if you already have an account.
2. Once logged in, navigate to the "Product Management" section to add, view, update, and delete product details.
<<<<<<< HEAD


# Owner
Nafizul Islam
Nafizulislam.swe@gmail.com
+880 1737 226404
+880 1568 879478
=======
>>>>>>> 80d9aa5d7abb6fb60101b31c857892fdeaafa256
