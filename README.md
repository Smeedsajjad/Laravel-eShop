# eShop - Laravel E-Commerce Website

eShop is a feature-rich e-commerce website built using Laravel. It provides a seamless shopping experience with modern design, intuitive navigation, and robust functionality. This project demonstrates the use of Laravel's powerful framework to create scalable and secure web applications.

## Features

-   **User Authentication**: Secure user registration and login system.
-   **Admin Dashboard**: Manage products, categories, and orders.
-   **Product Management**: Add, update, and delete products with images and descriptions.
-   **Shopping Cart**: Add items to cart, view cart, and proceed to checkout.
-   **Order Management**: Track and manage customer orders in the admin panel.
-   **Responsive Design**: Fully optimized for both desktop and mobile devices.
-   **Payment Integration**: Integration with popular payment gateways (e.g., Stripe, PayPal).
-   **Search and Filter**: Advanced search and category-based filtering for products.
-   **Order Notifications**: Notifications for users and admins on order status updates.
-   **User Profiles**: View and edit user profiles with order history.

## Tech Stack

-   **Backend**: Laravel
-   **Frontend**: Blade templates, Tailwind CSS
-   **Database**: MySQL
-   **Authentication**: Laravel Jetstream (with Livewire)
-   **Payment Gateways**: 
-   **Version Control**: Git

## Installation

To get started with the project locally, follow these steps:

### Prerequisites

-   PHP >= 8.0
-   Composer
-   MySQL

### Steps

1. Clone the repository:

        git clone https://github.com/Smeedsajjad/Laravel-eShop

Navigate to the project directory:

    
    cd Laravel-eShop
    
Install dependencies using Composer:


    composer install
Install dependencies using Composer:


    composer install
Set up your .env file:


    cp .env.example .env
Then, configure your database and other environment settings in the .env file.

Generate the application key:

    php artisan key:generate

Run migrations to set up the database:

    php artisan migrate

Seed the database with sample data (optional):

    php artisan db:seed
Start the Laravel development server:


    composer run dev

Access the application at
    
    http://localhost:8000

## Usage
Register a user account to start shopping.
Admin users can log in to the admin dashboard and manage products, categories, and orders.
Users can view products, add them to their cart, and complete the checkout process using the integrated payment systems.
Contributing
Contributions are welcome! Please fork the repository and submit a pull request with your improvements or bug fixes.

License
This project is licensed under the MIT License - see the LICENSE file for details.




This `README.md` provides a comprehensive overview of your project, installation instructions, and other relevan

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[WebReinvent](https://webreinvent.com/)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Jump24](https://jump24.co.uk)**
-   **[Redberry](https://redberry.international/laravel/)**
-   **[Active Logic](https://activelogic.com)**
-   **[byte5](https://byte5.de)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
