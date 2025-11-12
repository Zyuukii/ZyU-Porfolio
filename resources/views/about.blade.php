<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zyuzyu Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/aboutme.css') }}">
</head>
<body>
    <!-- Header Section -->
    <header id="header">
        <div class="container">
            <div class="nav-bar">
                <div class="logo">
                    <img src="{{ asset ('Images/snow.png') }}" alt="Snow Image" class="header-image">
                </div>

                <div class="nav-links">
                    <nav>
                        <ul>
                            <li><a href="/home">Home</a></li>
                            <li><a href="/about">About Me</a></li>
                            <li><a href="/projects">Projects</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="aboutme">
        <div class="infos">
            <p>
                I’m a third-year Computer Science student at City College of 
                Angeles, aspiring to become a Front-End Developer. 
                I’m currently expanding my knowledge of HTML, CSS, and JavaScript. 
            </p>
            
            <p>
                I’m currently learning React to enhance my ability to create dynamic 
                and reusable components, and exploring UI/UX design to better 
                understand how users interact with interfaces.
            </p>

            <p>
                While I don’t focus on creating visual designs myself, I enjoy 
                transforming UI concepts into functional web pages
            </p>
            
            <h2>Tools & Technologies</h2>

        </div>

        <div class="tools">
            <ul>
                <li><img src="Images/html.png" alt="Html Logo"></li>
                <li><img src="Images/css.png" alt="Css Logo"></li>
                <li><img src="Images/js.png" alt="Javascript Logo"></li>
                <li><img src="Images/figma.png" alt="Figma Logo"></li>
            
            </ul>
        </div>
    </section>

</body>
</html>