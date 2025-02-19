# 📦 Laravel Stock Management System

This is a stock management system built with the Laravel framework. It provides functionalities to manage stock, users, and other related entities.

## 🚀 Project Setup

### Prerequisites

- 🐘 PHP ^8.2
- 🎼 Composer

### Installation

1. **Clone the repository:**

    ```sh
    git clone https://github.com/your-repo/laravel-stock-management.git
    cd laravel-stock-management
    ```

2. **Install PHP dependencies:**

    ```sh
    composer install
    ```

3. **Copy the example environment file and configure the environment variables:**

    ```sh
    cp .env.example .env
    ```

    Update the  file with your database and other configurations.

4. **Generate the application key:**


    ```sh
    php artisan key:generate
    ```

### 🗄️ Database Setup

1. **Configure the database connection:**

    Open the [`.env`](.env) file and update the following variables with your database credentials:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
    ```

2. **Run the database migrations:**

    ```sh
    php artisan migrate
    ```

3. **Seed the database:**

    The project includes a database seeder to create an initial admin user. To run the seeder, use the following command:

    ```sh
    php artisan db:seed
    ```

    This will create an admin user with the following credentials:

    - Email: `administrator@gmail.com`
    - Password: `administrator123`

### 🏃 Running the Project

1. **Start the development server:**

    ```sh
    php artisan serve
    ```

You can now access the application at `http://localhost:8000`.

## 📚 Additional Information

- For more details on Laravel, visit the [official documentation](https://laravel.com/docs).
- For any issues or contributions, please open an issue or submit a pull request on the [GitHub repository](https://github.com/your-repo/laravel-stock-management).
