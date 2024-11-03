<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>Registration Page</title>

    
    </style>
</head>

<body>
    
    <form class = "reg" method="post" action="phps/register.php">
        
        <h2>Create an Account</h2>
        <label for = "uname">Username</label>
        <input name="Username" type = "text" id = "" placeholder = "Enter your username" required>

        <label>Student Name</label>
        <div class = "name-container">
            <input name="firstName" type="text" id="fname" placeholder="First Name"  required>
            <input name="middleName" type="text" id="mname" placeholder="Middle Name">
            <input name="lastName" type="text" id="lname" placeholder="Last Name" required>
        </div>

        <label for = "num">Student Number</label>
        <input name= "studentNumber" type = "number" id = "num" placeholder = "Student Number" required>

        <label for = "bday">Date of Birth</label>
        <input name="dateOfBirth" type = "date" id = "bday" required>

        <label for = "course">Course</label>
        <input name = "course"type = "text" id = "course" placeholder = "Course Name" required>

        <label for = "sec">Section</label>
        <input name="section" type = "text" id = "sec" placeholder = "Section" required>

        <label for = "email">Email Address</label>
        <input name="email" type = "email" id="email" placeholder = "Email Address" required>

        <label for = "pass1">Password</label>
        <input name="password" type = "password" id = "pass1" placeholder = "Password" required>

        <label for = "pass2">Confirm Password</label>
        <input type = "password" id = "pass2" placeholder = "Confirm Password" required>

        <div class="checkbox-label">
            <input type="checkbox" id="terms" value="I agree to the terms and conditions.">
            <label for="terms">I agree to the terms and conditions.</label>
        </div>
        <input type = "submit" value = "Register">

        <div class="footer-text">
            Already have an account? <a href = "#" style = "color: #007BFF; text-decoration: none;">Login here</a>
        </div>
    </form>
    </body>
    </html>