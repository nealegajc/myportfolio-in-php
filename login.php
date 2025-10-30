<?php
// Login Page with PHP Form Validation using Regular Expressions
session_start();

// Initialize variables
$email = $password = "";
$emailErr = $passwordErr = $loginErr = "";
$isValid = false;

// Process form when submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isValid = true;
    
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
    
    // Validate Password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
        $isValid = false;
    } else {
        $password = $_POST["password"];
        // Regular expression for password validation (min 8 chars, at least 1 letter and 1 number)
        $passwordPattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*#?&]{8,}$/";
        if (!preg_match($passwordPattern, $password)) {
            $passwordErr = "Password must be at least 8 characters with letters and numbers";
            $isValid = false;
        }
    }
    
    // If validation passes, check credentials (demo - in real app, check against database)
    if ($isValid) {
        // Demo credentials - in production, verify against database
        if ($email === "nealegajc@gmail.com" && $password === "Password123") {
            $_SESSION['logged_in'] = true;
            $_SESSION['user_email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            $loginErr = "Invalid email or password";
        }
    }
}
?>

<?php include 'header.php'; ?>

<main class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="glass-card">
                <div class="text-center mb-4">
                    <i class="fas fa-sign-in-alt fa-3x mb-3" style="color: #00ff00;"></i>
                    <h2><i class="fas fa-lock me-2"></i>Login</h2>
                    <p class="text-muted">Welcome back! Please login to your account.</p>
                </div>

                <?php if (!empty($loginErr)): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-circle me-2"></i><?php echo $loginErr; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                <?php endif; ?>

                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>
                    <div class="mb-3">
                        <label for="email" class="form-label">
                            <i class="fas fa-envelope me-2"></i>Email Address
                        </label>
                        <input 
                            type="email" 
                            class="form-control <?php echo (!empty($emailErr)) ? 'is-invalid' : ''; ?>" 
                            id="email" 
                            name="email" 
                            placeholder="Enter your email"
                            value="<?php echo htmlspecialchars($email); ?>"
                            required
                        >
                        <?php if (!empty($emailErr)): ?>
                            <div class="invalid-feedback">
                                <?php echo $emailErr; ?>
                            </div>
                        <?php endif; ?>
                        <div class="form-text">
                            <small><i class="fas fa-info-circle me-1"></i>Demo: nealegajc@gmail.com</small>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">
                            <i class="fas fa-lock me-2"></i>Password
                        </label>
                        <input 
                            type="password" 
                            class="form-control <?php echo (!empty($passwordErr)) ? 'is-invalid' : ''; ?>" 
                            id="password" 
                            name="password" 
                            placeholder="Enter your password"
                            required
                        >
                        <?php if (!empty($passwordErr)): ?>
                            <div class="invalid-feedback">
                                <?php echo $passwordErr; ?>
                            </div>
                        <?php endif; ?>
                        <div class="form-text">
                            <small><i class="fas fa-info-circle me-1"></i>Demo: Password123</small>
                        </div>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                    </div>

                    <div class="d-grid gap-2 mb-3">
                        <button type="submit" class="btn glass-btn">
                            <i class="fas fa-sign-in-alt me-2"></i>Login
                        </button>
                    </div>

                    <div class="text-center">
                        <p class="mb-0">Don't have an account? 
                            <a href="register.php" class="text-decoration-none" style="color: #00ff00;">
                                <i class="fas fa-user-plus me-1"></i>Register here
                            </a>
                        </p>
                    </div>
                </form>

                <hr class="my-4">

                <div class="text-center">
                    <h6 class="mb-3">Validation Rules Applied:</h6>
                    <div class="text-start">
                        <small class="d-block mb-1">
                            <i class="fas fa-check-circle me-2" style="color: #00ff00;"></i>
                            Email: Valid email format using regex
                        </small>
                        <small class="d-block mb-1">
                            <i class="fas fa-check-circle me-2" style="color: #00ff00;"></i>
                            Password: Minimum 8 characters
                        </small>
                        <small class="d-block">
                            <i class="fas fa-check-circle me-2" style="color: #00ff00;"></i>
                            Password: Must contain letters and numbers
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
