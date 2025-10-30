<?php
// Main Portfolio Page
// Using PHP include to organize code into modular sections
?>

<?php include 'header.php'; ?>

    <main class="container mt-5 pt-5">
        <!-- Hero & About Section -->
        <section id="about" class="hero-section mb-5">
            <div class="glass-card hero-card">
                <div class="row align-items-center">
                    <div class="col-md-4 text-center mb-4 mb-md-0">
                        <div class="profile-image mb-4">
                            <img src="images/mypicture.jpg" alt="JC Jade Nealega Profile Picture" class="profile-img">
                        </div>
                        <h1 class="hero-title">Jc Jade Nealega</h1>
                        <p class="hero-subtitle mb-4">Information Technology Student & Customer Service Agent</p>
                        <div class="hero-buttons">
                            <a href="#contact" class="btn glass-btn me-3 mb-2">
                                <i class="fas fa-envelope me-2"></i>Get In Touch
                            </a>
                            <a href="#education" class="btn glass-btn-outline mb-2">
                                <i class="fas fa-graduation-cap me-2"></i>View Education
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 about-content">
                        <p class="lead">Hello! I'm <strong>JC Jade Nealega</strong>, an Information Technology student at Batangas State University with a passion for technology and customer service excellence. As a dedicated learner pursuing my Bachelor's degree, I'm constantly expanding my knowledge in computer hardware, software systems, and network technologies.</p>
                        
                        <p>While focusing on my academic studies, I've gained valuable real-world experience through my work in the customer service industry. Over the past few years, I've had the opportunity to work with leading companies like <strong>Alorica Philippines</strong> and <strong>ResultsCX</strong>, where I've developed strong skills in escalation management, technical troubleshooting, and customer retention strategies.</p>
                        
                        <p>My experience at <strong>Epson Precision Philippines</strong> as a Production Operator also gave me hands-on exposure to manufacturing processes and quality assurance in the electronics industry. These diverse work experiences, combined with my academic pursuits, have shaped my ability to bridge the gap between technical knowledge and practical problem-solving.</p>
                        
                        <p class="mb-0">I'm excited to continue learning and growing in the IT field, leveraging both my educational foundation and professional experience to contribute meaningfully to future projects and opportunities.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Education Section -->
        <section id="education" class="mb-5">
            <div class="glass-card">
                <h2><i class="fas fa-graduation-cap me-3"></i>Education</h2>
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">
                        <div class="education-list">
                            <div class="education-item">
                                <div class="education-logo-circular">
                                    <img src="images/batangas state university.png" alt="Batangas State University Logo" class="circular-logo">
                                </div>
                                <div class="education-details">
                                    <div class="education-level">Current Studies</div>
                                    <div class="education-degree">Bachelor of Science in Information Technology</div>
                                    <div class="education-school">Batangas State University Lipa</div>
                                    <div class="education-status">
                                        <strong><i class="fas fa-circle text-success me-1"></i>In Progress</strong>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="education-item">
                                <div class="education-logo-circular">
                                    <img src="images/fernando air base integrated national high school.jpeg" alt="Fernando Air Base Integrated National High School Logo" class="circular-logo">
                                </div>
                                <div class="education-details">
                                    <div class="education-level">Senior High School</div>
                                    <div class="education-degree">Computer Hardware Servicing</div>
                                    <div class="education-school">Fernando Air Base Integrated National High School</div>
                                    <div class="education-year">2012 - 2016</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

                <!-- Skills Section -->
        <section id="skills" class="mb-5">
            <div class="glass-card">
                <h2><i class="fas fa-tools me-3"></i>Skills & Hobbies</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="glass-sub-card h-100">
                            <h5><i class="fas fa-handshake me-2"></i>Professional Skills</h5>
                            <div class="skills-list">
                                <div class="skill-item">
                                    <i class="fas fa-headset skill-icon"></i>
                                    <span>Customer Service</span>
                                </div>
                                <div class="skill-item">
                                    <i class="fas fa-exclamation-triangle skill-icon"></i>
                                    <span>Escalation Management</span>
                                </div>
                                <div class="skill-item">
                                    <i class="fas fa-wrench skill-icon"></i>
                                    <span>Technical Troubleshooting</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="glass-sub-card h-100">
                            <h5><i class="fas fa-laptop-code me-2"></i>Technical Skills</h5>
                            <div class="skills-list">
                                <div class="skill-item">
                                    <i class="fas fa-microchip skill-icon"></i>
                                    <span>Computer Hardware</span>
                                </div>
                                <div class="skill-item">
                                    <i class="fas fa-cogs skill-icon"></i>
                                    <span>Software Management</span>
                                </div>
                                <div class="skill-item">
                                    <i class="fas fa-network-wired skill-icon"></i>
                                    <span>Network Administration</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="glass-sub-card h-100">
                            <h5><i class="fas fa-heart me-2"></i>Hobbies & Interests</h5>
                            <div class="skills-list">
                                <div class="skill-item">
                                    <i class="fas fa-camera skill-icon"></i>
                                    <span>Mobile Photography</span>
                                </div>
                                <div class="skill-item">
                                    <i class="fas fa-skating skill-icon"></i>
                                    <span>Longboard Cruising</span>
                                </div>
                                <div class="skill-item">
                                    <i class="fas fa-headphones skill-icon"></i>
                                    <span>Collecting Earbuds, IEMs, DAPs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section id="experience" class="mb-5">
            <div class="glass-card">
                <h2><i class="fas fa-briefcase me-3"></i>Work Experience</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <a href="https://www.alorica.com/careers/philippines" target="_blank" class="experience-link">
                            <div class="glass-experience-card current-job">
                                <div class="experience-header">
                                    <div class="company-icon">
                                        <i class="fas fa-building"></i>
                                    </div>
                                    <div>
                                        <h5 class="company-name">Alorica Philippines</h5>
                                        <span class="location">Lipa</span>
                                    </div>
                                </div>
                                <div class="experience-body">
                                    <h6 class="position">
                                        <i class="fas fa-user-tie me-2"></i>Customer Service Representative
                                    </h6>
                                    <p class="duration">
                                        <i class="fas fa-calendar-alt me-2"></i>May 2020 - Present
                                    </p>
                                    <p class="description">Managed complex customer issues and complaints within the escalation department of a top online food ordering and delivery platform. Applied strategic problem-solving techniques to deliver effective resolutions.</p>
                                    <div class="status-badge current">
                                        <i class="fas fa-circle me-2"></i>Current Position
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <a href="https://careers.resultscx.com/philippines" target="_blank" class="experience-link">
                            <div class="glass-experience-card">
                                <div class="experience-header">
                                    <div class="company-icon">
                                        <i class="fas fa-satellite"></i>
                                    </div>
                                    <div>
                                        <h5 class="company-name">ResultsCX</h5>
                                        <span class="location">Lipa</span>
                                    </div>
                                </div>
                                <div class="experience-body">
                                    <h6 class="position">
                                        <i class="fas fa-user-tie me-2"></i>Customer Service Representative
                                    </h6>
                                    <p class="duration">
                                        <i class="fas fa-calendar-alt me-2"></i>April 2019 - August 2019
                                    </p>
                                    <p class="description">Specialized in customer retention for a leading satellite radio provider in the United States. Addressed concerns and offered tailored solutions using excellent communication skills.</p>
                                    <div class="status-badge retention">
                                        <i class="fas fa-user-friends me-2"></i>Customer Retention
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-4 mb-4">
                        <a href="https://www.infomaninc.com/link/seipi/epson_precision.htm" target="_blank" class="experience-link">
                            <div class="glass-experience-card">
                                <div class="experience-header">
                                    <div class="company-icon">
                                        <i class="fas fa-industry"></i>
                                    </div>
                                    <div>
                                        <h5 class="company-name">Epson Precision Philippines</h5>
                                        <span class="location">Lipa</span>
                                    </div>
                                </div>
                                <div class="experience-body">
                                    <h6 class="position">
                                        <i class="fas fa-cogs me-2"></i>Production Operator
                                    </h6>
                                    <p class="duration">
                                        <i class="fas fa-calendar-alt me-2"></i>April 2018 - September 2018
                                    </p>
                                    <p class="description">Operated production equipment and monitored manufacturing processes for high-quality electronic and imaging products. Ensured products met company's rigorous quality standards.</p>
                                    <div class="status-badge manufacturing">
                                        <i class="fas fa-wrench me-2"></i>Manufacturing
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="mb-5">
            <div class="glass-card">
                <h2><i class="fas fa-code me-3"></i>Featured Projects</h2>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <a href="https://github.com/nealegajc/Final-Project" target="_blank" class="project-link">
                            <div class="glass-project-card">
                                <div class="project-header">
                                    <div class="project-icon cpp">
                                        <i class="fas fa-terminal"></i>
                                    </div>
                                    <div>
                                        <h5 class="project-title">Music Playlist Manager</h5>
                                        <span class="project-category">C++ Console Application</span>
                                    </div>
                                </div>
                                <div class="project-body">
                                    <p class="project-description">A comprehensive console-based music playlist management system featuring CRUD operations, user authentication, and advanced sorting/searching functionality. Developed collaboratively with modern C++ programming practices.</p>
                                    <div class="tech-stack mb-3">
                                        <span class="tech-tag">C++</span>
                                        <span class="tech-tag">Object-Oriented Programming</span>
                                        <span class="tech-tag">Data Structures</span>
                                        <span class="tech-tag">File I/O</span>
                                    </div>
                                    <div class="project-features">
                                        <small><i class="fas fa-check me-1"></i> User Login System</small>
                                        <small><i class="fas fa-check me-1"></i> CRUD Operations</small>
                                        <small><i class="fas fa-check me-1"></i> Search & Sort</small>
                                    </div>
                                    <div class="project-badge cpp-badge">
                                        <i class="fab fa-github me-2"></i>View on GitHub
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <a href="https://github.com/YouBhoy/Community-Food-Donation" target="_blank" class="project-link">
                            <div class="glass-project-card">
                                <div class="project-header">
                                    <div class="project-icon php">
                                        <i class="fab fa-php"></i>
                                    </div>
                                    <div>
                                        <h5 class="project-title">ConnectHub Community Platform</h5>
                                        <span class="project-category">PHP Web Application</span>
                                    </div>
                                </div>
                                <div class="project-body">
                                    <p class="project-description">A full-stack community platform designed for university organizations to manage events and foster connections. Features user authentication, organization profiles, and aligns with UN SDG 17 (Partnerships for the Goals).</p>
                                    <div class="tech-stack mb-3">
                                        <span class="tech-tag">PHP</span>
                                        <span class="tech-tag">MySQL</span>
                                        <span class="tech-tag">Bootstrap</span>
                                        <span class="tech-tag">JavaScript</span>
                                    </div>
                                    <div class="project-features">
                                        <small><i class="fas fa-check me-1"></i> Event Management</small>
                                        <small><i class="fas fa-check me-1"></i> User Authentication</small>
                                        <small><i class="fas fa-check me-1"></i> Organization Profiles</small>
                                    </div>
                                    <div class="project-badge php-badge">
                                        <i class="fab fa-github me-2"></i>View on GitHub
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <a href="https://github.com/nealegajc/cssxbootstrapV2" target="_blank" class="project-link">
                            <div class="glass-project-card">
                                <div class="project-header">
                                    <div class="project-icon frontend">
                                        <i class="fab fa-html5"></i>
                                    </div>
                                    <div>
                                        <h5 class="project-title">Mac Miller Discography</h5>
                                        <span class="project-category">Responsive Web Design</span>
                                    </div>
                                </div>
                                <div class="project-body">
                                    <p class="project-description">A responsive tribute website showcasing Mac Miller's complete discography with glassmorphism design. Features user authentication, interactive album cards, and seamless Spotify integration.</p>
                                    <div class="tech-stack mb-3">
                                        <span class="tech-tag">HTML5</span>
                                        <span class="tech-tag">CSS3</span>
                                        <span class="tech-tag">Bootstrap 5</span>
                                        <span class="tech-tag">JavaScript ES6</span>
                                    </div>
                                    <div class="project-features">
                                        <small><i class="fas fa-check me-1"></i> User Authentication</small>
                                        <small><i class="fas fa-check me-1"></i> Responsive Design</small>
                                        <small><i class="fas fa-check me-1"></i> Spotify Integration</small>
                                    </div>
                                    <div class="project-badge frontend-badge">
                                        <i class="fab fa-github me-2"></i>View on GitHub
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-6 mb-4">
                        <a href="https://github.com/Aloien/Animal-Rescue-Hub-A-Platform-for-Monitoring-and-Supporting-Rescue-Efforts" target="_blank" class="project-link">
                            <div class="glass-project-card">
                                <div class="project-header">
                                    <div class="project-icon fullstack">
                                        <i class="fas fa-paw"></i>
                                    </div>
                                    <div>
                                        <h5 class="project-title">Animal Rescue Hub</h5>
                                        <span class="project-category">Full-Stack Web Platform</span>
                                    </div>
                                </div>
                                <div class="project-body">
                                    <p class="project-description">A comprehensive animal rescue management system with incident reporting, adoption workflows, and administrative dashboards. Features real-time analytics, geolocation tracking, and multi-user authentication.</p>
                                    <div class="tech-stack mb-3">
                                        <span class="tech-tag">PHP</span>
                                        <span class="tech-tag">MySQL</span>
                                        <span class="tech-tag">Chart.js</span>
                                        <span class="tech-tag">Bootstrap</span>
                                    </div>
                                    <div class="project-features">
                                        <small><i class="fas fa-check me-1"></i> Incident Reporting</small>
                                        <small><i class="fas fa-check me-1"></i> Adoption System</small>
                                        <small><i class="fas fa-check me-1"></i> Admin Dashboard</small>
                                    </div>
                                    <div class="project-badge fullstack-badge">
                                        <i class="fab fa-github me-2"></i>View on GitHub
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

                <!-- Contact Section -->
        <section id="contact" class="mb-5">
            <div class="glass-card">
                <h2><i class="fas fa-envelope me-3"></i>Contact Information</h2>
                <div class="glass-sub-card">
                    <div class="contact-list">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="contact-info">
                                <strong>Email</strong>
                                <a>nealegajc@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="contact-info">
                                <strong>Mobile</strong>
                                <a>0976 003 5371</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fab fa-discord"></i>
                            </div>
                            <div class="contact-info">
                                <strong>Discord</strong>
                                <a href="https://discordapp.com/users/382524931147038721" target="_blank">nealegajc</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="contact-info">
                                <strong>Instagram</strong>
                                <a href="https://instagram.com/kinda_jc" target="_blank">@kinda_jc</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fab fa-linkedin"></i>
                            </div>
                            <div class="contact-info">
                                <strong>LinkedIn</strong>
                                <a href="https://www.linkedin.com/in/jc-jade/" target="_blank">JC Jade Nealega</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="contact-icon">
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="contact-info">
                                <strong>GitHub</strong>
                                <a href="https://github.com/nealegajc" target="_blank">nealegajc</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>    

<?php include 'footer.php'; ?>
