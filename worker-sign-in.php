<!DOCTYPE html>
<html lang="en">
<!-- ===================== Arabic Language ===================== -->
<script type="text/javascript" src="https://cdn.weglot.com/weglot.min.js"></script>
<script>
    Weglot.initialize({
        api_key: 'wg_6c5321196b2403ec28a981605a02560b8'
    });
</script>
<!-- ===================== END Arabic Language ===================== -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worker Sign-in | SHATTABLY</title>
    <!-- Title Icon -->
    <link rel="icon" type="image/png" href="images/shattablyLogo.svg" />
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/Normalize.css">
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="css/shattably.css">
    <link rel="stylesheet" href="css/signin.css">
</head>


<body>

    <!-- ===================== Navigation Bar ===================== -->
    <div class="nav">
        <h1>
            <a href="index.html" target="_self">SHATTABLY</a>
        </h1>
        <a href="index.html" class="logo">
            <img src="images/shattablyLogo.svg" alt="website-logo">
        </a>
        <ul>
            <li>
                <a href="cus-wo-sign-in.html">Sign in</a>
            </li>
            <li>
                <a href="cus-wo-register.html">Register</a>
            </li>
        </ul>
    </div>
    <!-- ===================== END Navigation Bar ===================== -->

    <div class="welcome">
        <h2>Worker Sign-in</h2>
    </div>

    <div class="reg-form">
        <img src="images/sign-in-photo.jpg" alt="website-logo">
        <form action="Wlogin.php" method="POST">
            <?php
            if (isset($erroremail)) {
                echo $erroremail;
            }
            ?>
            <input type="email" class="email" name="email" placeholder="Email">
            <div class="email-error">
                <?php
                if (isset($email_error)) {
                    echo $email_error;
                }
                ?>
            </div>

            <input type="password" class="pass" name="password" placeholder="Password">
            <div class="password-error">
                <?php
                if (isset($password_error)) {
                    echo $password_error;
                }
                ?>
            </div>
            <button type="submit" class="submit"> Sign in </button>
            <a href="forgot-password.html">
                <div class="forgot-password">Forgot password? </div>
            </a>

            <div class="new-account">New account? <a href="cus-wo-register.html">Register</a></div>
        </form>
    </div>




    <!-- ===================== Footer ===================== -->
    <footer>
        <div class="container">
            <img src="images/SHATTABLYwhite.png" alt="Logo" />
            <p>We are social</p>
            <div class="social-icons">
                <i class="fab fa-facebook-f"></i>
                <i class="fa-brands fa-x-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
            </div>
            <div class="policy">
                <a href="terms.html" class="ter">Terms and Conditions</a>
                <a href="privacy.html" class="pol">Privacy Policy</a>
            </div>
            <div class="copyright"> &copy; <span id="date"></span> <a href="index.html">SHATTABLY</a>. All Right
                Reserved.
            </div>
        </div>
    </footer>
    <!-- ===================== END Footer ===================== -->












    <!-- ===================== JS Files ===================== -->
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/bab5d0d7f7.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

</body>

</html>