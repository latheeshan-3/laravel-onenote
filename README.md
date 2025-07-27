# 📚 Student Notes Sharing System

This is a simple Laravel-based web application developed during the first year at the Faculty of Information Technology, University of Moratuwa. The system allows students to log in using their student ID and access relevant module notes and recording links.

> ⚠️ This project was built as a self-learning initiative while exploring PHP and Laravel fundamentals.

---

## 🚀 Features

- Student login with student ID
- View a list of modules related to the student
- Access shared notes (PDFs, docs, etc.)
- View or open class recording links (Google Drive or other platforms)
- Clean and minimal UI for easy navigation

---

## 🛠️ Tech Stack

- **Backend:** PHP (Laravel Framework)
- **Frontend:** Blade Templates, HTML/CSS
- **Database:** MySQL
- **Authentication:** Simple login using Student ID
- **Storage:** Drive links for recordings and shared materials

---

## 💡 How It Works

1. A student logs in using their student ID.
2. The system identifies their enrolled modules.
3. For each module, students can:
   - View or download uploaded notes.
   - Access class recordings via shared Drive links.
4. Admin (optional) can add/edit module notes and links.

---

## 🧱 Database Structure (Simplified)

- **Users Table**
  - `id`
  - `student_id`
  - `name`
  - `password` *(optional for now)*

- **Modules Table**
  - `id`
  - `module_code`
  - `module_name`

- **Notes Table**
  - `id`
  - `module_id`
  - `note_title`
  - `file_url` *(link to Google Drive or cloud storage)*

- **Recordings Table**
  - `id`
  - `module_id`
  - `recording_title`
  - `drive_link`

---

## 📂 Project Structure (Typical Laravel)

