<?php
session_start();
if (isset($_SESSION["user"])){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            <a class="navbar-brand fw-bold logo" href="index.php">🎓 EduPath AI</a>
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
        if (isset($_POST["login"])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user){
                if(password_verify($password, $user['password'])){
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: ../login-user/index.php");
                    die();
                }
                else{
                    echo "<div class='alert alert-danger'>Password Does Not Match!</div>";
                }
            }else{
                echo "<div class='alert alert-danger>Email does not match!</div>'";
            }
        }
        ?>


        <div class="main">
            <div class="wrapper">
                <div class="form-header">
                    <div class="titles">
                        <div class="title-login">Login</div>
                    </div>
                </div>
                <form action="login.php" method="post" class="login-form">
                    <div class="form-group input-box">
                        <input type="email" name="email" class=" input-field shadow-none" id="log-email" requireed>
                        <label for="log-email" class="label">Email</label>
                        <i class="bi bi-envelope icon"></i>
                    </div>
                    <div class="form-group input-box">
                        <input type="password" name="password" class="input-field shadow-none " id="log-pass" requireed>
                        <label for="log-pass" class="label">Password</label>
                        <i class="bi bi-lock icon"></i>
                    </div>
                    <div class="form-cols">
                        <a href="#" class="fr-pass">Forgot password?</a></div>
                    <div class="input-box">
                        <div class="form-btn mt-3">
                            <button type="submit" name="login" class="btn-submit">Login<i class="bi bi-box-arrow-in-right"></i></button>
                        </div>
                    </div>
                    <div class="switch-form">
                    <span class="me-2">Don't Have an Account?</span><a href="registration.php" style="text-decoration: none;">Register</a>
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




</body>
</html>