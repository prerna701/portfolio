<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" type="text/css" href="portfolio.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/facebook?f=brands&s=solid">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* ... Your existing styles ... */
        
        /* Style for images */
        .images img {
            max-width: 100%;
            height: auto;
        }
        
        /* Style for dynamic effect */
        .dynamic-effect {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        .dynamic-effect.active {
            opacity: 1;
            transform: translateY(0);
        }
  
        /* Style for bubbles */
        #bubble-container {
            position: absolute;
            width: 100%;
            height: 100%;
        }
        .bubble {
            position: absolute;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.3);
            animation: float 6s infinite;
        }
        @keyframes float {
            0% {
                transform: translateY(0);
                opacity: 1;
            }
            100% {
                transform: translateY(-100vh);
                opacity: 0;
            }
        }
    </style>
</head>
    
<body>

   
   
<header>
    <div class="cont">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#Skills">Skills</a>
        <a href="#Work">Work</a>
        <a href="prerna_resume.pdf">Resume</a>
        <a href="#contact">Contact me</a>
    </div>
     <div id="bubble-container-header"></div>
</header>
    
<div class="container">
    <div class="top-right-image">
        <img src="prerna photo.png" height="300" width="300" alt="#">
    </div>
</div>

<div class="social">
    <a href="#"><i class="ri-facebook-fill"></i></a>
    <a href="#"><i class="ri-instagram-fill"></i></a>
    <a href="#"><i class="ri-linkedin-fill"></i></a>
</div>


<div class="header-text">
    <h1>I'm <span>Prerna</span><br><br>I reside in Panipat <br><br>and  I am currently pursuing BCA-CTIS from PIET</h1>
</div>


