<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Portal</title>
    <link rel="stylesheet" href="style.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #eaf2f2;
            padding: 35px 20px;
            color: #14264b;
        }

        .container {
            max-width: 1250px;
            min-height: 700px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 35% 65%;
            background: white;
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 0 12px 35px rgba(0, 50,120, 0.15);
}

.sidebar {
    background: linear-gradient(150deg, #063c9d, #0065e8);
    color: white;
    padding: 45px 35px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.logo {
    font-size: 22px;
    font-weight: bold;
    letter-spacing: 1px;
}

.welcome{
    font-size: 18px;
    margin-top: 20px;
}
.welcome h1{
    font-size: 38px;
    line-height: 1.3;
    margin-bottom: 22px;
}
.welcome h1 span{
    color: #38d9ff;
}
.welcome p{
    font-size: 16px;
    line-height: 1.8;
    color: #e4edff;
}
.graduation{
    text-align: center;
    font-size: 100px;
    margin: 35px 0;
}

.sidebar-card{
    padding: 20px;
    background: rgba(255, 255, 255, 0.13);
    border: 1px solid rgba(255, 255, 255, 0.3);
    border-radius: 14px;

}

.sidebar-card h3{
    margin-bottom: 10px;
}

.sidebar-card p{
    font-size: 14px;
    line-height: 1.7;
    color: #e4edff;
}

.footer{
    margin-top: 25px;
    font-size: 12px;
    color: #dce8ff;
}

.form-section{
    padding: 45px;
}

.form-tag{
    background: #e5f0ff;
    color: #1453b5;
    padding: 14px 20px;
    border-radius: 10px;
    font-weight: bold;
    margin-bottom: 30px;
}

.form-section h2{
    font-size: 30px;
    margin-bottom: 12px;
}

.description{
    font-size: 14px;
    color: #78949a;
    margin-bottom: 35px;
    line-height: 1.6;
}

.form-group label{
    display: block;
    font-size: 14px;
    font-weight: bold;
    margin-bottom: 11px;
}

.form-group input,
 .form-group select{
    width: 100%;
    padding: 15px;
    border-radius: 9px;
    border: 1px solid #cbd7e8;
    font-size: 14px;
    background: white;
    outline: none;
    transition:  0.3s ;
}

.form-group input:focus,
 .form-group select:focus{
    border-color: #1765e8;
    box-shadow: 0 0 0 3px rgba(24, 101, 232, 0.12);
}

.information{
    margin-top: 32px;
    padding:18px;
    background: #edf5ff;
    border: 1px solid #b6d3ff;
    border-radius: 10px;
    color: #1453b5;
    font-size: 14px;
    line-height: 1.7;
}
 .register-btn{
    width: 100%;
    margin-top: 28px;
    padding: 17px;
    background: linear-gradient(90deg, #0962f5, #0346cf);
    border: none;
    border-radius: 10px;
    color: white;
    font-size: 17px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
 }

 .register-btn:hover{
    tranform: translateY(-2px);
    box-shadow: 0 7px 18px rgba(0, 80, 220, 0.25);
}

@media (max-width: 800px){
    .container{
        grid-template-columns: 1fr;
    }
    .sidebar{
        padding: 35px 25px;
    }

    .welcome {
        margin-top: 35px;
    }
    .form-section{
        padding: 30px 22px;
    }
}

@media (max-width: 500px){
    form-grid{
        grid-template-columns: 1fr;
    }
    body{
        padding: 12px;
    }
}
    </style>
    </head>
<body>
    <div class="sidebar">
        <div>
            <div class="logo">
               🎓 STUDENT PORTAL
</div>
<div> class="welcome">
    <h1>
        Build Your <span>Future</span> With Us.
</h1>

<p>
     Welcome to our student registratio portal.
    Complete your information below to begin your academic journey with us. 
    We are excited to have you on board and look forward to supporting you every step of the way.
</p>
</div>
<div class="graduation">
    🎓
</div>
<div class="sidebar-card">
    <h3>Why Choose Us?</h3>
    <p>
        Our portal offers a seamless registration experience, personalized support, and access to a wide range of academic resources. Join our community and take the first step towards achieving your educational goals.
    </p>
</div>
<div class="sidebar-card">
    <h3>Need Help?</h3>
    <p>
        If you have any questions or need assistance, please contact our support team at <a href="mailto:support@studentportal.com">support@studentportal.com</a>.
    </p>
</div>
<div class="sidebar-card">
    <h3>Student Enrollment</h3>
    <p>
        Provide accurate personal and academic information to ensure a smooth enrollment process.
        Your data is secure and will be used solely for registration purposes.
    </p>
</div>
<div class="footer">
    &copy; 2024 Student Registration Portal. 
    All rights reserved.
</div>
</div>

<div class="form-section">
    <div class="form-tag">
       🎓 &nbsp; Tuition Form
    </div>
    <h2>Student Information</h2>
    <p>
        Please fill out the form below with your personal and academic details. 
        Ensure that all information is accurate to facilitate a smooth registration process.
        All fields are required unless otherwise specified.
    </p>

    <form metho"POST" action="">
        <div class="form-grid">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="student_id">Student ID</label>
                <input type="text" id="student_id" name="student_id" placeholder="Enter your student ID" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>

        <h2>Academic Information</h2>
        <p>Please provide your academic details below.</p>

        <div class="form-grid">
            <div class="form-group">
                <label for="program">Program of Study</label>
                <select id="program" name="program" required>
                    <option value="">Select Program</option>
                    <option value="computer_science">Computer Science</option>
                    <option value="business_administration">Business Administration</option>
                    <option value="engineering">Engineering</option>
                    <option value="ICT Management">ICT Management</option>
                    <option value="Software Engineering">Software Engineering</option>
                </select>
            </div>
            <div class="form-group"> 
                <label for="year_of_study and term">Year of Study and Term</label>
                <select id="year_of_study and term" name="year_of_study and term" required>
                    <option value="">Select Year and Term</option>
                    <option>2026/2027 -Semester 1</option>
                    <option>2026/2027 -Semester 2</option>
                    <option>2027/2028 -Semester 1</option>
                    <option>2027/2028 -Semester 2</option>
                </select>
            </div>
            <div class="information">
                    i &nbsp; Please ensure that all information provided is accurate and up-to-date before submitting your registration form. 
                    Inaccurate information may lead to delays in the registration process.
            </div>
            <button type="submit" class="register-btn">
                Register Now &nbsp; &rarr;
            </button>

            </form>
        </div>

        </div>
        </body>
        </html>
