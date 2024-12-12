<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alyssify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="icon" href="images/logo.png">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
        }

        body {
            background: black;
            color: white;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: black;
            color: white;
            border-bottom: 2px solid #FFEB3B;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            padding: 1rem 2rem;
        }

        .navbar-brand {
            color: white;
            transition: none;
        }

        .navbar-brand span {
            background: linear-gradient(90deg, #FFEB3B, #9C27B0);
            background-clip: text;
            color: transparent;
        }

        .navbar-brand:hover {
            color: white;
        }

        .nav-link {
            color: white;
            font-weight: 700;
            position: relative;
            transition: color 0.3s ease, text-decoration 0.3s ease;
        }

        .nav-link:hover {
            background: linear-gradient(90deg, #FFEB3B, #9C27B0);
            background-clip: text;
            color: transparent;
            transform: scale(1.1);
        }

        .home {
            min-height: 100vh;
            padding: 0 15%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            flex-wrap: wrap;
            margin-top: 0px;
        }

        .homeContent {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            text-align: left;
            flex: 1;
            margin-top: 0;
            padding-top: 0px;
        }

        .homeContent h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-top: 1.5rem;
            line-height: 1;
        }

        .homeContent h3 {
            margin: 1rem 0;
            font-size: 2rem;
        }

        .homeContent h1 span,
        .homeContent h3 span {
            background: linear-gradient(90deg, #FFEB3B, #9C27B0);
            background-clip: text;
            color: transparent;
        }

        .homeImg {
            flex: 1;
        }

        .homeImg img {
            width: 25vw;
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(255, 235, 59, 0.6), 0 0 25px rgba(156, 39, 176, 0.6), 0 0 35px rgba(255, 235, 59, 0.8), 0 0 45px rgba(156, 39, 176, 0.8);
            transition: 0.4s ease-in-out;
        }

        .homeImg img:hover {
            box-shadow: 0 0 25px #FFEB3B,
                0 0 50px #FFEB3B,
                0 0 100px #FFEB3B;
        }

        .typingEffect {
            display: inline-block;
            overflow: hidden;
            white-space: nowrap;
            border-right: 2px solid #000;
            animation: typing 3s steps(12, end) infinite, blink-caret 0.5s step-end infinite;
        }

        @keyframes typing {
            0% {
                width: 0;
            }

            50% {
                width: 12ch;
            }

            100% {
                width: 0;
            }
        }

        @keyframes blink-caret {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: black;
            }
        }

        .socialIcons a {
            text-decoration: none;
        }

        .socialIcons a i {
            font-size: 1.2rem;
            background: linear-gradient(90deg, #FFEB3B, #9C27B0);
            background-clip: text;
            color: transparent;
            display: inline-block;
            transition: 0.3s ease-in-out;
            margin: 0 5px;
        }

        .socialIcons a i:hover {
            color: white;
            transform: scale(1.2)translate(-5px);
        }

        .about {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
            background-color: #131313;
            padding: 5rem 2rem;
        }

        .aboutImg img {
            width: 35vw;
            height: auto;
            overflow: hidden;
            box-shadow: none;
            display: block;
            margin: 0 auto;
            background: none;
        }

        .aboutContent h2 {
            font-size: 4.5rem;
            text-align: left;
        }

        .aboutContent h2 span {
            background: linear-gradient(90deg, #FFEB3B, #9C27B0);
            background-clip: text;
            color: transparent;
        }

        .aboutContent p {
            font-size: 1rem;
        }

        .projects {
            padding: 5rem 2rem;
            background-color: #131313;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 2rem;
        }

        .cardProject {
            background-color: #131313;
            transition: transform 0.3s ease;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            border: 2px solid #FFEB3B;
            border-radius: 1.5rem;
            padding: 2rem;
            gap: 1rem;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 3rem;
        }

        .cardProject img {
            max-width: 100%;
            height: 200px;
            border-radius: 1rem;
            object-fit: cover;
        }

        .cardProject:hover {
            box-shadow: 0 0 25px rgba(255, 235, 59, 1),
                0 0 50px rgba(156, 39, 176, 1),
                0 0 100px rgba(156, 39, 176, 1);
            transform: scale(1.05);

        }

        .cardTitle {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .cardText {
            font-size: 1rem;
            margin-bottom: 1.2rem;
        }

        .btn-primary {
            background-color: #d6c527;
            border: none;
            font-size: 1rem;
            font-weight: 700;
            padding: 0.8rem 1.5rem;
            border-radius: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #9C27B0;
            color: white;
        }

        .footer {
            background-color: #080808;
            color: var(--text-color);
            padding: 50px 0;
        }

        .footer .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .footer .socialIcons {
            margin-bottom: 5px;
        }

        .footer .socialIcons a i {
            color: #FFEB3B;
            font-size: 1.5rem;
            margin: 0 10px;
            transition: transform 0.3s ease, color 0.3s ease;
            background: linear-gradient(90deg, #FFEB3B, #9C27B0);
            background-clip: text;
            color: transparent;
        }

        .footer .socialIcons a i:hover {
            transform: scale(1.2);
            color: #9C27B0;
        }

        .footer ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 30px;
            margin: 0;
            padding: 0;
        }

        .footer ul li {
            display: inline-block;
        }

        .footer ul li a {
            color: var(--text-color);
            border-bottom: 2px solid transparent;
            font-size: 1rem;
            transition: color 0.3s ease, border-bottom 0.3s ease;
            text-decoration: none;
        }

        .footer ul li a:hover {
            color: var(--main-color);
            background: linear-gradient(90deg, #FFEB3B, #9C27B0);
            background-clip: text;
            color: transparent;
        }

        .footer .copyright {
            text-align: center;
            margin-top: 20px;
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.7);
        }

        @media (max-width: 768px) {
            .home {
                padding: 0 5%;
            }

            .homeContent {
                text-align: center;
            }

            .homeContent h1 {
                font-size: 2.5rem;
            }

            .homeContent h3 {
                font-size: 1.5rem;
            }

            .homeImg img {
                width: 48vw;
            }

            .navbar {
                padding: 1rem;
            }

            .navbar-nav {
                text-align: center;
            }

            .about {
                flex-direction: column;
                text-align: center;
            }

            .aboutImg img {
                width: 70vw;
            }

            .aboutContent h2 {
                font-size: 3rem;
            }

            .projects {
                flex-direction: column;
            }

            .cardProject {
                width: 100%;
                padding: 1rem;
            }

            .footer ul {
                flex-direction: column;
            }
        }

        @media (max-width: 480px) {
            .homeContent h1 {
                font-size: 2rem;
            }

            .homeContent h3 {
                font-size: 1.2rem;
            }

            .homeImg img {
                width: 70vw;
            }

            .aboutContent h2 {
                font-size: 2.5rem;
            }

            .cardProject {
                padding: 1rem;
                text-align: center;
            }

            .cardProject img {
                height: 150px;
            }

            .footer .socialIcons a i {
                font-size: 1rem;
            }

            .footer ul {
                gap: 20px;
            }
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">Alyssa<span> Cato</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="home text-center" id="home">
        <div class="container" style="margin-top: 70px;">
            <div class="row d-flex align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="homeContent">
                        <h1>Hi, I am <span>Alyssa</span></h1>
                        <h3><span class="typingEffect">BSIT student</span></h3>

                        <div class="socialIcons">
                            <a href="https://github.com/mrllalyssacto/mrllalyssacto.github.io.git" target="_blank"
                                alt="Github Icon">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://www.facebook.com/mariellealyssa.cato" target="_blank">
                                <i class="fab fa-facebook" alt="Facebook Icon"></i>
                            </a>
                            <a href="https://www.instagram.com/mrllalyssacto">
                                <i class="fab fa-instagram" alt="Instagram Icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 mb-4">
                    <div class="homeImg mb-4">
                        <img src="images/profile.png" alt="Profile" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about" id="about">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center text-center">
                <div class="col-lg-6 col-md-12 mb-4 d-flex justify-content-center">
                    <div class="aboutImg d-flex justify-content-center">
                        <img src="images/about2.png" alt="About" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 d-flex justify-content-center">
                    <div class="aboutContent text-center text-lg-justify">
                        <h2 class="mb-4">About<span> Me</span></h2>
                        <p>Hi! I’m Marielle Alyssa L. Cato, a junior student at PUPSTC. I’m exploring and learning
                            more
                            about programming languages. I enjoy discovering new technologies and improving my
                            skills.
                            I’m passionate about improving my skills and using them to work on real-world projects.
                            I’m excited to take on challenges and work on projects. I look forward to growing as a
                            developer.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="projects" id="projects">
        <div class="container">
            <div class="aboutContent mb-5 text-center">
                <h2>Pro<span>jects</span></h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="cardProject">
                        <img src="images/island.jpg" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="cardTitle"><b>Core Memories</b></h5>
                            <p class="cardText">These islands represent the happiest, saddest, and most exciting moments
                                that built who I am.</p>
                            <a href="A08/index.php" class="btn btn-primary">Project 1</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="footer">
                <div class="content">
                    <div class="socialIcons">
                        <a href="https://github.com/mrllalyssacto/mrllalyssacto.github.io.git" target="_blank"
                            alt="Github Icon">
                            <i class="fab fa-github"></i>
                            <a href="https://www.facebook.com/mariellealyssa.cato" target="_blank">
                                <i class="fab fa-facebook" alt="Facebook Icon"></i>
                                <a href="https://www.instagram.com/mrllalyssacto" target="_blank">
                                    <i class="fab fa-instagram" alt="Instagram Icon"></i>
                                </a>
                    </div>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#projects">Projects</a></li>
                    </ul>
                    <p class="copyright">
                        &copy; 2024 Alyssify. All Rights Reserved.
                    </p>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous">
                </script>
</body>

</html>