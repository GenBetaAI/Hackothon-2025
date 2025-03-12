<?php
session_start();
if (isset($_SESSION["user"])){
    header("Location: ../login-user/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg py-3">
        <div class="container">
            <a class="navbar-brand fw-bold logo" href="index.php">𝕲𝖊𝖓𝕭𝖊𝖙𝖆 𝓐𝓲</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../features.php">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="../pricing.php">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="../contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="login-signup/registration.php">Login / Signup</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="">
        <?php
        if (isset($_POST["submit"])){
            $userid = $_POST["userid"];
            $full_name = $_POST["full_name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $passwordRepeat = $_POST["reapet_password"];

            $passwordHash = password_hash($password, PASSWORD_DEFAULT);


            $errors = array();

            if (empty($userid) OR empty($full_name) OR empty($email) OR empty($password) OR empty($passwordRepeat)){
                array_push($errors,"All fields are required");
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($errors,"Email is not valid!");
            }
            if(strlen($password)<8){
                array_push($errors,"Password must be at least 8 characters long");
            }
            if($password !== $passwordRepeat){
                array_push($errors,"Password does not match!");
            }
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = ?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $rowCount = mysqli_num_rows($result);
            
            if ($rowCount>0){
                array_push($errors, "Email already exists!");
            }


            if(count($errors)>0){
                foreach($errors as $error){
                    echo "<div class='alert alert-danger'>$error</div>";
                }
             } else {
                // insert the data
                
                $sql = "INSERT INTO users (userid, full_name, email, password) VALUES (?, ? ,?, ?)";
                $stmt = mysqli_stmt_init($conn);
                $preparestmt = mysqli_stmt_prepare($stmt, $sql);
                if ($preparestmt) {
                    mysqli_stmt_bind_param($stmt, "ssss" ,$userid, $full_name, $email, $passwordHash);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'>You are registered successfully.</div>";
                    header("refresh:2; url=../login-user/index.php");
                    exit();

                }else{
                    die("Something went wrong!");
                }

            }

        };
        ?>

        <div class="main">
            <div class="wrapper-reg">
                <div class="form-header">
                    <div class="titles">
                        <div class="title-login">SignUp</div>
                    </div>
                </div>
                <form action="registration.php" method="post" class="register-form">
                    <div class="form-group input-box">
                        <input type="text" name="userid" class=" input-field shadow-none" id="reg-name" requireed>
                        <label for="reg-userid" class="label">Username</label>
                        <i class="bi bi-person icon"></i>
                    </div>
                    <div class="form-group input-box">
                        <input type="text" name="full_name" class=" input-field shadow-none" id="reg-name" requireed>
                        <label for="reg-email" class="label">Full Name</label>
                        <i class="bi bi-person icon"></i>
                    </div>
                    <div class="form-group input-box">
                        <input type="email" name="email" class=" input-field shadow-none" id="reg-email" requireed>
                        <label for="reg-email" class="label">Email</label>
                        <i class="bi bi-envelope icon"></i>
                    </div>
                    <div class="form-group input-box">
                        <input type="password" name="password" class="input-field shadow-none " id="reg-pass" requireed>
                        <label for="reg-pass" class="label">Password</label>
                        <i class="bi bi-lock icon"></i>
                    </div>
                    <div class="form-group input-box">
                        <input type="password" name="reapet_password" class="input-field shadow-none " id="reg-pass" requireed>
                        <label for="reg-pass" class="label">Reapet Your password</label>
                        <i class="bi bi-lock icon"></i>
                    </div>
                    <div class="form-cols">
                        <input type="checkbox" id="agree" required>
                        <label for="agree">By clicking, you agree to <a href="../terms&condition.php">Terms & Conditions</a> and <a href="../privacy-policy.php">Privacy Policy</a></label>
                    <div class="input-box">
                        <div class="form-btn mt-3">
                            <button type="submit" name="submit" class="btn-submit" value="Register" name="submit">Register<i class="bi bi-box-arrow-in-right"></i></button>
                        </div>
                    </div>
                    <div class="switch-form">
                    <span class="me-2">Already have an account?</span><a href="login.php" style="text-decoration: none;">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- footer -->
    <footer>
        <div class="footer-col">
            <h3>Explore</h3>
            <a href="index.php"><li>Home</li></a>
            <a href="index.php"><li>About Us</li></a>
            <a href="pricing.php"><li>Pricing</li></a>
            <a href="contact.php"><li>Contact Us</li></a>
        </div>
        <div class="footer-col">
            <h3>Quick Links</h3>
            <a href="../features.php"><li>Our Features</li></a>
            <a href="../login-signup/login.php"><li>Dashboard</li></a>
            <a href="../pricing.php"><li>AI Mentor chat</li></a>
        </div>
        <div class="footer-col">
            <h3>Features</h3>
            <a href="pricing.php"><li>AI-Powered Career Guidance </li></a>
            <a href="login-signup/login.php"><li>Personalized Learning Dashboard</li></a>
            <a href="#"><li>Skill Assessment Tests</li></a>
            <a href="login-signup/login.php"><li>Upload Certificates & Badges</li></a>
        </div>
        <div class="footer-col">
            <h3>Legal</h3>
            <a href="privacy-policy.php"><li>Privay Policy</li></a>
            <a href="terms&condition.php"><li>Terms and Conditions</li></a>
        </div>
        <div class="footer-col">
            <h3>Newsletter</h3>
            <p>You can trust us.we only send promo offers,
            </p>
            <div class="subscribe">
                <input type="text" placeholder="Your Email address">
                <a href="#" class="yellow">SUBSCRIBE</a>
            </div>
        </div>
        <div class="copyright">
            <p>© 2025 EduPath AI | Empowering Learning with AI | All rights reserved.</p>
            <div class="pro-links">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin-in"></i>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>