<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Registration</title>
    <style>
        /* General Page Styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
        }

        /* Navigation Menu Styling */
        .nav-menu {
            background-color: #4CAF50;
            color: white;
            width: 250px;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 10px;
            font-weight: bold;
        }

        .nav-menu a:hover {
            background-color: #45a049;
        }

        /* Form Container Styling */
        .form-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin: 20px;
        }

        /* Form Fields Styling */
        input[type="text"], input[type="email"], input[type="date"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Submit Button Styling */
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Checkbox and Terms */
        .terms {
            text-align: left;
            margin-top: 15px;
        }

        .terms input[type="checkbox"] {
            margin-right: 5px;
        }

        .terms a {
            color: #4CAF50;
            text-decoration: none;
        }

        .terms a:hover {
            text-decoration: underline;
        }

        /* Header Styling */
        .header {
            background: #4CAF50;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
        }

        /* Layout Styling */
        .container {
            display: flex;
            width: 100%;
            height: 100%;
        }

        .form-wrapper {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-left, .logo-right {
            position: absolute;
            top: 20px;
            border-radius: 50%;
            background-color: #ffffff;
            padding: 10px;
        }

        .logo-left {
            left: 20px;
        }

        .logo-right {
            right: 20px;
        }

        .logo {
            width: 80px;
            height: 80px;
        }
    </style>
</head>
<body>

   

    <!-- Main Content -->
    <div class="container">
        <!-- Form Section -->
        <div class="form-wrapper">
            <div class="form-container">
                <h1>Cybershield Community Portal Registration Form</h1>
                <h2>Member Registration Form</h2>
                <form action="process_request.php" method="POST">
                    <label for="full_name">Full Name:</label><br>
                    <input type="text" id="full_name" name="full_name" required><br>

                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required><br>

                    <label for="phone_number">Phone Number:</label><br>
                    <input type="text" id="phone_number" name="phone_number" required><br>

                    <label for="location">Location:</label><br>
                    <input type="text" id="location" name="location"><br>

                    <label for="area_of_expertise">Area of Expertise:</label><br>
                    <input type="text" id="area_of_expertise" name="area_of_expertise"><br>

                    <label for="affiliation">Affiliation:</label><br>
                    <input type="text" id="affiliation" name="affiliation" required><br>

                    <label for="gender">Gender:</label><br>
                    <select id="gender" name="gender" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select><br>

                    <label for="membership_time">Membership Start Date:</label><br>
                    <input type="date" id="membership_time" name="membership_time"><br>

                    <!-- Terms and Conditions Checkbox -->
                    <div class="terms">
                        <input type="checkbox" id="terms" name="terms" required>
                        <label for="terms">I have read and agree to the 
                            <a href="terms.html" target="_blank">Membership Terms and Conditions</a>
                        </label>
                    </div>

                    <br>
	
                    <input type="submit" value="Register">
					
                </form>
            </div>
        </div>
    </div>

   

    <!-- Top Right Logo -->
    <div class="logo-right">
        <img src="assets/img/logo2.jpg" alt="Logo Right" class="logo">
    </div>

</body>
</html>
