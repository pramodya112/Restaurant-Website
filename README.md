# 🍽️ Restaurant Management & Reservation System

A fully functional web-based restaurant management system that allows users to browse multi-cuisine menus, book tables, leave reviews, and receive invoices — all while managed through an admin dashboard. Developed using PHP, MySQL, JavaScript, HTML, CSS, and Bootstrap.

---

## 🚀 Features

### 👤 User Side
- Browse cuisines by type: **Sri Lankan**, **Indian**, **Chinese**
- Filter menus using a dynamic dropdown
- Register/login with **valid email validation**
- Book tables and pre-order cuisines (only after login)
- Receive an **automatically generated invoice** after selection
- Leave reviews on meals and experiences (after login)

### 🧾 Invoice Generation
- Detailed invoice includes selected cuisines, total price, and user details
- Displayed immediately after confirmation
- Available only for registered users

### 🛠️ Admin Dashboard
- View and manage reservations
- Add, update, or remove menu items
- Manage user reviews and feedback
- Control cuisine categories and special dishes
- View system statistics

---

## 🔐 Access Control

| Feature             | Requires Login | Admin Only |
|---------------------|----------------|------------|
| View Menu           | ❌             | ❌         |
| Book Table          | ✅             | ❌         |
| Leave Review        | ✅             | ❌         |
| Generate Invoice    | ✅             | ❌         |
| Manage Menu Items   | ❌             | ✅         |
| Manage Reservations | ❌             | ✅         |

---

## 🧰 Tech Stack

- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Backend**: PHP
- **Database**: MySQL

---

## 📁 Project Structure

/restaurant-management
├── admin/ # Admin dashboard pages
├── user/ # User-side reservation and menu pages
├── includes/ # Reusable components (header, DB config)
├── css/ # Stylesheets
├── js/ # JavaScript files
├── img/ # Menu images and UI assets
└── index.php # Landing page
