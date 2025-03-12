<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenBeta AI - Career Guidance Platform</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <!-- Navigation -->
    <?php require('inc/n-navbar.php') ?>




    <!-- contact -->

    <section id="form-details" class="border-0">
        <form action="" class="shaow">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea class="form-control shadow-none" rows="5" style="resize: none;" placeholder="Your message"></textarea>
            <button id="b-f">Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="img/owners/harshvardhan.jpeg" alt="">
                <p><span>Parmar Harshvardhan</span> Full-Stack Developer <br> E-mail:- parmarharshvardhan88@gmail.com</p>
            </div>
            <div>
                <img src="img/owners/prajesh.jpeg" alt="">
                <p><span>Laluvadiya Prajesh</span> Resource Provider<br> E-mail:- lalluvadiyaprajesh2008@gmail.com</p>
            </div>
            <div>
                <img src="img/owners/nihal.jpeg" alt="">
                <p><span>Joshi Nihal</span> Frontend Developer, Designer<br> E-mail:- work.nihal3714@gmailcom</p>
            </div>
        </div>
    </section>





    <!-- Footer -->

    <?php require('inc/n-footer.php') ?>





    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Add smooth scrolling to navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Handle CTA button click
        document.querySelector('.cta-button').addEventListener('click', () => {
            console.log('Starting free assessment...');
            // Add your assessment start logic here
        });

    </script>
</body>
</html>