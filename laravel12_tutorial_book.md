
% Mastering Laravel 12: A Beginner-to-Pro Journey
% By ChatGPT (Your Personal Mentor)
% 2025 Edition

# Preface

This book is designed as a **90-day step-by-step guide** to mastering Laravel 12 with PHP 8.2.  
You’ll start as a beginner and gradually move toward building a **real-world project**.  
Each chapter builds on the previous one, ensuring continuity and hands-on learning.

---

# Table of Contents

1. [Introduction to Laravel](#introduction-to-laravel)
2. [Installation & Setup](#installation--setup)
3. [Understanding Folder Structure](#understanding-folder-structure)
4. [Lifecycle of a Request](#lifecycle-of-a-request)
5. [Routing System](#routing-system)
6. [Controllers](#controllers)
7. [Views & Blade Templates](#views--blade-templates)
8. [Models & Eloquent ORM](#models--eloquent-orm)
9. [Database Migrations & Seeders](#database-migrations--seeders)
10. [Factories & Testing Basics](#factories--testing-basics)
11. [Forms & Validation](#forms--validation)
12. [Authentication](#authentication)
13. [Authorization & Policies](#authorization--policies)
14. [Middleware](#middleware)
15. [Service Container & Providers](#service-container--providers)
16. [Dependency Injection](#dependency-injection)
17. [APIs & JSON Responses](#apis--json-responses)
18. [Resource Controllers & Collections](#resource-controllers--collections)
19. [File Uploads & Storage](#file-uploads--storage)
20. [Mail & Notifications](#mail--notifications)
21. [Queues & Jobs](#queues--jobs)
22. [Events & Listeners](#events--listeners)
23. [Scheduling Tasks](#scheduling-tasks)
24. [Logging & Debugging](#logging--debugging)
25. [Real-Time with Laravel Echo & WebSockets](#real-time-with-laravel-echo--websockets)
26. [API Authentication with Sanctum](#api-authentication-with-sanctum)
27. [Building a Modular Project](#building-a-modular-project)
28. [Capstone Project: Medical Billing System](#capstone-project-medical-billing-system)
29. [Testing (Unit, Feature, Integration)](#testing-unit-feature-integration)
30. [Deployment & Best Practices](#deployment--best-practices)

---

# Introduction to Laravel

Laravel is a modern PHP framework designed to make web development **fast, elegant, and enjoyable**.  
It follows the **MVC (Model-View-Controller)** pattern, giving developers a structured way to build scalable apps.

---

# Installation & Setup

## Requirements

- PHP 8.2+
- Composer (Dependency Manager)
- Database (MySQL, MariaDB, or PostgreSQL)
- Node.js (for frontend assets)
- Git (for version control)

## Install Laravel

```bash
composer create-project laravel/laravel myapp
cd myapp
php artisan serve
```

Visit: `http://127.0.0.1:8000`

If you see the **Laravel welcome screen**, your setup is successful.

---

# Understanding Folder Structure

Laravel 12’s structure:

```
app/            # Application code (Models, Controllers)
bootstrap/      # Framework bootstrapping
config/         # Configuration files
database/       # Migrations, Seeders, Factories
public/         # index.php, frontend assets
resources/      # Views, Blade templates, JS, CSS
routes/         # route files (web.php, api.php)
storage/        # Logs, cache, compiled views
tests/          # Unit and Feature tests
vendor/         # Composer dependencies
```

---

# Lifecycle of a Request

1. Request enters via **public/index.php**.
2. The **HTTP Kernel** handles middleware.
3. The request passes through **routes**.
4. The **Controller** processes logic.
5. The **Model (Eloquent)** interacts with the DB.
6. Response is returned via **View**.

---

# Routing System

Routes are defined in `/routes/web.php` (for web) and `/routes/api.php` (for APIs).

## Basic Route

```php
Route::get('/hello', function () {
    return "Hello, Laravel 12!";
});
```

## Route with Controller

```php
use App\Http\Controllers\HomeController;

Route::get('/home', [HomeController::class, 'index']);
```

## Route Groups

```php
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Admin Dashboard";
    });
});
```

---

# Controllers

Generate a controller:

```bash
php artisan make:controller HomeController
```

Inside:

```php
class HomeController extends Controller {
    public function index() {
        return view('home');
    }
}
```

---

# Views & Blade Templates

Create a view in `resources/views/home.blade.php`:

```blade
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Welcome to Laravel 12</h1>
</body>
</html>
```

---

# Models & Eloquent ORM

Create model:

```bash
php artisan make:model Post -m
```

This creates a **model** and **migration**.

Eloquent example:

```php
Post::create([
    'title' => 'First Post',
    'content' => 'This is my first blog post.'
]);
```

---

# Database Migrations & Seeders

Migration example:

```php
Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('content');
    $table->timestamps();
});
```

Run migration:

```bash
php artisan migrate
```

Seeder example:

```php
Post::factory()->count(10)->create();
```

---

# Capstone Project: Medical Billing System

By the end of the book, we’ll build a **Medical Billing System** with:

- Patients, Providers, and Insurances
- Visits and Claims
- Payment Posting & Denials
- Reports & Exports
- Authentication & Roles

---

# Deployment & Best Practices

- Use **.env** for environment config
- Run `php artisan config:cache` for performance
- Use **queues** for heavy jobs
- Deploy on **Forge, Vapor, or Docker**

---

# Conclusion

You now have a **step-by-step Laravel 12 mastery path**.  
Practice daily, follow along with real projects, and you’ll become job-ready in 90 days.

