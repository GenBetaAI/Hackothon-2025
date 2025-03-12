<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GenBeta AI - Job Listings</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <style>
        .notification {
            position: fixed;
            bottom: 20px;
            right: -300px;
            background: var(--accent);
            color: white;
            padding: 15px 25px;
            border-radius: 8px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: right 0.5s ease-out;
            z-index: 1000;
        }

        .notification.show {
            right: 20px;
        }
        :root {
            --primary: #6a0dad;
            --secondary: #ff6b6b;
            --accent: #4ecdc4;
            --dark: #2d3436;
            --light: #f8f9fa;
        }

        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            margin: 0;
            background: linear-gradient(45deg, var(--light) 0%, #ffffff 100%);
            color: var(--dark);
            overflow-x: hidden;
        }

        .header {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            --webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            color: white;
            padding: 0.8rem 1.5rem;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(106, 13, 173, 0.3);
        }

        .filters {
            padding: 1rem 5%;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            margin-top: 5rem;
        }

        .filters select, .filters input {
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-right: 1rem;
            font-size: 1rem;
        }

        .job-listings {
            padding: 2rem 5%;
        }

        .job-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 2rem;
            margin: 1rem 0;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.15);
        }

        .job-card h3 {
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .job-card p {
            margin: 0.5rem 0;
            color: var(--dark);
        }

        .job-card .btn {
            margin-top: 1rem;
        }

        .loading {
            text-align: center;
            font-size: 1.2rem;
            color: var(--primary);
        }
    </style>
</head>
<body>
    <div class="notification" id="notification"></div>
    <?php require('../inc/u-navbar.php'); ?>

        <button style="display: none;" id="exploreJobsBtn"></button>


    <div class="filters mt-3">
        <select id="jobTypeFilter">
            <option value="">All Job Types</option>
            <option value="Full-time">Full-time</option>
            <option value="Part-time">Part-time</option>
            <option value="Remote">Remote</option>
            <option value="Internship">Internship</option>
        </select>
        <select id="locationFilter">
            <option value="">All Locations</option>
            <option value="New York">New York</option>
            <option value="San Francisco">San Francisco</option>
            <option value="London">London</option>
            <option value="Berlin">Berlin</option>
        </select>
        <select id="categoryFilter">
            <option value="">All Categories</option>
            <option value="Engineering">Engineering</option>
            <option value="Design">Design</option>
            <option value="Marketing">Marketing</option>
            <option value="Finance">Finance</option>
        </select>
        <button class="btn" id="applyFiltersBtn">Apply Filters</button>
    </div>

    <section class="job-listings" id="jobListings">
        <div class="loading" id="loading">Loading jobs...</div>
    </section>


    <?php require('../inc/u-footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../user-end/dropdown.js"></script>
    <script>
        // Sample Job Data (180+ Jobs)
        const jobs = [
    { title: "Senior Software Engineer", company: "Tech Corp", location: "New York", type: "Full-time", category: "Engineering", date: "2023-10-01", description: "Develop cutting-edge software solutions." },
    { title: "UI/UX Designer", company: "Creative Studio", location: "San Francisco", type: "Full-time", category: "Design", date: "2023-10-02", description: "Design user-friendly interfaces." },
    { title: "Marketing Manager", company: "Global Ads", location: "London", type: "Full-time", category: "Marketing", date: "2023-10-03", description: "Lead marketing campaigns." },
    { title: "Financial Analyst", company: "Money Inc", location: "Berlin", type: "Full-time", category: "Finance", date: "2023-10-04", description: "Analyze financial data." },
    { title: "Data Scientist", company: "DataWorks", location: "New York", type: "Full-time", category: "Engineering", date: "2023-10-05", description: "Analyze and interpret complex data." },
    { title: "Product Manager", company: "Innovate Inc", location: "San Francisco", type: "Full-time", category: "Management", date: "2023-10-06", description: "Oversee product development lifecycle." },
    { title: "Graphic Designer", company: "Artistic Minds", location: "London", type: "Part-time", category: "Design", date: "2023-10-07", description: "Create visual content for marketing." },
    { title: "Sales Executive", company: "SalesPro", location: "Berlin", type: "Full-time", category: "Sales", date: "2023-10-08", description: "Drive sales and build client relationships." },
    { title: "DevOps Engineer", company: "CloudTech", location: "New York", type: "Full-time", category: "Engineering", date: "2023-10-09", description: "Manage and optimize cloud infrastructure." },
    { title: "Content Writer", company: "WriteWell", location: "San Francisco", type: "Remote", category: "Marketing", date: "2023-10-10", description: "Create engaging content for blogs and websites." },
    { title: "HR Manager", company: "PeopleFirst", location: "London", type: "Full-time", category: "HR", date: "2023-10-11", description: "Oversee recruitment and employee relations." },
    { title: "Frontend Developer", company: "WebCraft", location: "Berlin", type: "Full-time", category: "Engineering", date: "2023-10-12", description: "Build responsive and user-friendly web interfaces." },
    { title: "Backend Developer", company: "CodeBase", location: "New York", type: "Full-time", category: "Engineering", date: "2023-10-13", description: "Develop server-side logic and databases." },
    { title: "SEO Specialist", company: "SearchBoost", location: "San Francisco", type: "Full-time", category: "Marketing", date: "2023-10-14", description: "Optimize websites for search engines." },
    { title: "Business Analyst", company: "BizInsights", location: "London", type: "Full-time", category: "Finance", date: "2023-10-15", description: "Analyze business processes and recommend improvements." },
    { title: "Mobile App Developer", company: "AppMakers", location: "Berlin", type: "Full-time", category: "Engineering", date: "2023-10-16", description: "Develop cross-platform mobile applications." },
    { title: "Customer Support Specialist", company: "HelpDesk", location: "New York", type: "Full-time", category: "Support", date: "2023-10-17", description: "Assist customers with product issues." },
    { title: "Network Engineer", company: "NetSolutions", location: "San Francisco", type: "Full-time", category: "Engineering", date: "2023-10-18", description: "Design and maintain network infrastructure." },
    { title: "Social Media Manager", company: "BuzzSocial", location: "London", type: "Full-time", category: "Marketing", date: "2023-10-19", description: "Manage social media accounts and campaigns." },
    { title: "QA Engineer", company: "Testify", location: "Berlin", type: "Full-time", category: "Engineering", date: "2023-10-20", description: "Ensure software quality through testing." },
    { title: "Project Manager", company: "PlanIt", location: "New York", type: "Full-time", category: "Management", date: "2023-10-21", description: "Lead projects from inception to completion." },
    { title: "Copywriter", company: "WordSmiths", location: "San Francisco", type: "Remote", category: "Marketing", date: "2023-10-22", description: "Write compelling copy for advertisements." },
    { title: "System Administrator", company: "SysManage", location: "London", type: "Full-time", category: "IT", date: "2023-10-23", description: "Maintain and troubleshoot IT systems." },
    { title: "Data Analyst", company: "DataCrunch", location: "Berlin", type: "Full-time", category: "Engineering", date: "2023-10-24", description: "Analyze data to provide actionable insights." },
    { title: "Full Stack Developer", company: "CodeCraft", location: "New York", type: "Full-time", category: "Engineering", date: "2023-10-25", description: "Develop both frontend and backend systems." },
    { title: "Digital Marketing Specialist", company: "MarketMasters", location: "San Francisco", type: "Full-time", category: "Marketing", date: "2023-10-26", description: "Plan and execute digital marketing strategies." },
    { title: "Technical Writer", company: "DocuTech", location: "London", type: "Remote", category: "Writing", date: "2023-10-27", description: "Create technical documentation and manuals." },
    { title: "Cybersecurity Analyst", company: "SecureIT", location: "Berlin", type: "Full-time", category: "IT", date: "2023-10-28", description: "Protect systems from cyber threats." },
    { title: "Operations Manager", company: "OpsPro", location: "New York", type: "Full-time", category: "Management", date: "2023-10-29", description: "Oversee daily business operations." },
    { title: "UI Designer", company: "DesignHub", location: "San Francisco", type: "Full-time", category: "Design", date: "2023-10-30", description: "Design intuitive user interfaces." },
    { title: "Backend Developer", company: "CodeBase", location: "London", type: "Full-time", category: "Engineering", date: "2023-10-31", description: "Develop server-side logic and databases." },
    { title: "SEO Specialist", company: "SearchBoost", location: "Berlin", type: "Full-time", category: "Marketing", date: "2023-11-01", description: "Optimize websites for search engines." },
    { title: "Business Analyst", company: "BizInsights", location: "New York", type: "Full-time", category: "Finance", date: "2023-11-02", description: "Analyze business processes and recommend improvements." },
    { title: "Mobile App Developer", company: "AppMakers", location: "San Francisco", type: "Full-time", category: "Engineering", date: "2023-11-03", description: "Develop cross-platform mobile applications." },
    { title: "Customer Support Specialist", company: "HelpDesk", location: "London", type: "Full-time", category: "Support", date: "2023-11-04", description: "Assist customers with product issues." },
    { title: "Network Engineer", company: "NetSolutions", location: "Berlin", type: "Full-time", category: "Engineering", date: "2023-11-05", description: "Design and maintain network infrastructure." },
    { title: "Social Media Manager", company: "BuzzSocial", location: "New York", type: "Full-time", category: "Marketing", date: "2023-11-06", description: "Manage social media accounts and campaigns." },
    { title: "QA Engineer", company: "Testify", location: "San Francisco", type: "Full-time", category: "Engineering", date: "2023-11-07", description: "Ensure software quality through testing." },
    { title: "Project Manager", company: "PlanIt", location: "London", type: "Full-time", category: "Management", date: "2023-11-08", description: "Lead projects from inception to completion." },
    { title: "Copywriter", company: "WordSmiths", location: "Berlin", type: "Remote", category: "Marketing", date: "2023-11-09", description: "Write compelling copy for advertisements." },
    { title: "System Administrator", company: "SysManage", location: "New York", type: "Full-time", category: "IT", date: "2023-11-10", description: "Maintain and troubleshoot IT systems." },
    { title: "Data Analyst", company: "DataCrunch", location: "San Francisco", type: "Full-time", category: "Engineering", date: "2023-11-11", description: "Analyze data to provide actionable insights." },
    { title: "Full Stack Developer", company: "CodeCraft", location: "London", type: "Full-time", category: "Engineering", date: "2023-11-12", description: "Develop both frontend and backend systems." },
    { title: "Digital Marketing Specialist", company: "MarketMasters", location: "Berlin", type: "Full-time", category: "Marketing", date: "2023-11-13", description: "Plan and execute digital marketing strategies." },
    { title: "Technical Writer", company: "DocuTech", location: "New York", type: "Remote", category: "Writing", date: "2023-11-14", description: "Create technical documentation and manuals." },
    { title: "Cybersecurity Analyst", company: "SecureIT", location: "San Francisco", type: "Full-time", category: "IT", date: "2023-11-15", description: "Protect systems from cyber threats." },
    { title: "Operations Manager", company: "OpsPro", location: "London", type: "Full-time", category: "Management", date: "2023-11-16", description: "Oversee daily business operations." },
    { title: "UI Designer", company: "DesignHub", location: "Berlin", type: "Full-time", category: "Design", date: "2023-11-17", description: "Design intuitive user interfaces." },
    { title: "Backend Developer", company: "CodeBase", location: "New York", type: "Full-time", category: "Engineering", date: "2023-11-18", description: "Develop server-side logic and databases." },
    { title: "SEO Specialist", company: "SearchBoost", location: "San Francisco", type: "Full-time", category: "Marketing", date: "2023-11-19", description: "Optimize websites for search engines." },
    { title: "Business Analyst", company: "BizInsights", location: "London", type: "Full-time", category: "Finance", date: "2023-11-20", description: "Analyze business processes and recommend improvements." },
    { title: "Mobile App Developer", company: "AppMakers", location: "Berlin", type: "Full-time", category: "Engineering", date: "2023-11-21", description: "Develop cross-platform mobile applications." },
    { title: "Customer Support Specialist", company: "HelpDesk", location: "New York", type: "Full-time", category: "Support", date: "2023-11-22", description: "Assist customers with product issues." },
    { title: "Network Engineer", company: "NetSolutions", location: "San Francisco", type: "Full-time", category: "Engineering", date: "2023-11-23", description: "Design and maintain network infrastructure." },
    { title: "Social Media Manager", company: "BuzzSocial", location: "London", type: "Full-time", category: "Marketing", date: "2023-11-24", description: "Manage social media accounts and campaigns." },
    { title: "QA Engineer", company: "Testify", location: "Berlin", type: "Full-time", category: "Engineering", date: "2023-11-25", description: "Ensure software quality through testing." },
    { title: "Project Manager", company: "PlanIt", location: "New York", type: "Full-time", category: "Management", date: "2023-11-26", description: "Lead projects from inception to completion." },
    { title: "Copywriter", company: "WordSmiths", location: "San Francisco", type: "Remote", category: "Marketing", date: "2023-11-27", description: "Write compelling copy for advertisements." },
    { title: "System Administrator", company: "SysManage", location: "London", type: "Full-time", category: "IT", date: "2023-11-28", description: "Maintain and troubleshoot IT systems." },
    { title: "Data Analyst", company: "DataCrunch", location: "Berlin", type: "Full-time", category: "Engineering", date: "2023-11-29", description: "Analyze data to provide actionable insights." },
    { title: "Full Stack Developer", company: "CodeCraft", location: "New York", type: "Full-time", category: "Engineering", date: "2023-11-30", description: "Develop both frontend and backend systems." },
    { title: "Digital Marketing Specialist", company: "MarketMasters", location: "San Francisco", type: "Full-time", category: "Marketing", date: "2023-12-01", description: "Plan and execute digital marketing strategies." },
    { title: "Technical Writer", company: "DocuTech", location: "London", type: "Remote", category: "Writing", date: "2023-12-02", description: "Create technical documentation and manuals." },
    { title: "Cybersecurity Analyst", company: "SecureIT", location: "Berlin", type: "Full-time", category: "IT", date: "2023-12-03", description: "Protect systems from cyber threats." },
    { title: "Operations Manager", company: "OpsPro", location: "New York", type: "Full-time", category: "Management", date: "2023-12-04", description: "Oversee daily business operations." },
    { title: "UI Designer", company: "DesignHub", location: "San Francisco", type: "Full-time", category: "Design", date: "2023-12-05", description: "Design intuitive user interfaces." },
    { title: "Backend Developer", company: "CodeBase", location: "London", type: "Full-time", category: "Engineering", date: "2023-12-06", description: "Develop server-side logic and databases." },
    { title: "SEO Specialist", company: "SearchBoost", location: "Berlin", type: "Full-time", category: "Marketing", date: "2023-12-07", description: "Optimize websites for search engines." },
    { title: "Business Analyst", company: "BizInsights", location: "New York", type: "Full-time", category: "Finance", date: "2023-12-08", description: "Analyze business processes and recommend improvements." },
    { title: "Mobile App Developer", company: "AppMakers", location: "San Francisco", type: "Full-time", category: "Engineering", date: "2023-12-09", description: "Develop cross-platform mobile applications." },
    { title: "Customer Support Specialist", company: "HelpDesk", location: "London", type: "Full-time", category: "Support", date: "2023-12-10", description: "Assist customers with product issues." },
    { title: "Network Engineer", company: "NetSolutions", location: "Berlin", type: "Full-time", category: "Engineering", date: "2023-12-11", description: "Design and maintain network infrastructure." },
    { title: "Social Media Manager", company: "BuzzSocial", location: "New York", type: "Full-time", category: "Marketing", date: "2023-12-12", description: "Manage social media accounts and campaigns." },
    { title: "QA Engineer", company: "Testify", location: "San Francisco", type: "Full-time", category: "Engineering", date: "2023-12-13", description: "Ensure software quality through testing." },
    { title: "Project Manager", company: "PlanIt", location: "London", type: "Full-time", category: "Management", date: "2023-12-14", description: "Lead projects from inception to completion." },
    { title: "Copywriter", company: "WordSmiths", location: "Berlin", type: "Remote", category: "Marketing", date: "2023-12-15", description: "Write compelling copy for advertisements." },
    { title: "System Administrator", company: "SysManage", location: "New York", type: "Full-time", category: "IT", date: "2023-12-16", description: "Maintain and troubleshoot IT systems." },
    { title: "Data Analyst", company: "DataCrunch", location: "San Francisco", type: "Full-time", category: "Engineering", date: "2023-12-17", description: "Analyze data to provide actionable insights." },
            // Add 180+ more jobs here...
        ];

        const jobListings = document.getElementById('jobListings');
        const loading = document.getElementById('loading');
        const exploreJobsBtn = document.getElementById('exploreJobsBtn');
        const applyFiltersBtn = document.getElementById('applyFiltersBtn');
        const jobTypeFilter = document.getElementById('jobTypeFilter');
        const locationFilter = document.getElementById('locationFilter');
        const categoryFilter = document.getElementById('categoryFilter');

        // Render Job Listings
        function renderJobs(filteredJobs) {
            jobListings.innerHTML = '';
            filteredJobs.forEach(job => {
                const jobCard = document.createElement('div');
                jobCard.className = 'job-card';
                jobCard.innerHTML = `
                    <h3>${job.title}</h3>
                    <p>${job.company}</p>
                    <p>📍 ${job.location}</p>
                    <p>📅 ${new Date(job.date).toLocaleDateString()}</p>
                    <p>${job.description}</p>
                    <button class="btn apply-btn">Apply Now</button>
                `;
                jobListings.appendChild(jobCard);
            });
        }
        // Apply Filters
        function applyFilters() {
            const type = jobTypeFilter.value;
            const location = locationFilter.value;
            const category = categoryFilter.value;

            const filteredJobs = jobs.filter(job => {
                return (!type || job.type === type) &&
                       (!location || job.location === location) &&
                       (!category || job.category === category);
            });

            renderJobs(filteredJobs);
        }
        // Add notification function
        function showNotification() {
            const notification = document.getElementById('notification');
            notification.textContent = 'Your resume has been submitted!';
            notification.classList.add('show');
            
            setTimeout(() => {
                notification.classList.remove('show');
            }, 3000);
        }

        // Add event listener for apply buttons
        jobListings.addEventListener('click', (e) => {
            if (e.target.classList.contains('apply-btn')) {
                showNotification();
            }
        });
        // Initial Load
        exploreJobsBtn.addEventListener('click', () => {
            loading.style.display = 'block';
            setTimeout(() => {
                renderJobs(jobs);
                loading.style.display = 'none';
            }, 1000);
        });

        // Apply Filters on Button Click
        applyFiltersBtn.addEventListener('click', applyFilters);

        // Initial Render
        renderJobs(jobs);
    </script>
</body>
</html>