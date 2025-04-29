
# 💳 Online Banking System in PHP

An Online Banking System developed using PHP and MySQL, designed to manage customer accounts, transactions, and administrative operations efficiently. This web-based application facilitates banking activities such as fund transfers, deposits, withdrawals, and account management through a user-friendly interface.

## 📌 Features

### 👤 Customer Panel
- **User Registration & Login**: Secure authentication for customers.
- **Account Overview**: View account details and current balance.
- **Fund Transfer**: Transfer funds to other accounts.
- **Transaction History**: Access detailed statements of transactions.
- **Password Management**: Change and recover passwords securely.

### 🧑‍💼 Staff Panel
- **Staff Authentication**: Secure login for bank staff.
- **Customer Management**: Approve new customer accounts and manage existing ones.
- **Transaction Processing**: Assist customers with deposits, withdrawals, and fund transfers.
- **Account Statements**: Generate and view customer account statements.

### 🛠️ Admin Panel
- **Admin Authentication**: Secure login for administrators.
- **Staff Management**: Add, update, or remove staff members.
- **System Settings**: Configure system-wide settings and manage announcements.
- **Audit Trails**: Monitor system activities and transactions.

## 🏗️ Project Structure

- `customer_login.php`: Customer login interface.
- `staff_login.php`: Staff login interface.
- `admin_login.php`: Administrator login interface.
- `customer_dashboard.php`: Dashboard for customer activities.
- `staff_dashboard.php`: Dashboard for staff operations.
- `admin_dashboard.php`: Dashboard for administrative tasks.
- `transaction.php`: Handles fund transfers and transaction processing.
- `account_statement.php`: Displays transaction history and account statements.
- `css/`: Contains stylesheet files for UI design.
- `img/`: Stores image assets used in the application.
- `DATABASE FILE/`: Includes the SQL file for database setup.

## 🚀 Installation Guide

### Prerequisites
- **Web Server**: [XAMPP](https://www.apachefriends.org/) or [WAMP](https://www.wampserver.com/) installed on your local machine.
- **PHP**: Version 5.6 or higher.
- **MySQL**: Version 5.6 or higher.

### Steps
1. **Clone the Repository**:
   ```bash
   git clone https://github.com/ThakurAmanKumar/Online-Banking-System-php.git
   ```
2. **Move to Server Directory**:
   - For XAMPP: Move the project folder to `C:\xampp\htdocs\`.
   - For WAMP: Move the project folder to `C:\wamp\www\`.

3. **Start Server Services**:
   - Launch XAMPP/WAMP control panel.
   - Start **Apache** and **MySQL** services.

4. **Database Setup**:
   - Open [phpMyAdmin](http://localhost/phpmyadmin/).
   - Create a new database named `bnkms`.
   - Import the SQL file located at `DATABASE FILE/bnkms.sql`.

5. **Configure Database Connection**:
   - Open the `db_connect.php` file.
   - Update the database credentials as per your setup:
     ```php
     $host = 'localhost';
     $user = 'root';
     $password = '';
     $database = 'bnkms';
     ```

6. **Access the Application**:
   - Customer Portal: [http://localhost/Online-Banking-System-php/customer_login.php](http://localhost/Online-Banking-System-php/customer_login.php)
   - Staff Portal: [http://localhost/Online-Banking-System-php/staff_login.php](http://localhost/Online-Banking-System-php/staff_login.php)
   - Admin Portal: [http://localhost/Online-Banking-System-php/admin_login.php](http://localhost/Online-Banking-System-php/admin_login.php)

## 🔐 Default Credentials

### Admin
- **Username**: `admin`
- **Password**: `admin123`

### Staff
- **Username**: `staff`
- **Password**: `staff123`

### Customer
- **Email**: `customer@example.com`
- **Password**: `customer123`

> ⚠️ **Note**: It's highly recommended to change default credentials after the first login to enhance security.

## ⚠️ Security Considerations

Be aware of known vulnerabilities associated with similar online banking systems:

- **SQL Injection Vulnerabilities**:
  - CVE-2022-23363: SQL injection via `index.php`. ([cvedetails.com](https://www.cvedetails.com/cve/CVE-2022-23363/?utm_source=chatgpt.com))
  - CVE-2022-25494: SQL injection via `staff_login.php`. ([cvedetails.com](https://www.cvedetails.com/cve/CVE-2022-25494/?utm_source=chatgpt.com))
  - CVE-2022-27991: Multiple SQL injections via `staff_login.php`. ([cvedetails.com](https://www.cvedetails.com/cve/CVE-2022-27991/?utm_source=chatgpt.com))

**Recommendations**:
- **Input Validation**: Implement robust input validation to prevent malicious inputs.
- **Prepared Statements**: Use prepared statements for all database queries to mitigate SQL injection risks.
- **Password Hashing**: Store passwords using strong hashing algorithms like Bcrypt.
- **Regular Updates**: Keep all dependencies and libraries up to date.
- **HTTPS**: Deploy the application over HTTPS to ensure encrypted data transmission.


## 🤝 Contributing

### 👨‍💻 Project Contributors
- **Aman Kumar Thakur** (AP23110011682)
- **Bibek Kumar Sah** (AP23110011548)
- **Sameer Bachhar** (AP23110011496)
- **Bikash Kumar Mahato** (AP23110011681)


Contributions are welcome! Please fork the repository and submit a pull request for any enhancements or bug fixes.

## 📞 Contact

For any queries or support, please contact [Aman Kumar Thakur](mailto:er.thakuramankumar@gmail.com
).
