# IBPFM Project Structure & Workflow

This document outlines the reorganized structure and the database workflow for the **Intelligence Based Pollution Free Mission (IBPFM)** website.

## 📁 Directory Structure

The project has been structured to separate concerns and organize assets, content, and backend logic.

```text
IBPFM/
├── index.html            # Main landing page
├── ai.html               # AI Chat interface
├── report.html           # Pollution reporting form
├── learn.html            # Introduction to learning modules
├── aboutus.html          # Team and project mission
├── gov.html              # Government certified courses
├── success.html          # Form submission success page
├── css/                  # All styling files
├── img/                  # Project images and assets
├── php/                  # Backend processing scripts
│   ├── db_connect.php    # Centralized database connection
│   ├── submit_report.php # Processes form submissions
│   └── view-reports.php  # Admin view for submitted reports
├── topics/               # Individual learning topic pages (1-10)
└── sql/                  # Database schema scripts
    └── setup.sql         # SQL script to initialize the database
```

## 🛠️ Workflow: Pollution Reporting

The website features a reporting workflow that allows user to notify the organization about pollution in their area.

1.  **Frontend**: User fills out the form in `report.html`.
2.  **Backend**: The form data is sent via POST to `php/submit_report.php`.
3.  **Database**: The script connects to the `reports_db` via `php/db_connect.php` and inserts the data into the `reports` table.
4.  **Status**: Reports are initially marked as **'Pending'**.
5.  **Admin View**: The organization can monitor reports through `php/view-reports.php`.

## 🗄️ Database Schema

The database is defined in `sql/setup.sql`.

- **Database**: `reports_db`
- **Table**: `reports`
    - `id`: Unique identifier
    - `name`: Reporter's name
    - `email`: Contact email
    - `address`: Location of the dump/pollution
    - `description`: Details of the report
    - `status`: ['Pending', 'In Progress', 'Resolved']
    - `created_at`: Timestamp of submission
