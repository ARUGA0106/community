<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Sign Up - Cybershield</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            text-align: center;
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }

        .logo {
            max-width: 100px; /* Adjust size as needed */
            margin-bottom: 1rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 0.5rem;
            border: none;
            background-color: #28a745;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .terms {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .terms label {
            margin: 0;
        }

        .signup-link, .login-link {
            margin-top: 1rem;
        }

        .signup-link a, .login-link a {
            color: #28a745;
            text-decoration: none;
        }

        .signup-link a:hover, .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- Login Page -->
    <div class="container" id="login-page">
        <img src="assets/img/logo.jpg" alt="Cybershield Logo" class="logo">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Username or Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <p class="signup-link">Don't have an account? <a href="#signup-page" onclick="showSignup()">Sign Up</a></p>
            <div class="terms">
                <input type="checkbox" id="login-terms" name="terms" required>
                <label for="login-terms">I agree to the <a href="terms.html">terms and conditions</a></label>
            </div>
        </form>
    </div>

    <!-- Sign-Up Page -->
    <div class="container" id="signup-page" style="display: none;">
        <img src="assets/img/logo.jpg" alt="Cybershield Logo" class="logo">
        <h2>Sign Up</h2>
        <form action="signup.php" method="post">
            <div class="form-group">
                <input type="text" name="name" placeholder="Full Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            </div>
            <div class="form-group">
                <div class="terms">
                    <input type="checkbox" id="signup-terms" name="terms" required>
                    <label for="signup-terms">I have read and agree to the <a href="terms.html">terms and conditions</a></label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit">Sign Up</button>
            </div>
            <p class="login-link">Already have an account? <a href="#login-page" onclick="showLogin()">Login</a></p>
        </form>
    </div>

    <script>
        function showSignup() {
            document.getElementById('login-page').style.display = 'none';
            document.getElementById('signup-page').style.display = 'block';
        }

        function showLogin() {
            document.getElementById('signup-page').style.display = 'none';
            document.getElementById('login-page').style.display = 'block';
        }
    </script>

</body>
</html>
