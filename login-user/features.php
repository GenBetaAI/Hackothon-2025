<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduPath AI - Career Guidance Platform</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    
</head>
<body>
    <!-- Navigation -->
    <?php require('../inc/u-navbar.php') ?>

    <!-- features -->


    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR FEATURES</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Providing students with career roadmaps, affordable courses, certificate management, mentorship, and resources <br>
             to achieve their academic and professional goals
        </p>
    </div>

    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="m-0 ms-0">Personalized Career Roadmaps</h5>
                    </div>
                    <p class="mb-4">Step-by-step career guides based on students' interests and skills.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="m-0 ms-0">AI-Powered Course Recommendations</h5>
                    </div>
                    <p>Suggests free and paid courses based on the user’s learning goals.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="m-0 ms-0">Certificate Management</h5>
                    </div>
                    <p>A dedicated page where students can upload and showcase their certificates.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="m-0 ms-0">Affordable Learning Resources</h5>
                    </div>
                    <p>A library of high-quality free and budget-friendly courses.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="m-0 ms-0">Resume Builder</h5>
                    </div>
                    <p> We are Providing Resume Builder to make your Resume.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="m-0 ms-0">Interactive Learning Plans</h5>
                    </div>
                    <p> Customizable learning schedules with deadlines and reminders.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="m-0 ms-0">Mentor Connect</h5>
                    </div>
                    <p>  Option to connect with mentors for career advice.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="m-0 ms-0">Daily Motivational Quotes</h5>
                    </div>
                    <p>  Stay inspired every day with powerful quotes to fuel your learning journey.</p>
                </div>
            </div>            
            <div class="col-lg-4 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                    <div class="d-flex align-items-center mb-2">
                        <h5 class="m-0 ms-0">1000+ Job Opportunities</h5>
                    </div>
                    <p>  Find and apply for jobs that match your skills and career goals.</p>
                </div>
            </div>                    
        </div>
    </div>








    <!-- Footer -->

    <?php require('../inc/u-footer.php') ?>





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