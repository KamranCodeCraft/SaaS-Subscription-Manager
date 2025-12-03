# KoderaCraft SaaS Manager

## 🚀 Overview
**KoderaCraft SaaS Manager** is a cutting-edge, production-ready SaaS boilerplate designed to streamline subscription management, plan creation, and recurring billing. Built with performance and aesthetics in mind, it features a modern **Glassmorphism UI** and a stunning **3D Interactive Landing Page**.

This application serves as a robust foundation for launching your next big SaaS idea, handling the complexities of user authentication, database management, and subscription logic so you can focus on your core product.

---

## 🛠️ Technology Stack
We chose this stack to ensure scalability, developer experience, and a premium user interface:

-   **Backend**: [Laravel 11](https://laravel.com) - The most elegant PHP framework for secure and scalable APIs.
-   **Database**: [Neon PostgreSQL](https://neon.tech) - Serverless Postgres for high availability and instant branching.
-   **Frontend Styling**: [Tailwind CSS](https://tailwindcss.com) - Utility-first CSS for rapid, custom UI development.
-   **Interactivity**: [Alpine.js](https://alpinejs.dev) - Lightweight JavaScript framework for reactive components without the bloat.
-   **3D Graphics**: [Three.js](https://threejs.org) - WebGL library for the immersive particle network on the landing page.
-   **Authentication**: [Laravel Sanctum](https://laravel.com/docs/sanctum) - Simple and lightweight token-based authentication.

---

## ✨ Key Features

### 1. 🌐 Immersive Landing Page (`/`)
-   **Tech**: Three.js, WebGL.
-   **Experience**: A dynamic 3D particle network that reacts to mouse movements, symbolizing connectivity and data.
-   **Design**: Dark mode with glass-morphic cards and smooth gradients.

### 2. 🔐 Secure Authentication
-   **Routes**: `/login.html`, `/register.html`
-   **Features**:
    -   Secure user registration and login.
    -   Token-based session management (stored in LocalStorage).
    -   Protected routes that redirect unauthenticated users.

### 3. 💎 Dynamic Pricing Page (`/pricing.html`)
-   **Features**:
    -   Fetches real-time plans from the database.
    -   Displays active user subscriptions.
    -   Interactive "Subscribe" flow with mock payment modal.
    -   Glassmorphism UI with glowing background effects.

### 4. 🎛️ Admin Dashboard (`/admin.html`)
-   **Purpose**: Complete control over your SaaS plans.
-   **Capabilities**:
    -   **Create Plans**: Define name, price, interval, and currency.
    -   **List Plans**: View all active plans in a responsive table.
    -   **Secure**: Accessible only to authenticated users.

---

## 🚀 Getting Started

### Prerequisites
-   PHP 8.2+
-   Composer
-   Node.js & NPM

### Installation

1.  **Clone the Repository**
    ```bash
    git clone https://github.com/koderacraft/saas-manager.git
    cd saas-manager
    ```

2.  **Install Dependencies**
    ```bash
    composer install
    npm install
    ```

3.  **Environment Setup**
    -   Copy `.env.example` to `.env`.
    -   Configure your **Neon PostgreSQL** credentials in `.env`.

4.  **Database Migration**
    ```bash
    php artisan migrate
    ```

5.  **Serve the Application**
    ```bash
    php artisan serve
    ```

6.  **Visit the App**
    Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.

---

## 🤝 Contributing
Built with ❤️ by **KoderaCraft**.
