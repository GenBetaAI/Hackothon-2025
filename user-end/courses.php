<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduPath AI - Career Guidance Platform</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">

    <style>
        .card-container {
            margin-top: 20px;
        }
    </style>
    
</head>
<body>
    <!-- Navigation -->
    <!-- navbar will come here -->


    <!-- features -->


    <div class="my-5 px-4 text-center">
        <h2 class="fw-bold h-font">Career Development Resources</h2>
    </div>
    <div class="container">
        <div class="row">
            <!-- courses section  -->

            <h5 class="mt-5" style="font-weight: 700;">Explore Courses</h5>
            <div class="container mt-5 mb-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Select Your Standard</h5>
                        <select id="standardSelect" class="form-control">
                            <option value="">Select Standard</option>
                            <option value="standard10">Standard 10</option>
                            <option value="class11">Class 11</option>
                            <option value="class12">Class 12</option>
                            <option value="diplomasem1">Diploma SEM-1</option>
                            <option value="diplomasem2">Diploma SEM-2</option>
                        </select>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Select Your Subject</h5>
                        <select id="subjectSelect" class="form-control" disabled>
                            <option value="">Select Subject</option>
                        </select>
                    </div>
                </div>

                <!-- Add this after the subject select card -->
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">Select Chapter</h5>
                        <select id="chapterSelect" class="form-control" disabled>
                            <option value="">Select Chapter</option>
                        </select>
                </div>

                <div id="videoContainer" class="row card-container">
                    <!-- Videos will be dynamically loaded here -->
                </div>
            </div>
            
            <div class="col-lg-6 col-sm-6 mb-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title" style="font-weight: 700;">Top 5 AI Careers in 2025</h5>
                    <p class="card-text">Discover the most in-demand AI roles and how to prepare for them</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mb-3">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title" style="font-weight: 700;">The Future of AI in Business</h5>
                    <p class="card-text">How AI is shaping industries and the skills needed to stay ahead.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>



            <h5 class="mt-5 mb-5">Industry Reports</h5>
            <div class="col-lg-6 col-sm-6 mb-3">
                <div class="card mb-5">
                  <div class="card-body">
                    <h5 class="card-title" style="font-weight: 700;">AI Salary Trends</h5>
                    <p class="card-text">Letest salary insights for AI professnionals in 2025</p>
                    <a href="#" class="btn btn-primary" download>Download Report</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6 mb-3">
                <div class="card mb-5">
                  <div class="card-body">
                    <h5 class="card-title" style="font-weight: 700;">Hiring Insights</h5>
                    <p class="card-text">What top compnies look for in AI talant.</p>
                    <a href="#" class="btn btn-primary" download>Download Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    






    <!-- Footer -->
    <!-- <footer>
        <div class="footer-col">
            <h3>Top Products</h3>
            <li>Manage Reputation</li>
            <li>Power Tools</li>
            <li>Managed Website</li>
            <li>Marketing Service</li>
        </div>
        <div class="footer-col">
            <h3>Quick Links</h3>
            <li>Jobs</li>
            <li>Brand Assest</li>
            <li>Investor Reactions</li>
            <li>Terms of Service</li>
        </div>
        <div class="footer-col">
            <h3>features</h3>
            <li>Manage Reputation</li>
            <li>Power Tools</li>
            <li>Manage Website</li>
            <li>Marketing Service</li>
        </div>
        <div class="footer-col">
            <h3>Resources</h3>
            <li>Guides</li>
            <li>Research</li>
            <li>Experts</li>
            <li>Marketing Service</li>
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
            <p>Copyright ©2025 All rights reserved | 🎓 EduPath AI</p>
            <div class="pro-links">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin-in"></i>
            </div>
        </div>
    </footer> -->
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="dropdown.js"></script>
    <script src="course.js"></script>
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