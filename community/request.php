<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Request Form - Cybershield</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 2rem;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 2rem;
            border-radius: px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .logo {
            max-width: 150px; /* Adjust size as needed */
            margin-bottom: 1rem;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        input[type="text"], input[type="email"], input[type="tel"], textarea, select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
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
        .message {
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>

<div class="container">
    <img src="assets/img/logo.jpg" alt="Cybershield Logo" class="logo">
    <h1>Service Request Form</h1>
    <p class="message"><strong>Thank you for your interest in working with us at Cybershield! We look forward to reviewing your application and exploring opportunities for collaboration.</strong></p>
  
    <form action="partners_request.php" method="post">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="\+?[0-9]{10,12}" placeholder="+255678969536" required>

        </div>
        <div class="form-group">
            <label for="role">Select Role:</label>
            <select id="role" name="role" required>
                <option value="College Chapter Leader">College Chapter Leader</option>
                <option value="Cybershield Volunteer">Cybershield Volunteer</option>
                <option value="Organization Partnership">Organization Partnership</option>
            </select>
        </div>
        <div class="form-group">
            <label for="institution">Institution Affiliated To:</label>
            <input type="text" id="institution" name="institution" required>
        </div>
        <div class="form-group">
            <label for="timeframe">Time Frame for Involvement:</label>
            <input type="text" id="timeframe" name="timeframe" required>
        </div>
        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" required>
        </div>
        <div class="form-group">
            <label for="expertise">Area of Expertise:</label>
            <input type="text" id="expertise" name="expertise" required>
        </div>
        <div class="form-group">
            <label for="message">Why are you interested in this role?</label>
            <textarea id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit">Submit Request</button>
    </form>
</div>


</body>
</html>
