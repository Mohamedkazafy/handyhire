<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client sign up</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="new_style.css">
</head>

<body>
    <div id="page" class="site">
        <div class="container">
            <div class="form-box">
                <div class="progress">
                    <div class="logo"><a href="#"><span>Handy</span>Hire</a></div>
                    <ul class="progrees-steps">
                        <li class="step active">
                            <span>1</span>
                            <p>Personal <br> <span>25 secs to complete</span></p>
                        </li>
                        <li class="step">
                            <span>2</span>
                            <p>Contact<br> <span>60 secs to complete</span></p>
                        </li>
                        <li class="step">
                            <span>3</span>
                            <p>Security <br> <span>30 secs to complete</span></p>
                        </li>
                    </ul>
                </div>
                <form action="submit.php" method="post">
                    <div class="form-one form-step active">
                        <div class="bg-svg"></div>
                        <h2>Personal Information</h2>
                        <p>Enter your personal information correctly</p>
                        <div>
                            <label>First Name</label>
                            <input type="text" name="first_name" placeholder="e.g John" required>
                        </div>
                        <div>
                            <label>Last Name</label>
                            <input type="text" name="last_name" placeholder="e.g Doe" required>
                        </div>
                        <div class="birth">
                            <label>Date of Birth</label>
                            <div class="grouping">
                                <input type="number" name="day" min="1" max="31" placeholder="DD" required>
                                <input type="number" name="month" min="1" max="12" placeholder="MM" required>
                                <input type="number" name="year" min="1900" max="2050" placeholder="YYYY" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-two form-step">
                        <div class="bg-svg"></div>
                        <h2>Contact</h2>
                        <div>
                            <label>Phone</label>
                            <input type="tel" name="phone" placeholder="e.g x62xxxxxx" required>
                        </div>
                        <div>
                            <label>Address</label>
                            <input type="text" name="address" placeholder="Street Address" required>
                        </div>
                        <div>
                            <input type="text" name="address2" placeholder="App, Suite, Building">
                        </div>
                        <div>
                            <label>City</label>
                            <input type="text" name="city" placeholder="City" required>
                        </div>
                        <div>
                            <label>Country</label>
                            <select name="country" id="country" required>
                                <option value="EG">مصر (Egypt)</option>
                                <option value="SA">السعودية (Saudi Arabia)</option>
                                <option value="AE">الإمارات العربية المتحدة (United Arab Emirates)</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                    </div>
                    <div class="form-three form-step">
                        <div class="bg-svg"></div>
                        <h2>Security</h2>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" placeholder="anyemail@gmail.com" required>
                        </div>
                        <div>
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Your username" required>
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password" required>
                        </div>
                        <div>
                            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                        </div>
                        <div class="checkBox">
                            <input type="checkbox" required>
                            <label>You accept all policy documentation</label>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn-prev" disabled>Back</button>
                        <button type="button" class="btn-next">Next Step</button>
                        <button type="submit" class="btn-submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="new_script.js"></script>
</body>

</html>