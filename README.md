# <img src="img/logo.png" width="45" align="center"> IB P F M

### **Intelligence Based Pollution Free Mission**
*Empowering communities through AI-driven intelligence and collaborative action for a greener planet.*

[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![PRs Welcome](https://img.shields.io/badge/PRs-welcome-brightgreen.svg)](http://makeapullrequest.com)
[![Project Status](https://img.shields.io/badge/Status-Active-success.svg)]()
[![Event](https://img.shields.io/badge/Event-Sparkathon24-blue)]()

---

## 🌍 Overview
**IBPFM** is a state-of-the-art environmental management platform designed for **Sparkathon24**. It bridges the gap between environmental awareness and tangible community action. By combining **Generative AI**, **Real-time Data Analytics**, and a **Community Reporting Engine**, IBPFM provides a 360-degree approach to combating local and global pollution.

---

## 🔄 System Workflow
Our platform follows a "Discover → Learn → Act" cycle.

![IBPFM Workflow](img/workflow.svg)

---

## ✨ Core Pillars

### 🤖 **Intelligence** (ECO AI)
Powered by **Google Gemini**, our context-aware assistant provides instant, expert-level answers to complex environmental questions. 
- **Domain Specific**: Optimized to focus strictly on sustainability and ecology.
- **Interactive**: Helps users understand how to treat sewage, analyze AQI, and manage waste.

### 📊 **Real-time Awareness**
- **Dynamic Monitoring**: Integrated with the **WAQI API** to track air quality across India.
- **Data-Driven**: Automatically identifies the most polluted regions to prioritize community focus.

### 📚 **Education Hub**
A comprehensive multi-topic curriculum designed to build environmental literacy:
- **Modular Topics**: Covering everything from biodiversity to atmospheric chemistry.
- **Certified Pathways**: Curated links to professional certification from Udemy, Coursera, and MIT.
- **Gov-Connect**: Direct access to Indian government environmental initiatives.

### 📢 **Action Engine** (Reporting System)
A robust PHP/MySQL infrastructure for community accountability.
- **Geo-Reporting**: Users document and report pollution hotspots.
- **Accountability**: Admins can track report status from *Pending* to *Resolved*.
- **Data Integrity**: Built-in validation and success tracking.

---

## 🛠️ Technology Stack

| Layer | Technologies |
| :--- | :--- |
| **Frontend** | HTML5, Modern CSS3 (Grid/Flexbox), JavaScript (ES6+) |
| **Intelligence** | Google Gemini API (NLP), WAQI API (Environment Data) |
| **Backend** | PHP 7.4+ |
| **Database** | MySQL / MariaDB |
| **Visuals** | SVG Animations, Premium Typography |

---

## 🚀 Installation & Local Setup

### 1. Prerequisites
- **Web Server**: Apache/Nginx (XAMPP or WAMP recommended)
- **PHP**: v7.4 or higher
- **SQL**: MySQL / MariaDB

### 2. Database Initialization
```bash
# Log into MySQL
mysql -u root -p
# Create and populate database
CREATE DATABASE reports_db;
USE reports_db;
SOURCE sql/setup.sql;
```

### 3. Deploy Files
Clone the repository into your `htdocs` or `www` directory:
```bash
git clone https://github.com/sowmiyan-s/IBPFM.git
```

### 4. Configuration
Ensure your database credentials match in `php/db_connect.php`:
```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reports_db";
```

---

## 📂 Project Architecture
```text
IBPFM/
├── index.html            # Smart Dashboard & AQI Monitor
├── ai.html               # Gemini-powered ECO AI Interface
├── report.html           # Community Reporting Gateway
├── learn.html            # Educational Foundation
├── php/                  # Backend Processing logic
├── sql/                  # Database Schemas & Seeds
├── topics/               # Curated Environmental Modules
└── css/                  # Premium Design Tokens
```

---

## 👥 Meet the Team: **Bot With Dot**

| <img src="https://github.com/SOWMIYAN-S.png" width="80"><br>Sowmiyan S | <img src="https://github.com/Sathwik1922.png" width="80"><br>Sathwik N | <img src="https://github.com/Sudarsonbalu.png" width="80"><br>Sudarson B | <img src="https://img.icons8.com/clouds/100/000000/user.png" width="80"><br>Vishal |
| :---: | :---: | :---: | :---: |
| Lead Developer | Core Developer | Core Developer | Developer |

---

## 🤝 Contributing
Contributions make the open-source community an amazing place to learn, inspire, and create.
1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

---

## 📜 License
Distributed under the **MIT License**. See `LICENSE` for more information.

---
*Developed with ❤️ for a cleaner, greener planet.*
