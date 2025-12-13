</html><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zyuzyu Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
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
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <form class="form">
        <h2 class="title">Contact</h2>
        <div class="flex">
            <label>
                <span>Name</span>
                <input placeholder="Joana Marie" type="text" class="input">
            </label>

            <label>
                <span>Surname</span>
                <input placeholder="Tumabang" type="text" class="input">
            </label>  
        </div>

        <label>
            <span>Email</span>
            <input placeholder="skyiana@gmail.com" type="email" class="input">
        </label>

        <label>
            <span>Message</span>
            <textarea placeholder="Message" type="text" class="input" row = "5"></textarea>
        </label>

        <button class="submit">Submit</button>
    </form>

</body>
</html>