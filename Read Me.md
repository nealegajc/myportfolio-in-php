# PHP Portfolio Assignment - Implementation Summary

## Assignment Details
**Course:** Individual Assignment: Code Organization with PHP Include and Form Validation  
**Deadline:** October 31, 2025  
**Institution:** Batangas State University - Lipa Campus  

## Files Created

### 1. Modular PHP Files

#### header.php
- Contains HTML head section with meta tags, CSS links, and Bootstrap
- Includes navigation bar with links to all sections
- Added "Login" link in navigation menu
- Background floating shapes animation

#### footer.php
- Contains closing body and html tags
- Includes Bootstrap JavaScript bundle for interactive components

#### index.php
- Main portfolio page using PHP include statements
- Includes `header.php` at the top
- Includes `footer.php` at the bottom
- Contains all portfolio sections:
  - About Me / Hero Section
  - Education
  - Skills & Hobbies
  - Work Experience
  - Projects
  - Contact Information

### 2. Form Validation Pages with Regular Expressions

#### login.php
**Regular Expression Patterns Used:**
1. **Email Validation:**
   ```php
   $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
   ```
   - Validates proper email format
   - Ensures @ symbol and domain extension

2. **Password Validation:**
   ```php
   $passwordPattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*#?&]{8,}$/";
   ```
   - Minimum 8 characters
   - At least one letter
   - At least one number
   - Allows special characters

**Features:**
- Server-side PHP validation
- Error messages displayed next to invalid fields
- Bootstrap form styling with validation states
- Demo credentials provided
- Session management for login state

**Demo Credentials:**
- Email: nealegajc@gmail.com
- Password: Password123

#### register.php
**Regular Expression Patterns Used:**
1. **Full Name Validation:**
   ```php
   $namePattern = "/^[a-zA-Z\s]{2,50}$/";
   ```
   - Only letters and spaces allowed
   - 2-50 characters length

2. **Email Validation:**
   ```php
   $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
   ```
   - Standard email format validation

3. **Phone Number Validation:**
   ```php
   $phonePattern = "/^(09|\+639)\d{9}$/";
   ```
   - Philippine phone number format
   - Accepts: 09XXXXXXXXX or +639XXXXXXXXX

4. **Strong Password Validation:**
   ```php
   $passwordPattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#])[A-Za-z\d@$!%*?&#]{8,}$/";
   ```
   - Minimum 8 characters
   - At least one uppercase letter
   - At least one lowercase letter
   - At least one number
   - At least one special character (@$!%*?&#)

5. **Password Confirmation:**
   - Ensures both password fields match

**Features:**
- Comprehensive server-side validation
- Real-time error feedback with Bootstrap validation classes
- Success message on successful registration
- Clear validation rules displayed on page
- Responsive two-column layout for form fields

## Technical Implementation

### PHP Include Structure
```php
<?php include 'header.php'; ?>
<!-- Page content here -->
<?php include 'footer.php'; ?>
```

### Form Processing Flow
1. Check if form submitted via POST method
2. Sanitize and validate each input using regex patterns
3. Display error messages if validation fails
4. Process data if all validations pass
5. Show success/error feedback to user

### Security Features
- `htmlspecialchars()` for XSS prevention
- Server-side validation (not just client-side)
- Session management for authentication
- Password confirmation matching
- Input sanitization with `trim()`

## Testing Results

All PHP files have been syntax-checked and validated:
- ✅ index.php - No syntax errors
- ✅ login.php - No syntax errors
- ✅ register.php - No syntax errors
- ✅ header.php - No syntax errors
- ✅ footer.php - No syntax errors

## How to Test

1. **Start XAMPP Apache Server:**
   ```bash
   sudo /opt/lampp/lampp start
   ```

2. **Access the Portfolio:**
   - Open browser and navigate to: `http://localhost/myportfolio-in-php/`
   - Or: `http://localhost/myportfolio-in-php/index.php`

3. **Test Login Page:**
   - Navigate to: `http://localhost/myportfolio-in-php/login.php`
   - Try invalid inputs to see validation
   - Use demo credentials to test successful login

4. **Test Register Page:**
   - Navigate to: `http://localhost/myportfolio-in-php/register.php`
   - Test each field with invalid data
   - Try mismatched passwords
   - Submit valid data to see success message

## Project Structure
```
myportfolio-in-php/
├── header.php          (Navigation and HTML head)
├── footer.php          (Scripts and HTML closing tags)
├── index.php           (Main portfolio page with includes)
├── login.php           (Login form with regex validation)
├── register.php        (Registration form with regex validation)
├── index.html          (Original HTML file - kept for reference)
├── css/
│   └── style.css       (Glassmorphism styling)
├── images/             (Profile and logo images)
└── README.md           (Project documentation)
```

## Key Learning Outcomes

1. ✅ **Code Organization:** Separated code into modular, reusable sections
2. ✅ **PHP Include:** Used include statements to build pages from components
3. ✅ **Regular Expressions:** Applied regex patterns for input validation
4. ✅ **Form Processing:** Implemented server-side form handling in PHP
5. ✅ **Security:** Applied best practices for input sanitization
6. ✅ **User Experience:** Provided clear validation feedback to users

## Assignment Requirements Met

- [x] Converted HTML to PHP
- [x] Created modular sections (header, footer)
- [x] Used PHP include statements
- [x] Created login.php with validation
- [x] Created register.php with validation
- [x] Applied regular expressions for validation
- [x] Tested all functionality
- [x] All files properly named and organized

---

## How to Test the Assignment

### 1. Access the Portfolio
XAMPP Apache must be running. Open your browser and visit:
```
http://localhost/myportfolio-in-php/index.php
```

### 2. Test Login Page
Navigate to: `http://localhost/myportfolio-in-php/login.php`

**Test Cases:**
- Invalid email format (e.g., "test@test") → Validation error
- Short password (e.g., "123") → Validation error
- **Valid Demo Credentials:**
  - Email: `nealegajc@gmail.com`
  - Password: `Password123`

### 3. Test Register Page
Navigate to: `http://localhost/myportfolio-in-php/register.php`

**Test Cases:**
- Numbers in name field → Validation error
- Invalid email → Validation error
- Invalid phone (e.g., "1234") → Validation error
- Weak password → Validation error
- Mismatched passwords → Validation error
- Valid data in all fields → Success message

### 4. Verify PHP Include Structure
View page source (Ctrl+U) to confirm:
- No `<?php include` statements visible in browser
- Header navigation appears on all pages
- Footer scripts load correctly

### 5. XAMPP Commands (if needed)
```bash
# Check status
sudo /opt/lampp/lampp status

# Restart if needed
sudo /opt/lampp/lampp restart
```

## Submission Checklist

### Files to Submit:
- [x] header.php
- [x] footer.php
- [x] index.php
- [x] login.php
- [x] register.php
- [x] css/style.css
- [x] images/ folder
- [x] ASSIGNMENT_SUMMARY.md

### Screenshots Required:
1. Index page showing portfolio
2. Login page with form
3. Login validation errors
4. Register page with form
5. Register validation errors
6. Register success message
7. Code screenshots (header.php, footer.php, index.php, login.php, register.php)

---
**Student:** JC Jade Nealega  
**Date:** October 31, 2025  
**Course:** Information Technology  
**Institution:** Batangas State University - Lipa Campus
