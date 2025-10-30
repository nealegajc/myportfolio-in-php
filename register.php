<?php
// Registration Page with PHP Form Validation using Regular Expressions
session_start();

// Initialize variables
$fullname = $email = $phone = $password = $confirmPassword = "";
$fullnameErr = $emailErr = $phoneErr = $passwordErr = $confirmPasswordErr = $successMsg = "";
$isValid = false;

// Process form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;
    
    // Validate Full Name
    if (empty($_POST["fullname"])) {
        $fullnameErr = "Full name is required";
        $isValid = false;
    } else {
        $fullname = trim($_POST["fullname"]);
        // Regular expression for name validation (letters and spaces only, 2-50 chars)
        $namePattern = "/^[a-zA-Z\s]{2,50}$/";
        if (!preg_match($namePattern, $fullname)) {
            $fullnameErr = "Name should contain only letters and spaces (2-50 characters)";
            $isValid = false;
        }
    }
    
    // Validate Email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        $isValid = false;
    } else {
        $email = trim($_POST["email"]);
        // Regular expression for email validation
        $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
        if (!preg_match($emailPattern, $email)) {
            $emailErr = "Invalid email format";
            $isValid = false;
        }
    }
    
    // Validate Phone Number
    if (empty($_POST["phone"])) {
        $phoneErr = "Phone number is required";
        $isValid = false;
    } else {
        $phone = trim($_POST["phone"]);
        // Regular expression for Philippine phone number (09XX-XXX-XXXX or 9XXXXXXXXX)
        $phonePattern = "/^(09|\+639)\d{9}$/";
        if (!preg_match($phonePattern, $phone)) {
            $phoneErr = "Invalid phone format. Use: 09XXXXXXXXX or +639XXXXXXXXX";
            $isValid = false;
        }
    }
    
    // Validate Password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
        $isValid = false;
    } else {
        $password = $_POST["password"];
        // Regular expression for strong password validation
        // At least 8 chars, 1 uppercase, 1 lowercase, 1 number, 1 special character
        $passwordPattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&#])[A-Za-z\d@$!%*?&#]{8,}$/";
        if (!preg_match($passwordPattern, $password)) {
            $passwordErr = "Password must be 8+ chars with uppercase, lowercase, number & special character";
            $isValid = false;
        }
    }
    
    // Validate Confirm Password
    if (empty($_POST["confirmPassword"])) {
        $confirmPasswordErr = "Please confirm your password";
        $isValid = false;
    } else {
        $confirmPassword = $_POST["confirmPassword"];
        if ($password !== $confirmPassword) {
            $confirmPasswordErr = "Passwords do not match";
            $isValid = false;
        }
    }
    
    // If all validations pass
    if ($isValid) {
        // In a real application, you would save to database here
        $successMsg = "Registration successful! You can now login.";
        // Clear form data
        $fullname = $email = $phone = $password = $confirmPassword = "";
    }
}
?>

<?php include 'header.php'; ?>

