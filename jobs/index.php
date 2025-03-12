<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenBeta AI - Modern Job Platform</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">

    <style>
        :root {
            --primary: #6a0dad;
            --secondary: #ff6b6b;
            --accent: #4ecdc4;
            --dark: #2d3436;
            --light: #f8f9fa;
        }

        /* Modern Scroll Behavior */
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            margin: 0;
            background: linear-gradient(45deg, var(--light) 0%, #ffffff 100%);
            color: var(--dark);
            overflow-x: hidden;
        }

        /* Animated Header */


        .btn {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: 0.5s all;
            color: #ddd;
        }

        .btn:hover {
            background: transparent;
            color: #2d3436;

        }

        .hero a{
            text-decoration: none;
            color: #ddd;
            font-weight: 500;
        }

        /* Enhanced Sections */
        section {
            padding: 8rem 5%;
            position: relative;
        }

        .hero {
            padding-top: 1rem;
            text-align: center;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(45deg, #f8f9fa 0%, #ffffff 100%);
        }

        .badge {
            display: inline-block;
            background: rgba(255, 204, 0, 0.2);
            color: #d48806;
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            margin-bottom: 1rem;
            animation: float 3s ease-in-out infinite;
        }

        .hero h2 {
            font-size: 3.5rem;
            margin: 1rem 0;
            line-height: 1.2;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Modern Card Design */
        .card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.15);
        }

        /* Grid Layout */
        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 2rem 0;
        }

        /* Steps Section */
        .steps .card {
            text-align: center;
            padding: 2.5rem;
        }

        .steps .card h3 {
            font-size: 1.5rem;
            margin: 1rem 0;
        }

        /* Job Listings */
        .job-card {
            border-left: 4px solid var(--primary);
            transition: all 0.3s ease;
        }

        .job-card:hover {
            border-left-color: var(--secondary);
            transform: translateX(10px);
        }

        /* Testimonial Section */
        .testimonial {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: white;
            border-radius: 30px;
            margin: 5rem auto;
            padding: 4rem;
            text-align: center;
            max-width: 800px;
        }

        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .scroll-reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
            z-index: 9999;
            transition: width 0.3s ease;
        }

        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                padding: 1rem;
            }
            
            .hero h2 {
                font-size: 2.5rem;
            }
        }
        .resume-builder {
            padding: 4rem 5%;
        }

        .resume-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
            margin-top: 2rem;
        }

        .resume-form .form-section {
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
        }

        .resume-form input, .resume-form textarea {
            width: 100%;
            padding: 0.8rem;
            margin: 0.5rem 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .resume-form input:focus, .resume-form textarea:focus {
            border-color: var(--primary);
            box-shadow: 0 0 8px rgba(106, 13, 173, 0.2);
        }

        .add-btn {
            margin-top: 1rem;
            padding: 0.6rem 1.2rem;
            background: var(--accent);
        }

        .tags-container {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .skill-tag {
            background: rgba(78, 205, 196, 0.2);
            color: var(--dark);
            padding: 0.4rem 1rem;
            border-radius: 20px;
            display: flex;
            align-items: center;
        }

        .skill-tag i {
            margin-left: 0.5rem;
            cursor: pointer;
        }

        .resume-preview {
            position: sticky;
            top: 100px;
            height: fit-content;
            font-family: 'Segoe UI', sans-serif;
            color: #2d3436;
            line-height: 1.6;
        }

        .preview-content {
            padding: 2rem;
        }

        .preview-content h1 {
            color: var(--primary);
            margin-bottom: 0.5rem;
            font-size: 2.5rem;
        }

        .preview-content h2 {
            color: var(--secondary);
            border-bottom: 2px solid var(--accent);
            padding-bottom: 0.5rem;
            margin: 1.5rem 0;
            font-size: 1.4rem;
        }

        .section-grid {
            display: grid;
            grid-template-columns: 30% 70%;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .job-entry {
            margin-bottom: 1.5rem;
        }

        .job-entry h3 {
            margin: 0.3rem 0;
            color: var(--dark);
        }

        .job-date {
            color: #666;
            font-size: 0.9rem;
        }

        .skills-columns {
            column-count: 2;
            column-gap: 2rem;
        }

        @media (max-width: 768px) {
            .resume-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="progress-bar"></div>

    <?php require('../inc/u-navbar.php'); ?>

    <section class="hero">
        <span class="badge scroll-reveal">No.1 AI-Powered Job Platform</span>
        <h2 class="scroll-reveal">Discover Your Dream Career</h2>
        <p class="scroll-reveal">AI-driven career matching with real-time opportunities</p>
        <a href="joblist.php"><button class="btn scroll-reveal">Explore Jobs</button></a>
    </section>

    <section class="steps scroll-reveal">
        <h2>Get Hired in 4 <span class="highlight">Easy Steps</span></h2>
        <div class="grid">
            <div class="card scroll-reveal">
                <i class="fas fa-user-plus fa-3x"></i>
                <h3>Create Profile</h3>
                <p>Build your AI-powered career profile</p>
            </div>
            <div class="card scroll-reveal">
                <i class="fas fa-search fa-3x"></i>
                <h3>Find Jobs</h3>
                <p>Discover personalized opportunities</p>
            </div>
            <div class="card scroll-reveal">
                <i class="fas fa-file-upload fa-3x"></i>
                <h3>Apply Smartly</h3>
                <p>AI-optimized applications</p>
            </div>
            <div class="card scroll-reveal">
                <i class="fas fa-briefcase fa-3x"></i>
                <h3>Get Hired</h3>
                <p>Start your dream career</p>
            </div>
        </div>
    </section>

    <section class="resume-builder scroll-reveal">
        <h2>AI-Powered <span class="highlight">Resume Builder</span></h2>
        <div class="resume-container">
            <!-- Resume Form -->
            <div class="resume-form card">
                <form id="resumeForm">
                    <!-- In the resume form section -->
<div class="form-section">
    <h3>Personal Information</h3>
    <div class="grid">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="tel" name="phone" placeholder="Phone Number">
        <input type="text" name="address" placeholder="Address">
    </div>
</div>

<div class="form-section profile">
    <h3>Profile Summary</h3>
    <textarea name="profile" placeholder="Professional summary"></textarea>
</div>

<!-- In the languages section -->
<div class="form-section languages">
    <h3>Languages</h3>
    <div class="grid">
        <input type="text" name="languages" placeholder="Language (Proficiency)">
        <input type="text" name="languages" placeholder="Language (Proficiency)">
        <input type="text" name="languages" placeholder="Language (Proficiency)">
    </div>
</div>

<!-- In the references section -->
<div class="form-section reference">
    <h3>References</h3>
    <div class="grid">
        <input type="text" name="refName" placeholder="Reference Name">
        <input type="text" name="refPosition" placeholder="Position">
        <input type="text" name="refCompany" placeholder="Company">
        <input type="tel" name="refPhone" placeholder="Phone">
        <input type="email" name="refEmail" placeholder="Email">
    </div>
</div>
                    <div class="form-section profile">
                        <h3>Profile Summary</h3>
                        <textarea placeholder="Professional summary"></textarea>
                    </div>

                    <div class="form-section">
                        <h3>Education</h3>
                        <div class="education-entry">
                            <div class="grid">
                                <input type="text" placeholder="Degree">
                                <input type="text" placeholder="University">
                                <input type="text" placeholder="Graduation Year">
                                <input type="text" placeholder="GPA">
                            </div>
                        </div>
                        <button type="button" class="btn add-btn" onclick="addEducation()">
                            <i class="fas fa-plus"></i> Add Education
                        </button>
                    </div>

                    <div class="form-section">
                        <h3>Work Experience</h3>
                        <div class="experience-entry">
                            <div class="grid">
                                <input type="text" placeholder="Job Title">
                                <input type="text" placeholder="Company">
                                <input type="text" placeholder="Start Date">
                                <input type="text" placeholder="End Date">
                            </div>
                            <textarea placeholder="Job Description"></textarea>
                        </div>
                        <button type="button" class="btn add-btn" onclick="addExperience()">
                            <i class="fas fa-plus"></i> Add Experience
                        </button>
                    </div>

                    <div class="form-section">
                        <h3>Skills</h3>
                        <div class="skills-input">
                            <div id="skillsTags" class="tags-container"></div>
                            <input type="text" id="skillInput" placeholder="Add skill and press Enter">
                        </div>
                    </div>

                    <div class="form-section languages">
                        <h3>Languages</h3>
                        <div class="grid">
                            <input type="text" placeholder="Language (Proficiency)">
                            <input type="text" placeholder="Language (Proficiency)">
                            <input type="text" placeholder="Language (Proficiency)">
                        </div>
                    </div>

                    <div class="form-section reference">
                        <h3>References</h3>
                        <div class="grid">
                            <input type="text" placeholder="Reference Name">
                            <input type="text" placeholder="Position">
                            <input type="text" placeholder="Company">
                            <input type="tel" placeholder="Phone">
                            <input type="email" placeholder="Email">
                        </div>
                    </div>

                    <button type="submit" class="btn generate-btn">
                        <i class="fas fa-magic"></i> Generate Resume
                    </button>
                </form>
            </div>

            <!-- Resume Preview -->
            <div class="resume-preview card">
                <div id="resumePreview" class="preview-content"></div>
                <button class="btn download-btn" onclick="downloadPDF()">
                    <i class="fas fa-download"></i> Download PDF
                </button>
            </div>
        </div>
    </section>
    

    <section class="categories scroll-reveal">
        <h2>Popular <span class="highlight">Categories</span></h2>
        <div class="grid">
            <div class="card job-card scroll-reveal">
                <h3>Tech & Engineering</h3>
                <p>1,200+ Opportunities</p>
                <button class="btn">View Jobs</button>
            </div>
            <div class="card job-card scroll-reveal">
                <h3>Healthcare</h3>
                <p>850+ Positions</p>
                <button class="btn">View Jobs</button>
            </div>
            <div class="card job-card scroll-reveal">
                <h3>Business</h3>
                <p>2,300+ Roles</p>
                <button class="btn">View Jobs</button>
            </div>
        </div>
    </section>

    <?php require('../inc/u-footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../user-end/dropdown.js"></script>

    <script>

        // Scroll Progress Bar
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.querySelector('.progress-bar').style.width = `${scrolled}%`;
        });

        // Scroll Animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.scroll-reveal').forEach((el) => observer.observe(el));

        // Live Counter Animation
        function animateValue(obj, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                obj.textContent = Math.floor(progress * (end - start) + start);
                if (progress < 1) window.requestAnimationFrame(step);
            };
            window.requestAnimationFrame(step);
        }

        // Initialize counters
        document.querySelectorAll('.live-counter').forEach((counter, index) => {
            animateValue(counter, 0, index % 2 === 0 ? 1500 : 250, 2000);
        });

        // Resume Builder JavaScript
        let skills = [];

        // Skill Tag Handler
        document.getElementById('skillInput').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                e.preventDefault();
                const skill = e.target.value.trim();
                if (skill) {
                    skills.push(skill);
                    updateSkillsDisplay();
                    e.target.value = '';
                }
            }
        });

        function updateSkillsDisplay() {
            const container = document.getElementById('skillsTags');
            container.innerHTML = skills.map(skill => `
                <div class="skill-tag">
                    ${skill}
                    <i class="fas fa-times" onclick="removeSkill('${skill}')"></i>
                </div>
            `).join('');
        }

        function removeSkill(skill) {
            skills = skills.filter(s => s !== skill);
            updateSkillsDisplay();
        }

        // Add Education/Experience
        function addEducation() {
            const container = document.querySelector('.education-entry');
            const newEntry = document.createElement('div');
            newEntry.className = 'education-entry';
            newEntry.innerHTML = `
                <div class="grid">
                    <input type="text" placeholder="Degree">
                    <input type="text" placeholder="University">
                    <input type="text" placeholder="Graduation Year">
                    <input type="text" placeholder="GPA">
                </div>
            `;
            container.parentNode.insertBefore(newEntry, container.nextSibling);
        }

        function addExperience() {
            const container = document.querySelector('.experience-entry');
            const newEntry = document.createElement('div');
            newEntry.className = 'experience-entry';
            newEntry.innerHTML = `
                <div class="grid">
                    <input type="text" placeholder="Job Title">
                    <input type="text" placeholder="Company">
                    <input type="text" placeholder="Start Date">
                    <input type="text" placeholder="End Date">
                </div>
                <textarea placeholder="Job Description"></textarea>
            `;
            container.parentNode.insertBefore(newEntry, container.nextSibling);
        }

        // Generate Preview
        document.getElementById('resumeForm').addEventListener('submit', (e) => {
            e.preventDefault();
            generatePreview();
        });

        function generatePreview() {
            const formData = new FormData(document.getElementById('resumeForm'));
            const preview = document.getElementById('resumePreview');
            
            preview.innerHTML = `
                <h1>${formData.get('name')}</h1>
                
                <div class="section-grid">
                    <div>
                        <h2>Contact</h2>
                        <p>${formData.get('phone')}</p>
                        <p>${formData.get('email')}</p>
                        <p>${formData.get('address')}</p>
                    </div>
                    
                    <div>
                        <h2>Profile</h2>
                        <p>${formData.get('profile')}</p>
                    </div>
                </div>

                <h2>Education</h2>
                ${Array.from(document.querySelectorAll('.education-entry')).map(entry => `
                    <div class="section-grid">
                        <div class="job-date">
                            ${entry.querySelector('[placeholder="Graduation Year"]').value}
                        </div>
                        <div class="job-entry">
                            <h3>${entry.querySelector('[placeholder="University"]').value}</h3>
                            <p>${entry.querySelector('[placeholder="Degree"]').value}</p>
                            <p>GPA: ${entry.querySelector('[placeholder="GPA"]').value}</p>
                        </div>
                    </div>
                `).join('')}

                <h2>Work Experience</h2>
                ${Array.from(document.querySelectorAll('.experience-entry')).map(entry => `
                    <div class="section-grid">
                        <div class="job-date">
                            ${entry.querySelector('[placeholder="Start Date"]').value} - 
                            ${entry.querySelector('[placeholder="End Date"]').value}
                        </div>
                        <div class="job-entry">
                            <h3>${entry.querySelector('[placeholder="Company"]').value}</h3>
                            <p>${entry.querySelector('[placeholder="Job Title"]').value}</p>
                            <ul>
                                ${entry.querySelector('textarea').value.split('\n').map(point => `
                                    <li>${point}</li>
                                `).join('')}
                            </ul>
                        </div>
                    </div>
                `).join('')}

                <div class="section-grid">
                    <div>
                        <h2>Skills</h2>
                        <div class="skills-columns">
                            ${skills.map(skill => `<div>• ${skill}</div>`).join('')}
                        </div>
                    </div>
                    
                    <div>
                        <h2>Languages</h2>
                        <ul>
                            ${Array.from(formData.getAll('languages')).map(lang => `
                                <li>${lang}</li>
                            `).join('')}
                        </ul>
                    </div>
                </div>

                <h2>References</h2>
                <div class="section-grid">
                    <div>
                        <p><strong>${formData.get('refName')}</strong></p>
                        <p>${formData.get('refPosition')}</p>
                    </div>
                    <div>
                        <p>${formData.get('refCompany')}</p>
                        <p>Phone: ${formData.get('refPhone')}</p>
                        <p>Email: ${formData.get('refEmail')}</p>
                    </div>
                </div>
            `;
        }

        // Download PDF
        function downloadPDF() {
            window.print();
        }

    </script>
</body>
</html>