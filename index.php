<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDaniel Afenu | Professional Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="profile-header">
                <div style="text-align: center;">
                    <img src="File.jpg" style="width: 300px; height: auto;">
                    <h1>McDaniel Afenu</h1>
                    <p>Web Developer & UX Designer</p>
                  </div>                  

                <div class="social-links">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </header>

    <nav>
        <div class="container">
            <ul>
                <centre><a href="#about">About</a></centre>
                <centre><a href="#skills">Skills</a></centre>
                <centre><a href="#skills">Skills</a></centre>
                <centre><a href="#projects">Projects</a></centre>
                <centre><a href="#experience">Experience</a></centre>
                <centre><a href="#contact">Contact</a></centre>
            </ul>
        </div>
    </nav>

    <main class="container">
        <section id="about" class="section">
            <h2>About Me</h2>
            <p>Hello! I'm McDaniel, a passionate web developer with 5 years of experience creating beautiful, functional websites. I specialize in front-end development with a focus on user experience and accessibility.</p>
            <p>When I'm not coding, you can find me hiking, reading sci-fi novels, or experimenting with new recipes in the kitchen.</p>
        </section>

        <section id="skills" class="section">
            <h2>My Skills</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <h3>Frontend</h3>
                    <ul>
                        <li>HTML5 & CSS3</li>
                        <li>JavaScript (ES6+)</li>
                        <li>Responsive Design</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Backend</h3>
                    <ul>
                        <li>Node.js</li>
                        <li>Express</li>
                        <li>Python</li>
                        <li>RESTful APIs</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Tools</h3>
                    <ul>
                        <li>Git & GitHub</li>
                        <li>VS Code</li>
                        <li>Figma</li>
                        <li>Adobe Creative Suite</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="projects" class="section">
            <h2>Featured Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <!<img src="project1.jpg" alt="E-commerce Platform">
                    <h3>E-commerce Platform</h3>
                    <p>A full-stack e-commerce solution with React frontend and Node.js backend.</p>
                    <a href="#" class="btn">View Project</a>
                </div>
                <div class="project-card">
                    <!<img src="project2.jpg" alt="Task Management App">
                    <h3>Task Management App</h3>
                    <p>A productivity app built with Vue.js and Firebase realtime database.</p>
                    <a href="#" class="btn">View Project</a>
                </div>
                <div class="project-card">
                    <!<img src="project3.jpg" alt="Portfolio Template">
                    <h3>Portfolio Template</h3>
                    <p>A responsive portfolio template for creatives and developers.</p>
                    <a href="#" class="btn">View Project</a>
                </div>
            </div>
        </section>

        <section id="experience" class="section">
            <h2>Experience</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">2019 - Present</div>
                    <div class="timeline-content">
                        <h3>Senior Web Developer</h3>
                        <h4>Tech Solutions Inc.</h4>
                        <p>Lead developer for client projects, specializing in React applications and API integrations.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-date">2017 - 2020</div>
                    <div class="timeline-content">
                        <h3>Frontend Developer</h3>
                        <h4>Digital Creative Agency</h4>
                        <p>Developed responsive websites and web applications for diverse clients.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="section">
            <h2>Get In Touch</h2>
            <form class="contact-form">
                <div class="form-group">
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Your Message" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 McDaniel Afenu. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>