<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="prerna2photo.jpg" height="400" width="400">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p>As a novice in the IT industry, I'm eager to embark on my journey in this dynamic domain. I am thrilled to immerse myself in the multifaceted and demanding landscape of software engineering. With a strong foundation in programming languages such as C, Java, and web development, I also have a deep understanding of cloud computing and am familiar with its technologies such as virtualization and containers. Additionally, I've learned about different types of attacks and measures to detect and prevent them, such as encryption, hash algorithms, etc.</p>
                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('Skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('Experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('Education')">Education</p>
                </div>
                <div class="tab-contents active-tab" id="Skills">
                    <ul>
                        <li>Languages: Java, Python, C</li>
                        <li>Frontend: HTML, CSS, Javascript, React.js, Bootstrap</li>
                        <li>Backend: Php, SQL, Node.js</li>
                        <li>Familiar with cloud technologies: virtualization, containers, etc</li>
                    </ul>
                </div>
                <div class="tab-contents" id="Experience">
                    <ul>
                        <li>Developed fully Integrated student management System with necessary modules for admission, fee management, timetable, attendance, library.</li>
                        <li>Calculator, Portfolio, and some other minor Projects using HTML, CSS, and JS.</li>
                    </ul>
                </div>
                <div class="tab-contents" id="Education">
                    <ul>
                        <li><span>2023</span> Currently in 3rd year of BCA-CTIS at PIET</li>
                        <li><span>2020-21</span> Completed 12th from CBSE</li>
                        <li><span>2017-18</span> Completed 10th from HBSE</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="Work">
    <div class="container">
        <h1 class="subtitle">My work</h1>
        <div class="worklist">
            <div class="work">
                <img src="work-1.png">
                <div class="layer">
                    <h3>Social media app</h3>
                    <p>This apps connects us to the  talented people around the world.
                        Download it from playstore.</p>
                        <a href="#"><i class="fas fa-external-link-alt"></i>
                        </a>

                    
                </div>
            </div>
            <div class="work">
                <img src="work-2.png">
                <div class="layer">
                <h3>Music app</h3>
                <p>This apps connects us to the  talented people around the world.
                    </p>
                    <a href="#"><i class="fas fa-external-link-alt"></i>
                    </a>

            </div>
        </div>
        <div class="work">
            <img src="registerd successfully.png">
            <div class="layer">
            <h3>Registration Form Details</h3>
            <p>Help students to register successfully</p>
                <a href="#"><i class="fas fa-external-link-alt"></i>
                </a>
    
        </div>
    </div>
    <div class="work">
        <img src="signin.png">
        <div class="layer">
        <h3>Log in Form</h3>
        <p>helps student to log-in after  Registration</p>
            <a href="#"><i class="fas fa-external-link-alt"></i>
            </a>

    </div>
</div>
        <div class="work">
            <img src="recordofstudents.png">
            <div class="layer">
            <h3>Student's Form</h3>
            <p>Keeps the record of students.</p>
                <a href="#"><i class="fas fa-external-link-alt"></i>
                </a>

        </div>
    </div>
    <div class="work">
        <img src="recordofteachers.png">
        <div class="layer">
        <h3>Record of Teachers</h3>
        <p>Keeps the record of students.</p>
            <a href="#"><i class="fas fa-external-link-alt"></i>
            </a>

    </div>
</div>
            <div class="work">
                <img src="work-3.png">
                <div class="layer">
                <h3>Online Shopping App</h3>
                <p>This apps connects us to the  talented people around the world.
                    Download it from playstore.</p>
                    <a href="#"><i class="fas fa-external-link-alt"></i>
                    </a>

            </div>
     
       </div>
       <div class="work">
        <img src="cal.png">
        <div class="layer">
        <h3>Calculator</h3>
        <p>This allow us to perform arithmtic operations.</p>
            <a href="#"><i class="fas fa-external-link-alt"></i>
            </a>

    </div>

</div>
</div>
<a href="#" class="btn">See more</a>
</div>
</div>

<!----Contact-->
<div id="contact" class="container">
    <div class="row">
        <div class="contact-left">
            <h1 class="cont" style="color:#fff">Contact Me</h1>
            
          
<div class="social">
    <a href="#https://www.facebook.com/jiya.chopra.731" style="color: blue"><i class="fab fa-facebook"></i>  Facebook</a><br><br>
    <a href="https://www.instagram.com/prerna_arora34" style="color: blue"><i class="fab fa-instagram"></i>Instagram</a><br><br>
    <a href="https://www.linkedin.com/in/prerna-arora-7ba365283/" style="color: blue"><i class="fab fa-linkedin"></i> LinkedIn</a>
</div>

        <a href="prerna_resume.pdf" class="btn-btn2">Download CV</a>
    </div>
    <div class="contact-right">
        <form action="redirect.php" method="post">
            <input type="text" name="name" placeholder=" Enter your Name" required>
            <input type="text" name="email" placeholder="Enter your e-mail" required>
            <textarea name="Message" rows="6" placeholder="Your message"></textarea>
            <button type="submit" name="submit" class="btn-btn2">Submit</button>
        </form>
    </div>

</div>


<script>
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname) {
        for (tablink of tablinks) {
            tablink.classList.remove("active-link");
        }
        for (tabcontent of tabcontents) {
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }
  

</script>
<script>
    // Your existing JavaScript code ...

    // Function to create bubbles
    function createBubble(containerId) {
        const bubble = document.createElement('div');
        bubble.className = 'bubble';
        const size = Math.random() * 80 + 80; // Random size between 50 and 150
        bubble.style.width = size + 'px';
        bubble.style.height = size + 'px';
        const startX = Math.random() * window.innerWidth; // Random horizontal position
        bubble.style.left = startX + 'px';
        document.querySelector(containerId).appendChild(bubble);

        setTimeout(() => {
            bubble.remove(); // Remove bubble after animation
        }, 30000); // 6 seconds

        // Animation for bubbles
        setTimeout(() => {
            bubble.style.transform = 'translateY(-100vh)';
            bubble.style.opacity = '0';
        }, 100);

        // Call the function again after a delay
        setTimeout(() => {
            createBubble(containerId);
        }, Math.random() * 1000 + 1000); // Between 1 and 3 seconds
    }

    // Start creating bubbles for header and footer
    createBubble('#bubble-container-header');
   
   
</script>


</div>



</body>
</html>


