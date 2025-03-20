# 🛒 Laravel Multi-Tenant E-Commerce API

## 🚀 Overview

This is a **multi-tenant e-commerce API** built with **Laravel**, designed for store owners to manage their products securely. Each user can create **only one store**, and products are isolated per store. The project uses:  
✅ **Laravel Filament** for an admin panel  
✅ **Laravel Sanctum** for secure API authentication  
✅ **Multi-tenancy** to ensure store data isolation

---

## ⚡ Features

-   **Multi-Tenancy:** Each store has its own data, ensuring isolation.
-   **Admin Panel (Filament):** Store owners can manage products easily.
-   **Authentication (Sanctum):** Secure login and API access.
-   **CRUD for Products:** Create, update, delete, and fetch products.
-   **Read-Only API Endpoint:** Fetch products securely without modification.

---

## 🛠 Installation

### 1️⃣ **Clone the Repository**

````bash
git clone [https://github.com/your-repo-name.git](https://github.com/piesieomane/store-app.git)
cd store-app

---

### 2️⃣ **Install Dependencies**
``` bash
composer install

---

### 3️⃣ **Set Up Environment**
``` bash
cp .env.example .env

-- Update the .env file with your database credentials.example below
``` bash
DB_CONNECTION=pgsql
DB_HOST=localhost
DB_PORT=5432
DB_DATABASE=store
DB_USERNAME=postgres
DB_PASSWORD=213141

6️⃣  Create a User

php artisan make:filament-user
Enter the following details when prompted:
Name: mike
Email: mike@gmail.com
Password: (your password)

php artisan serve
Now visit http://127.0.0.1:8000/admin/login to log into Filament.

````
