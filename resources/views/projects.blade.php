<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zyuzyu Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
</head>

<body>
    <!-- Header Section -->
    <header id="header">
        <div class="container">
            <div class="nav-bar">
                <div class="logo">
                    <img src="{{ asset('Images/snow.png') }}" alt="Snow Image" class="header-image">
                </div>

                <div class="nav-links">
                    <nav>
                        <ul>
                            <li><a href="/home">Home</a></li>
                            <li><a href="/about">About Me</a></li>
                            <li><a href="/projects">Projects</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Projects Section -->
    <section class="projects-section">
        <div>
            <h2 class="project-title">MY PROJECTS</h2>
        </div>

        <div class="projects">
            <div class="project-card1 focus-card">
                <h3 class="project-name">Project example</h3>
                <p class="project-description">A personal project to showcase my skills and projects.</p>
            </div>

            <div class="project-card2 focus-card">
                <h3 class="project-name">Project example</h3>
                <p class="project-description">A personal project to showcase my skills and projects.</p>
            </div>

            <div class="project-card3 focus-card">
                <h3 class="project-name">Project example</h3>
                <p class="project-description">A personal project to showcase my skills and projects.</p>
            </div>

            <div class="project-card4 focus-card">
                <h3 class="project-name">Project example</h3>
                <p class="project-description">A personal project to showcase my skills and projects.</p>
            </div>

        </div>

    </section>



</body>

</html>