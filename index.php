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

    <!-- Hero Section -->
    <section class="hero-section mb-0">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Find Your Ideal Career Path with AI</h1>
            <p class="lead mb-5">Unlock your potential with personalized career guidance powered by AI. Discover tailored career paths and actionable insights to help you reach your goals.</p>
            <button class="cta-button border-0 mb-4"><a class="text-decoration-none text-white" href="login-signup/registration.php">Start Free Assessment</a></button>
            <div class="mt-3">
                <a href="features.php" class="text-decoration-none text-secondary">How It Works →</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->

    <h2 class=" pt-4 mb-4 text-center fw-bold  h-font">What our users say</h2>
    <div class="h-line bg-dark"></div>

    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <h6 class="m-0 ms-0">Aarav Sharma</h6>
                    </div>
                    <p>
                        This platform has been a game-changer for my career. The courses and mentorship helped me upskill with confidence!"
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <h6 class="m-0 ms-0">Priya Patel</h6>
                    </div>
                    <p>
                        "The career roadmap feature gave me clear guidance on my goals. Loved the interactive learning plans!"     
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <h6 class="m-0 ms-0">Vikram Nair</h6>
                    </div>
                    <p>
                        "The best decision I made was to trust GenBeta Ai with my career goals."
                    
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="testimonials.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More >>></a>
        </div>
    </div>


    <!-- partners -->

    <section id="trust" class="shadow">
        <h1>Trusted By</h1>
        <p>Replenish man have thing gathering lights yielding shall you</p>
        <div class="trust-img">
            <img src="img/trust/trust (1).png">
            <img src="img/trust/trust (2).png">
            <img src="img/trust/trust (3).png">
            <img src="img/trust/trust (4).png">
            <img src="img/trust/trust (5).png">
            <img src="img/trust/trust (6).png">
        </div>
    </section>


    <!-- FAQ's -->

    <h2 class=" pt-4 mb-4 mt-5 text-center fw-bold h-font">FAQ's</h2>
    <div class="h-line-2 bg-dark mb-3"></div>

        <div class="accordion p-4 mt-">
            <div class="row mt-3">
                <div class="accordion-item col-lg-6 col-md-6 mb-5 px-4">
                <h2 class="accordion-header">
                    <button class="accordion-button shadow-none faq-color" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is this platform about?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Our platform provides career roadmaps, learning resources, and certificate management to help students achieve their academic and professional goals.
                    </div>
                </div>
                </div>
                <div class="accordion-item col-lg-6 col-md-6 mb-5 px-4">
                    <h2 class="accordion-header">
                        <button class="accordion-button shadow-none faq-color" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Is this platform free to use?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            We offer both free and paid resources, ensuring affordable learning opportunities for all students.
                        </div>
                    </div>
                </div>
                <div class="accordion-item col-lg-6 col-md-6 mb-5 px-4">
                    <h2 class="accordion-header">
                        <button class="accordion-button shadow-none faq-color" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            How do I get started?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Simply sign up, explore career paths, enroll in courses, and start tracking your learning progress.
                        </div>
                    </div>
                </div>
                <div class="accordion-item col-lg-6 col-md-6 mb-5 px-4">
                    <h2 class="accordion-header">
                        <button class="accordion-button shadow-none faq-color" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            How can I upload my certificates?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            You can add your certificates in the profile section and showcase them on your resume or portfolio.
                        </div>
                    </div>
                </div>
                <div class="accordion-item col-lg-6 col-md-6 mb-5 px-4">
                    <h2 class="accordion-header">
                        <button class="accordion-button shadow-none faq-color" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseThree">
                            Can I connect with mentors?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Yes! Our mentor connect feature allows you to get guidance from industry professionals.
                        </div>
                    </div>
                </div>
                <div class="accordion-item col-lg-6 col-md-6 mb-5 px-4">
                    <h2 class="accordion-header">
                        <button class="accordion-button shadow-none " type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            Can I get a refund if I’m not satisfied with a course?
                        </button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Refund policies vary by course provider. Please check the refund policy before purchasing.
                        </div>
                    </div>
                </div>

            </div>
            
        </div>
    </div>



    <!-- Footer -->

    <?php require('inc/n-footer.php') ?>


    <!-- Scripts -->
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


        // for testimonials
        var swiper = new Swiper(".swiper-testimonials", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            // loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 80,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });
    </script>
</body>
</html>