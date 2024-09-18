<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Overviews</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .events-overview {
            padding: 20px;
            text-align: center;
        }
        .event-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            text-align: left;
            max-width: 800px;
            margin: 20px auto;
        }
        .event-card h3 {
            margin-top: 0;
        }
        .event-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .event-card .description {
            margin: 10px 0;
        }
        .register-button {
            background-color: #28a745; /* Green color */
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 10px 0;
            cursor: pointer;
            border-radius: 5px;
        }
        .register-button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <section id="event-overviews" class="events-overview">
        <h1>Upcoming and Recent Training Events</h1>

        <div class="event-card">
            <img src="data-security-webinar.jpg" alt="Data Security Webinar">
            <h3>Data Security Webinar</h3>
            <p>Date: 15 August</p>
            <p>Status: Completed</p>
            <p class="description">An in-depth webinar covering essential data security principles and practices to protect sensitive information in your organization.</p>
            <a href="https://forms.gle/fAzowrZJzT6aAW1X9" class="register-button">Register</a>
        </div>

        <div class="event-card">
            <img src="dspc-training.jpg" alt="DSPC Training">
            <h3>DSPC Training</h3>
            <p>Date: 26-27 July</p>
            <p>Status: Completed</p>
            <p class="description">A comprehensive training session on Data Security Policy Compliance, focusing on implementing robust data protection policies.</p>
            <a href="https://forms.gle/fAzowrZJzT6aAW1X9" class="register-button">Register</a>
        </div>

        <div class="event-card">
            <img src="cybersecurity-awareness-month.jpg" alt="Cybersecurity Awareness Month Workshop">
            <h3>Cybersecurity Awareness Month Workshop</h3>
            <p>Date: 31 October 2024</p>
            <p>Status: Upcoming - Physical</p>
            <p>Location: Dar es Salaam</p>
            <p class="description">Join us for a workshop focusing on enhancing cybersecurity awareness across various sectors. Learn practical tips and techniques to improve your organization's security posture.</p>
            <a href="https://forms.gle/fAzowrZJzT6aAW1X9" class="register-button">Register</a>
        </div>

        <div class="event-card">
            <img src="vapt-workshop.jpg" alt="VAPT Workshop">
            <h3>VAPT Workshop</h3>
            <p>Date: 16-17 November 2024</p>
            <p>Status: Upcoming - Physical & Virtual</p>
            <p>Location: Dar es Salaam</p>
            <p class="description">This workshop will delve into Vulnerability Assessment and Penetration Testing (VAPT), covering both theoretical and practical aspects to enhance your cybersecurity skills.</p>
            <a href="https://forms.gle/fAzowrZJzT6aAW1X9" class="register-button">Register</a>
        </div>

        <div class="event-card">
            <img src="cybersecurity-tools-development.jpg" alt="Cybersecurity Tools Development">
            <h3>Cybersecurity Tools Development</h3>
            <p>Date: 30 November 2024</p>
            <p>Status: Upcoming - Virtual</p>
            <p class="description">Participate in a virtual session on developing advanced cybersecurity tools. Gain insights into creating tools that address modern security challenges.</p>
            <a href="https://forms.gle/fAzowrZJzT6aAW1X9" class="register-button">Register</a>
        </div>

        <div class="event-card">
            <img src="secure-coding-workshop.jpg" alt="Secure Coding Workshop">
            <h3>Secure Coding Workshop</h3>
            <p>Date: 5-6 December 2024</p>
            <p>Status: Upcoming - Physical & Virtual</p>
            <p>Location: Dar es Salaam</p>
            <p class="description">Learn best practices in secure coding to prevent common vulnerabilities and enhance the security of your applications. Available both in-person and online.</p>
            <a href="https://forms.gle/fAzowrZJzT6aAW1X9" class="register-button">Register</a>
        </div>

    </section>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Cybershield Tanzania</p>
    </footer>

    <script src="scripts.js"></script>
</body>
</html>
