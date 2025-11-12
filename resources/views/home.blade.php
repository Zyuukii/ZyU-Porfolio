<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Zyuzyu Portfolio</title>
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

    <!-- Home Section -->
    <section class = "greetings">
        <div class="container">
            <h1 class="greet">GREETINGS!</h1>
            <p>I’m Zuchery Yuki Buentiempo aspiring to be a 
                <span class="front">FRONT-END</span> Developer
            </p>
        </div>

        <div class="links">
            
                <a href="projects" class="btn">View My Projects</a> 

            <div class="social-links">
                <a class="fb" href="https://www.facebook.com/zyuzyuuu" target="facebook.com">
                    <img src="Images/facebook.png" alt="Facebook Logo" class="fb-logo">
                </a>

                <a class="git" href="http://github.com/Zyuukii" target="github.com">
                    <img src="Images/github.png" alt="Facebook Logo" class="git-logo">
                </a>

                <a class="tiktok" href="https://www.tiktok.com/@xzuch.y" target="tiktok.com">
                    <img src="Images/tiktok.png" alt="Facebook Logo" class="tk-logo">
                </a>

                 <a class="insta" href="https://www.instagram.com/zyuuuki/" target="instagram.com">
                    <img src="Images/instagram.png" alt="Facebook Logo" class="tk-logo">
                </a>
                
            </div>
        </div>
    </section>


</body>
</html>

<!-- Delete the welcome blade php -->
<!-- Type in the terminal powershell: php artisan route:list -->