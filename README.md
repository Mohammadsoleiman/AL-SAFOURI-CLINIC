<p align="center">
  <img src="https://readme-typing-svg.demolab.com?font=Fira+Code&size=32&duration=2800&pause=2000&color=F75C7E&center=true&vCenter=true&width=800&lines=AL-SAFOURI+CLINIC;Advanced+Medical+Management+Platform;Multi-Role+%7C+Secure+%7C+Scalable" alt="Typing SVG" />
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-v11.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel"/>
  <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP"/>
  <img src="https://img.shields.io/badge/MySQL-8.0-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"/>
  <img src="https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap"/>
  <img src="https://img.shields.io/badge/Blade-Templates-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Blade"/>
</p>

<p align="center">
  <img src="https://img.shields.io/github/license/Mohammadsoleiman/AL-SAFOURI-CLINIC?style=flat-square" alt="License"/>
  <img src="https://img.shields.io/github/stars/Mohammadsoleiman/AL-SAFOURI-CLINIC?style=flat-square&color=yellow" alt="Stars"/>
  <img src="https://img.shields.io/github/forks/Mohammadsoleiman/AL-SAFOURI-CLINIC?style=flat-square&color=blue" alt="Forks"/>
  <img src="https://img.shields.io/github/issues/Mohammadsoleiman/AL-SAFOURI-CLINIC?style=flat-square&color=red" alt="Issues"/>
</p>

---

<div align="center">

## 🏥 **AL-SAFOURI CLINIC**
### *Next-Generation Medical Center Management System*

**A comprehensive healthcare management platform built with Laravel, featuring sophisticated role-based access control, real-time appointment scheduling, and seamless patient-doctor interaction.**

[🚀 Live Demo](#-demo-credentials) • [📖 Documentation](#-installation-guide) • [🤝 Contributing](#-contributing) • [📧 Contact](#-contact)

</div>

---

## 🌟 **Key Highlights**

<table>
  <tr>
    <td width="50%">
      
### 🎯 **Smart Architecture**
- **MVC Design Pattern** for clean code separation
- **Middleware Protection** on all sensitive routes
- **RESTful API** structure for scalability
- **Database Relationships** optimized with Eloquent ORM
- **Session Management** with secure authentication

    </td>
    <td width="50%">
      
### ⚡ **Modern Features**
- **Real-time Notifications** for appointments
- **Dynamic Dashboards** for each role
- **Advanced Search & Filters** across all modules
- **Responsive Design** works on all devices
- **Data Validation** with Laravel Form Requests

    </td>
  </tr>
</table>

---

## 🎭 **User Roles & Capabilities**

<div align="center">

| 👑 **ADMIN** | 👨‍⚕️ **DOCTOR** | 🧑‍🦽 **PATIENT** |
|:---:|:---:|:---:|
| Complete System Control | Medical Practice Management | Self-Service Portal |
| Manage All Users | View Patient Records | Book Appointments |
| Oversee Appointments | Add Diagnoses & Prescriptions | View Medical History |
| Generate Reports | Schedule Management | Profile Management |
| Database Administration | Patient Communication | Billing & Invoices |

</div>

---

## 🔐 **Authentication System**
```php
✨ Features:
├─ 🔒 Secure password hashing (bcrypt)
├─ 🛡️ CSRF protection on all forms
├─ 🚪 Role-based redirects after login
├─ 📱 Remember me functionality
├─ 🔑 Password reset via email
└─ 🚨 Account lockout after failed attempts
```

---

## 🧩 **System Architecture**

### 📂 **Project Structure**
```
AL-SAFOURI-CLINIC/
│
├── 📁 app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/
│   │   │   ├── Doctor/
│   │   │   └── Patient/
│   │   ├── Middleware/
│   │   └── Requests/
│   └── Models/
│
├── 📁 database/
│   ├── migrations/
│   └── seeders/
│
├── 📁 resources/
│   ├── views/
│   │   ├── auth/
│   │   ├── admin/
│   │   ├── doctor/
│   │   ├── patient/
│   │   └── layouts/
│   └── css/
│
├── 📁 routes/
│
├── 📁 public/
│   ├── css/
│   ├── js/
│   └── images/
│
└── 📁 config/
```


---

## 🚀 **Installation Guide**

### **Prerequisites**
```bash
✅ PHP >= 8.2
✅ Composer
✅ Node.js & NPM
✅ MySQL >= 8.0
✅ Git
```

### **Step 1️⃣: Clone Repository**
```bash
git clone https://github.com/Mohammadsoleiman/AL-SAFOURI-CLINIC.git
cd AL-SAFOURI-CLINIC
```

### **Step 2️⃣: Install Dependencies**
```bash
# Install PHP dependencies
composer install

# Install JavaScript dependencies
npm install
```

### **Step 3️⃣: Environment Configuration**
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

**Update `.env` file:**
```env
APP_NAME="AL-SAFOURI CLINIC"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=al_safouri_clinic
DB_USERNAME=root
DB_PASSWORD=your_password
```

### **Step 4️⃣: Database Setup**
```bash
# Create database
mysql -u root -p
CREATE DATABASE al_safouri_clinic;
exit;

# Run migrations
php artisan migrate


```

### **Step 5️⃣: Build Assets**
```bash
# Development
npm run dev

# Production
npm run build
```

### **Step 6️⃣: Launch Application**
```bash
php artisan serve
```

🎉 **Access at:** `http://localhost:8000`



## 🛠️ **Technology Stack**

<div align="center">

### **Backend**
![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)

### **Frontend**
![Blade](https://img.shields.io/badge/Blade-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)

### **Tools**
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)
![NPM](https://img.shields.io/badge/NPM-CB3837?style=for-the-badge&logo=npm&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white)

</div>


---

## 🤝 **Contributing**

Contributions are what make the open-source community amazing! Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📜 **License**

Distributed under the MIT License. See `LICENSE` for more information.

---

## 📧 **Contact**

<div align="center">

**Mohammad Soleiman**

[![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/Mohammadsoleiman)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://linkedin.com/in/mohammadsoleiman)
[![Email](https://img.shields.io/badge/Email-D14836?style=for-the-badge&logo=gmail&logoColor=white)](mailto:mohammad@alsafouri.com)

**Project Link:** [https://github.com/Mohammadsoleiman/AL-SAFOURI-CLINIC](https://github.com/Mohammadsoleiman/AL-SAFOURI-CLINIC)

</div>

---

<div align="center">

### ⭐ **If you found this project helpful, please give it a star!** ⭐

**Made with ❤️ by Mohammad Soleiman**

</div>

---

<p align="center">
  <img src="https://readme-typing-svg.demolab.com?font=Fira+Code&size=18&pause=1000&color=F75C7E&center=true&vCenter=true&width=600&lines=Thank+You+for+Visiting!;Star+⭐+this+repo+if+you+like+it;Happy+Coding+🚀" alt="Typing SVG" />
</p>
