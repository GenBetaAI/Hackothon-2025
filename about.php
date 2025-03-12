<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenBeta AI - Career Guidance Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    
</head>
<body>
    <!-- Navigation -->
    <?php require('inc/n-navbar.php') ?>


    <div class="my-5 px-4 mb-0">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <section id="about-head" class="section-p1 shadow-sm">
        <img src="img//about/about.jfif" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>Welcome to GenBeta AI, a platform dedicated to empowering individuals through career roadmaps, skill-building courses, and valuable mentorship. Our mission is to bridge the gap between education and professional success by providing resources tailored to every learner’s journey. <br> <br>
            With expert guidance, interactive tools, and a growing community, we strive to help users achieve their academic and career goals efficiently. Whether you're looking for certification management, industry insights, or job opportunities, we are here to support your growth. </p>
            <h6 class="mb-0">Thank you for visiting our website - we hope you find it valuable!</h6><br><br>
            <marquee bgcolor="#ccc" loop="-1" scrollamount="5" width="100%" >Empowering Learners with Career Roadmaps & Expert Mentorship!</marquee>
        </div>
    </section>
    <section id="about-head" class="section-p1 shadow-sm">
        <div>
            <h2>Our vision</h2>
            <p>Our vision is to empower individuals with the knowledge, skills, and opportunities needed to excel in their careers. We strive to create a seamless learning experience by providing structured career roadmaps, affordable courses, personalized mentorship, and job opportunities. By bridging the gap between education and industry, we aim to support learners in achieving their professional goals with confidence. Our platform is built to inspire growth, foster innovation, and shape a future where success is accessible to everyone. 🚀
                <br><br>
                We envision a world where learning is accessible, career growth is streamlined, and opportunities are within reach for everyone. Our mission is to provide users with structured career pathways, high-quality courses, mentorship, and job opportunities to help them succeed. By combining technology with expert guidance, we strive to create a platform that empowers individuals to build their skills, gain confidence, and achieve their professional dreams.
            </p>
        </div>
        <img src="img/about/vision.jfif" alt="">
    </section>
    <section id="about-head" class="section-p1 shadow-sm">
        <img src="img/about/mission.jfif" alt="">
        <div>
            <h2>Our Mission</h2>
            <p>Our mission is to empower individuals by providing accessible, high-quality education and career growth opportunities. We strive to create an innovative and user-friendly platform where users can explore courses, gain mentorship, and develop essential skills for their future. Through personalized learning experiences, certification management, and expert guidance, we aim to bridge the gap between education and professional success, ensuring that every user can achieve their full potential in a rapidly evolving world.
                <br><br>
                Our mission is to revolutionize learning by offering a seamless and engaging platform that connects users with valuable resources, expert mentorship, and career-enhancing opportunities. We are committed to fostering skill development, guiding individuals through personalized roadmaps, and providing affordable education solutions. By bridging the gap between knowledge and real-world applications, we strive to empower users to achieve their aspirations and excel in their chosen fields.
            </p>
        </div>
    </section>

    <section id="experts">
        <h1>Our Team</h1>
        <p>Replenish man have thing gathering lights yielding shall you</p>
        <div class="expert-box">
            <div class="profile">
                <img src="img/owners/nihal.jpeg" class="mb-3">
                <h6>Nihal Joshi</h6>
                <p>Frontend Website Developer</p>
                <div class="pro-links">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="profile">
                <img src="img/owners/prajesh.jpeg" class="mb-3">
                <h6>Lalvuvadiya Prajesh</h6>
                <p>Resource Provider</p>
                <div class="pro-links">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
            </div>
            <div class="profile">
                <img src="img/owners/harshvardhan.jpeg" class="mb-3">
                <h6>Parmar Harshvardhan</h6>
                <p>Full-stake Developer </p>
                <div class="pro-links">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
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