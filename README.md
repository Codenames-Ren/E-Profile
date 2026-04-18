# E-Profile

A web-based profile and student registration system for an elementary school.

## 🚀 Tech Stack

* Backend: Laravel 13
* Frontend: Blade (Laravel Breeze)
* Database: PostgreSQL (Supabase - planned)

## 📌 Planned Features

* School profile page
* Academic information
* Student registration system
* Admin dashboard for managing student data
* Authentication (login & register)

## ⚙️ Project Setup

### 1. Clone Repository

```bash
git clone https://github.com/Codenames-Ren/E-Profile.git
cd E-Profile
```

### 2. Install Dependencies

```bash
composer install
npm install
```

### 3. Setup Environment

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Run Development Server

```bash
php artisan serve
npm run dev
```

## 🧪 Development Notes

* This project uses a monolithic architecture
* API endpoints are used for backend testing (via Postman)
* Database integration will use Supabase (PostgreSQL)
* Frontend will be handled separately based on team decisions