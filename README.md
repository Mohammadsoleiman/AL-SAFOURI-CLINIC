<!-- 🔥 Animated Title -->
<p align="center">
  <a href="#">
    <img src="https://readme-typing-svg.demolab.com?font=JetBrains+Mono&size=24&pause=1000&color=1D9BF0&center=true&vCenter=true&width=800&lines=Medical+Center+Management+System;Laravel+Project+with+Multi-Role+Login+(Admin%2C+Doctor%2C+Patient)" />
  </a>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-Framework-red" />
  <img src="https://img.shields.io/badge/PHP-Backend-blue" />
  <img src="https://img.shields.io/badge/MySQL-Database-orange" />
  <img src="https://img.shields.io/badge/Blade-Templating-purple" />
  <img src="https://img.shields.io/badge/Bootstrap-Frontend-success" />
</p>

---

## 🏥 Overview

**Medical Center Management System** is a complete Laravel application with multi-role access control.  
It includes separate dashboards for:

- **Admin** – full system control  
- **Doctor** – patient & appointment management  
- **Patient** – booking appointments & viewing medical history  

The system ensures a clean workflow and privacy using role-based routing and secure authentication.

---

## ✨ Core Features

### 🔐 Authentication & Roles
- Secure login system  
- Role-based redirects  
- Protected routes using middleware  

---

### 🧑‍💼 Admin Dashboard
Admin is connected to *everything* in the system:

- Manage doctors  
- Manage patients  
- Manage appointments  
- Full access to medical records  
- Complete system overview  

> Admin has the highest privilege level.

---

### 👨‍⚕️ Doctor Dashboard
Doctors can:

- View appointments  
- Access patient medical history  
- Add diagnosis & notes  
- Manage personal schedule  

---

### 🧑‍🦽 Patient Dashboard
Patients can:

- Create an account  
- Book appointments  
- View upcoming & past visits  
- Manage personal profile  

---

## 🧰 Tech Stack

- **Backend:** Laravel (PHP)  
- **Frontend:** Blade, Bootstrap, CSS  
- **Database:** MySQL  
- **Tools:** Composer, NPM, Vite, Artisan CLI  
- **Architecture:** MVC  

---

## 📂 Folder Structure

app/
├─ Http/
│ ├─ Controllers/
│ │ ├─ Admin/
│ │ ├─ Doctor/
│ │ └─ Patient/
│ └─ Middleware/
database/
├─ migrations/
└─ seeders/
resources/
├─ views/
│ ├─ auth/
│ ├─ admin/
│ ├─ doctor/
│ └─ patient/
routes/
├─ web.php
public/
└─ assets/

yaml
Copy code

---

## ⚙️ Installation Guide (Step-By-Step)

### 1️⃣ Clone the Repository

```bash
git clone https://github.com/USERNAME/Medical-Center.git
cd Medical-Center
2️⃣ Install Dependencies
bash
Copy code
composer install
npm install
3️⃣ Configure Environment
bash
Copy code
cp .env.example .env
Update your .env database info:

makefile
Copy code
DB_DATABASE=medical_center
DB_USERNAME=root
DB_PASSWORD=
4️⃣ Generate App Key
bash
Copy code
php artisan key:generate
5️⃣ Run Migrations
bash
Copy code
php artisan migrate
6️⃣ Start the Project
Backend (Laravel):

bash
Copy code
php artisan serve
Frontend (Vite):

bash
Copy code
npm run dev
🧪 Demo Credentials (Optional)
Admin

makefile
Copy code
Email: admin@gmail.com
Password: admin123
Doctor

makefile
Copy code
Email: doctor@gmail.com
Password: doctor123
Patient

makefile
Copy code
Email: patient@gmail.com
Password: patient123
📞 Contact
Feel free to connect if you'd like to collaborate or improve this project.

yaml
Copy code