<main class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
            <div class="glass-card">
                <div class="text-center mb-4">
                    <i class="fas fa-user-plus fa-3x mb-3" style="color: #00ff00;"></i>
                    <h2><i class="fas fa-user-circle me-2"></i>Create Account</h2>
                    <p class="text-muted">Join us today! Fill in the details below to register.</p>
                </div>

                <?php if (!empty($successMsg)): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="fas fa-check-circle me-2"></i><?php echo $successMsg; ?>
                        <a href="login.php" class="alert-link ms-2">Go to Login</a>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif; ?>

                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="fullname" class="form-label">
                                <i class="fas fa-user me-2"></i>Full Name
                            </label>
                            <input 
                                type="text" 
                                class="form-control <?php echo (!empty($fullnameErr)) ? 'is-invalid' : ''; ?>" 
                                id="fullname" 
                                name="fullname" 
                                placeholder="Juan Dela Cruz"
                                value="<?php echo htmlspecialchars($fullname); ?>"
                                required
                            >
                            <?php if (!empty($fullnameErr)): ?>
                                <div class="invalid-feedback">
                                    <?php echo $fullnameErr; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">
                                <i class="fas fa-envelope me-2"></i>Email Address
                            </label>
                            <input 
                                type="email" 
                                class="form-control <?php echo (!empty($emailErr)) ? 'is-invalid' : ''; ?>" 
                                id="email" 
                                name="email" 
                                placeholder="juan@example.com"
                                value="<?php echo htmlspecialchars($email); ?>"
                                required
                            >
                            <?php if (!empty($emailErr)): ?>
                                <div class="invalid-feedback">
                                    <?php echo $emailErr; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">
                            <i class="fas fa-phone me-2"></i>Phone Number
                        </label>
                        <input 
                            type="tel" 
                            class="form-control <?php echo (!empty($phoneErr)) ? 'is-invalid' : ''; ?>" 
                            id="phone" 
                            name="phone" 
                            placeholder="09XXXXXXXXX or +639XXXXXXXXX"
                            value="<?php echo htmlspecialchars($phone); ?>"
                            required
                        >
                        <?php if (!empty($phoneErr)): ?>
                            <div class="invalid-feedback">
                                <?php echo $phoneErr; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="password" class="form-label">
                                <i class="fas fa-lock me-2"></i>Password
                            </label>
                            <input 
                                type="password" 
                                class="form-control <?php echo (!empty($passwordErr)) ? 'is-invalid' : ''; ?>" 
                                id="password" 
                                name="password" 
                                placeholder="Enter strong password"
                                required
                            >
                            <?php if (!empty($passwordErr)): ?>
                                <div class="invalid-feedback">
                                    <?php echo $passwordErr; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="confirmPassword" class="form-label">
                                <i class="fas fa-lock me-2"></i>Confirm Password
                            </label>
                            <input 
                                type="password" 
                                class="form-control <?php echo (!empty($confirmPasswordErr)) ? 'is-invalid' : ''; ?>" 
                                id="confirmPassword" 
                                name="confirmPassword" 
                                placeholder="Re-enter password"
                                required
                            >
                            <?php if (!empty($confirmPasswordErr)): ?>
                                <div class="invalid-feedback">
                                    <?php echo $confirmPasswordErr; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="terms" required>
                        <label class="form-check-label" for="terms">
                            I agree to the Terms and Conditions
                        </label>
                    </div>

                    <div class="d-grid gap-2 mb-3">
                        <button type="submit" class="btn glass-btn">
                            <i class="fas fa-user-plus me-2"></i>Register
                        </button>
                    </div>

                    <div class="text-center">
                        <p class="mb-0">Already have an account? 
                            <a href="login.php" class="text-decoration-none" style="color: #00ff00;">
                                <i class="fas fa-sign-in-alt me-1"></i>Login here
                            </a>
                        </p>
                    </div>
                </form>

                <hr class="my-4">

                <div class="text-center">
                    <h6 class="mb-3">Regular Expression Validation Rules:</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-start">
                                <small class="d-block mb-2">
                                    <i class="fas fa-check-circle me-2" style="color: #00ff00;"></i>
                                    <strong>Name:</strong> Letters & spaces only
                                </small>
                                <small class="d-block mb-2">
                                    <i class="fas fa-check-circle me-2" style="color: #00ff00;"></i>
                                    <strong>Email:</strong> Valid email format
                                </small>
                                <small class="d-block mb-2">
                                    <i class="fas fa-check-circle me-2" style="color: #00ff00;"></i>
                                    <strong>Phone:</strong> Philippine format
                                </small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-start">
                                <small class="d-block mb-2">
                                    <i class="fas fa-check-circle me-2" style="color: #00ff00;"></i>
                                    <strong>Password:</strong> Min 8 characters
                                </small>
                                <small class="d-block mb-2">
                                    <i class="fas fa-check-circle me-2" style="color: #00ff00;"></i>
                                    Uppercase & lowercase letters
                                </small>
                                <small class="d-block mb-2">
                                    <i class="fas fa-check-circle me-2" style="color: #00ff00;"></i>
                                    Numbers & special characters
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
