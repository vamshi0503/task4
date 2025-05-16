# 🔐 Secure Login System (PHP + MySQL)

This is a simple and secure PHP-based user authentication system with:

- ✅ Prepared statements using PDO (Prevents SQL Injection)
- ✅ Client-side and server-side form validation
- ✅ User roles (`admin`, `user`)
- ✅ Session management and protected pages

---

## 📁 Folder Structure

secure_login_system/
├── includes/
│ └── db.php # Database connection using PDO
├── register.php # User registration form and logic
├── login.php # User login form and logic
├── dashboard.php # Main user dashboard (login required)
├── admin.php # Admin-only page (role-based access)
├── logout.php # Ends session and logs out
├── index.php # Landing page with links
