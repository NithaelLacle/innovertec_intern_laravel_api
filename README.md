# Innovertec Intern Laravel API (Hands-on Lab)

**Innovertec Intern Laravel API** is a production-grade, architectural educational project designed by **INNOVERTEC SARL**. It serves as a practical, hands-on lab (Travaux Pratiques Dirigés) for internal interns. 

The primary goal of this repository is to demonstrate how to transition from basic Laravel development to enterprise-level software design, focusing heavily on **clean code, maintainability, scalability, and extensibility**.

---

## 🎯 Purpose & Learning Objectives

Instead of writing all logic inside controllers, this project breaks down components into specialized architectural layers. By studying and working on this repository, interns learn how to build decoupled, testable, and robust enterprise APIs using modern Laravel standards.

### Core Architectural Concepts Covered:
*   **Data Transfer Objects (DTOs):** Strictly typing incoming requests and payload data before it touches the business logic.
*   **Form Request Validation:** Encapsulating strict input validation rules away from controllers.
*   **Service Layer:** Isolating business logic into dedicated, reusable classes.
*   **Repository Pattern:** Decoupling database queries from business logic to ensure flexible data abstraction.
*   **Custom Exception Handling:** Centralizing error capturing and transforming raw system failures into clean, predictable API error responses.
*   **API Standardization:** Structuring consistent JSON responses across all endpoints.

---

## 🏗️ Architecture Blueprint

The project data flow follows this rigorous, decoupled pipeline:

```markdown
[Client Request]
    │
    ▼
[Form Request Validation] ──► (Invalid: 422 Error Response)
    │
    ▼
[Data Transfer Object (DTO)]
    │
    ▼
[Controller] (Kept skinny; routes data to the Service)
    │
    ▼
[Service Layer] (Executes Business Logic / Triggers Custom Exceptions)
    │
    ▼
[Repository Layer] (Interacts with Database / Eloquent Models)
    │
    ▼
[Database]
```

---

## 🚀 Technical Requirements

*   **PHP:** >= 8.2
*   **Laravel Framework:** >= 10.x / 11.x
*   **Database:** MySQL / PostgreSQL
*   **Package Manager:** Composer

---

## 🔧 Installation & Setup

1. **Clone the repository:**
   ```bash
   git clone https://github.com
   cd innovertec_intern_laravel_api
   ```

2. **Install Composer dependencies:**
   ```bash
   composer install
   ```

3. **Configure Environment Variables:**
   ```bash
   cp .env.example .env
   ```
   *Open `.env` and configure your database credentials (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).*

4. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

5. **Execute Database Migrations & Seeders:**
   ```bash
   php artisan migrate --seed
   ```

6. **Boot Local Development Server:**
   ```bash
   php artisan serve
   ```
   The API endpoint will be locally accessible at `http://127.0.0`.

---

## 📂 Key Directory Structure Highlights

To help interns navigate the enterprise structure, take note of these key custom directories:
*   `app/Http/Requests/` - Location for Form Validation logic.
*   `app/DTOs/` - Location for Data Transfer Objects mapping request payloads.
*   `app/Services/` - Core business logic engine of the application.
*   `app/Repositories/` - Data access abstraction layer.
*   `app/Exceptions/` - Custom domain-specific exception files.

---

## 🛡️ License

This project is proprietary property of **INNOVERTEC SARL** and is intended exclusively for internal internship training and educational evaluation.
