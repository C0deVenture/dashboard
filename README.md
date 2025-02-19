
# Laravel 11 Project

## Prerequisites

Before you begin, ensure you have met the following requirements:

- **PHP:** Make sure PHP version 8.2 or higher is installed on your system. 
- **Composer:** Ensure you have Composer installed, which is used to manage PHP dependencies.
- **Web Server:** Use Laravel's built-in development server.
- **Database:** The project is using SQLite.
- **Node.js:** Ensure you have Node.js and npm (Node Package Manager) installed.

You can verify your environment installations by running the following commands:

```bash
php -v
composer -V
node -v
npm -v
```


## Project installation

Install all PHP dependencies

```bash
composer install
```

Create .env file

```bash
cp .env.example .env
```

Generate a key

```bash
php artisan key:generate
```

Database Migrations (SQLite)

```bash
php artisan migrate
```

Install all Node.js dependencies

```bash
npm install
```

# Running the Laravel Project

To run the Laravel project, you'll need to start the Laravel development server and the frontend development server in separate terminal windows.

Start the Laravel development server (first terminal)

```bash
php artisan serve
```

Frontend assets (second terminal) 

```bash
npm run dev
```



