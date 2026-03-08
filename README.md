# Laravel Task Manager

A simple **CRUD Task Manager** built with **Laravel**.
This project demonstrates creating, editing, updating, and deleting tasks, as well as marking tasks as completed.

---

## Features

* Create tasks with a title
* Edit existing tasks
* Mark tasks as **Completed**
* Delete tasks
* Display success messages after actions
* Simple and clean UI using **Bootstrap 5**

---

## Technologies Used

* **Laravel 10**
* **PHP 8+**
* **MySQL**
* **Blade Templating**
* **Bootstrap 5**

---

## Installation

1. **Clone the repository**

```bash
git clone https://github.com/YOUR_USERNAME/laravel-task-manager.git
cd laravel-task-manager
```

2. **Install dependencies**

```bash
composer install
```

3. **Copy `.env` file and set environment variables**

```bash
cp .env.example .env
```

Edit `.env` and update your database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=
```

4. **Generate application key**

```bash
php artisan key:generate
```

5. **Run migrations**

```bash
php artisan migrate
```

6. **Serve the application**

```bash
php artisan serve
```

Visit `http://127.0.0.1:8000` in your browser.

---

## Folder Structure

```
app/
├─ Http/Controllers/TaskController.php
├─ Models/Task.php

database/migrations/
├─ 2026_03_07_144152_create_tasks_table.php

resources/views/
├─ layouts/app.blade.php
├─ tasks/
│  ├─ index.blade.php
│  ├─ create.blade.php
│  └─ edit.blade.php

routes/web.php
```

---

## Usage

1. Navigate to `/tasks` to see all tasks
2. Click **Add Task** to create a new task
3. Click **Edit** to update a task and mark it completed
4. Click **Delete** to remove a task

---

## License

This project is **open source** and free to use.
