<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            margin: 0;
            padding: 0;
            /* overflow-x: hidden; */
            overflow-y: auto;
            /* height: 100%;
            width: 100%; */
            min-height: 100vh;
            scroll-behavior: smooth;
        }

        #background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: -1;
        }

        .contain {
            position: relative;
            z-index: 1;
            padding-top: 100px;
        }

        .card:hover {
            transform: rotateY(180deg);
        }

        .front-page,
        .back-page {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            border-radius: 15px;
        }

        .front-page {
            background-image: url(image.avif);
            background-size: cover;
            background-position: center;
        }

        .card-info {
            position: absolute;
            bottom: 50px;
            left: 45px;
            color: #fff;
            text-align: 2px 2px 6px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .card-title {
            font-size: 2rem;
            font-weight: bold;
        }

        .card-subtitle {
            font-size: 1.2rem;
            margin-top: 5px;
            color: #0fbcf9;
        }

        .back-page {
            background-color: #1e272e;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: rotateY(180deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .card-content {
            padding: 20px;
            text-align: center;
            max-width: 300px;
        }

        .card-content h3 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .card-description {
            font-size: 1rem;
            margin-bottom: 20px;
            color: #ccc;
            line-height: 1.6;
        }

        .card-button {
            padding: 12px 24px;
            /* font-size: 1rem; */
            color: #fff;
            /* background-color: #0fbcf9; */
            border: none;
            outline: none;
            /* border-radius: 25px; */
            cursor: pointer;
            /* transition: all 0.3s ease; */
            position: relative;
            z-index: 0;
            border-radius: 12px;
        }

        .card-button::after {
            /* background-color: transparent;
            color: #0fbcf9;
            border: 1px solid #0fbcf9; */
            content: "";
            z-index: -1;
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #333;
            left: 0;
            top: 0;
            border-radius: 10px;
        }

        .card-button::before {
            content: "";
            background: linear-gradient(45deg,
                    #FF0000, #FF7300, #FFFB00, #48FF00,
                    #00FFD5, #002BFF, #FF00C8, #FF0000);
            position: absolute;
            top: -2px;
            left: -2px;
            background-size: 600%;
            z-index: -1;
            width: calc(100% + 4px);
            height: calc(100% + 4px);
            filter: blur(8px);
            animation: glowing 20s linear infinite;
            transition: opacity .3s ease-in-out;
            border-radius: 10px;
            opacity: 1;
        }

        @keyframes glowing {
            0% {
                background-position: 0 0;
            }

            50% {
                background-position: 400% 0;
            }

            100% {
                background-position: 0 0;
            }
        }

        .card-button:active::after {
            background: transparent;
        }

        .card-button:active {
            color: #000;
            font-weight: bold;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;

            padding: 1rem 5%;
            box-sizing: border-box;

            background: rgba(255, 255, 255, 0.05);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);

            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: #38bdf8;
            letter-spacing: 1px;
            margin-right: auto;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 2rem;
            /* margin-right: 30px; */

            align-items: center;
            margin: 0;
            padding: 0;
            margin-right: 20px;
        }

        .nav-links li {
            display: flex;
            align-items: center;
        }

        .nav-links li a {
            position: relative;
            font-size: 1.05rem;
            font-weight: 500;
            text-decoration: none;
            color: #e2e8f0;
        }

        .nav-links li a:hover {
            color: #38bdf8;
            text-shadow: 0 0 10px #38bdf8;
        }

        /* .buttons {
            display: flex;
        } */

        .buttons {
            display: flex;
            align-items: center;
            margin: 0;
        }

        .button {
            padding: 0.5rem 1.5rem;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1rem;
            background: #38bdf8;
            color: #0f172a;
            box-shadow: 0 0 15px #38bdf8;
            border: none;
            cursor: pointer;
            transition: 0.3s;

            height: 40px;
            /* match icon height */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .button:hover {
            background: #0aa9f3;
            box-shadow: 0 0 25px #0aa9f3;
        }

        #progress {
            /* background-color: #03cc65; */
            position: fixed;
            bottom: 20px;
            right: 10px;
            height: 70px;
            width: 70px;
            display: none;
            place-items: center;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;

            z-index: 9999;
        }

        #progress-value {
            display: block;
            height: calc(100% - 15px);
            width: calc(100% - 15px);
            background-color: #ffffff;
            border-radius: 50%;
            display: grid;
            place-items: center;
            font-size: 35px;
            color: #001a2e;
        }

        .logo {
            width: 120px;
        }

        /* .user-pic {
            width: 40px;
            border-radius: 50%;
            cursor: pointer;
            margin-left: 30px;

            color: #0f172a;
            box-shadow: 0 0 15px #38bdf8;
            border: none;
            transition: 0.3s;
        } */

        .user-pic {
            width: 40px;
            height: 40px;
            /* keep same height */
            border-radius: 50%;
            cursor: pointer;
            margin-left: 20px;
            margin-right: 15px;
            /* spacing before login */
            display: block;

            color: #0f172a;
            box-shadow: 0 0 15px #38bdf8;
            border: none;
            transition: 0.3s;
        }

        /* .sub-menu-wrap {
            position: absolute;
            top: 100%;
            right: 10%;
            width: 320px;
            max-height: 0px;
            overflow: hidden;
            transition: max-height 0.5s;
        }

        .sub-menu-wrap.open-menu {
            max-height: 400px;
        }

        .sub-menu {
            background: #fff;
            padding: 20px;
            margin: 10px;
        } */

        .sub-menu-wrap {
            position: absolute;
            top: 100%;
            right: 5%;
            width: 260px;
            /* smaller width */
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease;

            z-index: 10000;
        }

        .sub-menu-wrap.open-menu {
            max-height: 350px;
            /* smaller height */
        }

        .sub-menu {
            background: rgba(15, 23, 42, 0.85);
            /* darker and less transparent */
            backdrop-filter: blur(25px);
            -webkit-backdrop-filter: blur(25px);

            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 20px;

            padding: 15px;
            margin: 10px;

            /* box-shadow: 0 8px 32px rgba(0, 0, 0, 0.35); */
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        /* .user-info h3 {
            font-weight: 500;
            font-size: 150%;
        }

        .user-info img {
            width: 60px;
            border-radius: 50%;
            margin-right: 15px;
        } */

        .user-info h3 {
            font-weight: 500;
            font-size: 1.2rem;
            color: white;
        }

        .user-info img {
            width: 50px;
            border-radius: 50%;
            margin-right: 12px;
        }

        /* .sub-menu hr {
            border: 0;
            height: 1px;
            width: 100%;
            background: #ccc;
            margin: 15px 0 10px;
        } */

        .sub-menu hr {
            border: 0;
            height: 1px;
            background: rgba(255, 255, 255, 0.15);
        }

        /* .sub-menu-link {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: #525252;
            margin: 12px 0;
        } */

        .sub-menu-link {
            display: flex;
            align-items: center;
            /* vertically center everything */
            justify-content: space-between;

            text-decoration: none;
            color: #e2e8f0;

            padding: 10px 12px;
            border-radius: 12px;

            transition: 0.3s ease;
        }

        .sub-menu-link-left {
            display: flex;
            align-items: center;
        }

        .sub-menu-link p {
            margin: 0;
            /* remove default p spacing */
            font-size: 15px;
        }


        /* .sub-menu-link p{
            width: 100%;
        } */

        /* .sub-menu-link img{
            width: 40px;
            background: #e5e5e5;
            border-radius: 50%;
            padding: 8px;
            margin-right: 15px;
        }

        .sub-menu-link span{
            font-size: 22px;
            transition: transform 0.5s;
        } */

        .sub-menu-link img {
            width: 38px;
            height: 38px;
            padding: 8px;
            margin-right: 12px;

            background: rgba(255, 255, 255, 0.9);
            /* brighter background */
            border: 1px solid rgba(255, 255, 255, 0.2);

            border-radius: 50%;
            object-fit: contain;

            box-shadow: 0 0 10px rgba(255, 255, 255, 0.15);
        }

        .sub-menu-link:hover img {
            background: rgba(56, 189, 248, 0.25);
            transform: scale(1.08);
            transition: 0.3s ease;
        }

        .sub-menu-link span {
            font-size: 18px;
            transition: transform 0.3s ease;
        }

        .sub-menu-link:hover span {
            transform: translateX(5px);
        }

        .sub-menu-link:hover p {
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div>

    <nav>
        <div class="logo">CSSnippets</div>
        <ul class="nav-links">
            <li><a href="#">home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Protfolio</a></li>
            <li><a href="#">About</a></li>
        </ul>

        <div class="search-bar mx-4">
    <input type="text" class="form-control bg-transparent border-0 text-white" 
           placeholder="Search snippets...">
</div>

        <img src="images/user.png" class="user-pic" onclick="toggleMenu()">

        <div class="sub-menu-wrap" id="subMenu">
            <div class="sub-menu">
                <div class="user-info">
                    <img src="images/user.png">
                    <h3>James Aldrino</h3>
                </div>
                <hr style="color: white;">

                <a href="#" class="sub-menu-link">
                    <img src="images/profile.png">
                    <p>Edit Profile</p>
                    <span>></span>
                </a>
                <a href="#" class="sub-menu-link">
                    <img src="images/setting.png">
                    <p>Settings & Privacy</p>
                    <span>></span>
                </a>
                <a href="#" class="sub-menu-link">
                    <img src="images/help.png">
                    <p>Help & Support</p>
                    <span>></span>
                </a>
                <a href="#" class="sub-menu-link">
                    <img src="images/logout.png">
                    <p>Logout</p>
                    <span>></span>
                </a>
            </div>
        </div>

        

        <div class="buttons">
            <button class="button">Login</button>
        </div>
    </nav>


    <div id="background"></div>

    <div class="contain">

        
        <div class="container mb-5 p-4 rounded"
            style="background-color: rgba(255, 255, 255, 0); backdrop-filter: blur(30px); color: white; border-top: 1px solid rgba(255,255,255,0.5); border-left: 1px solid rgba(255,255,255,0.4); box-shadow: 3px 3px 3px rgba(0,0,0,0.089);">
            <section class="hero text-center py-5">
    <div class="container">
        <h1 class="display-3 fw-bold mb-3">Beautiful CSS Snippets</h1>
        <p class="lead mb-4">Handpicked, modern, and ready-to-use CSS components</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="#" class="btn btn-primary btn-lg px-5">Browse Snippets</a>
            <a href="#" class="btn btn-outline-light btn-lg px-5">Submit Yours</a>
        </div>
        
        <div class="mt-5">
            <span class="badge bg-success me-2">500+ Snippets</span>
            <span class="badge bg-info">Updated Daily</span>
        </div>
    </div>
</section>
        </div>


        <div class="container mb-5 p-4 rounded"
            style="background-color: rgba(255, 255, 255, 0); backdrop-filter: blur(30px); color: white; border-top: 1px solid rgba(255,255,255,0.5); border-left: 1px solid rgba(255,255,255,0.4); box-shadow: 3px 3px 3px rgba(0,0,0,0.089);">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur repudiandae repellat nemo nam quae
                eveniet obcaecati debitis voluptas. Dignissimos quo id, ducimus recusandae vel eaque quisquam tenetur
                voluptatem. Obcaecati eius, quam nihil consequatur laborum, provident tenetur doloremque ipsa sequi
                temporibus amet mollitia a maiores suscipit saepe explicabo. Et inventore dolorum, minus expedita ut
                fugiat adipisci natus earum quibusdam saepe hic dolorem a ex quo nostrum excepturi distinctio beatae sit
                nesciunt sed ducimus dolore deserunt! Expedita commodi deserunt esse, a fugiat repellat cum in quas,
                accusamus quo quos debitis sint laborum reprehenderit voluptate molestiae odit dolores fuga totam
                temporibus eligendi ipsum et. Nesciunt in pariatur perferendis eligendi veritatis tenetur vitae ab sed,
                nemo corporis inventore eum laborum tempora harum nam molestiae non esse voluptatibus. Earum amet quam
                architecto est maiores vel corporis, ea doloremque enim, assumenda obcaecati in aliquid ad nobis quia
                tenetur repellendus corrupti necessitatibus culpa illo rerum. Excepturi iste soluta nobis earum ex
                ratione aspernatur impedit pariatur delectus voluptate illum inventore vero perferendis, harum nam cum
                odit deserunt repellat. Repellendus soluta assumenda aspernatur illum dolorem sed ratione dolor et
                reprehenderit necessitatibus odio nemo rem odit perspiciatis alias fugiat perferendis, libero officia
                tenetur fuga quia ad voluptas. Necessitatibus, nemo sequi.</p>
        </div>

        <div class="container">
            <div class="d-flex justify-contant-center gap-4 flex-wrap">

                <div class="wrapper">
                    <div class="card"
                        style="width: 360px; height: 530px; transform-style: preserve-3d; transition: transform .8s ease-in-out; cursor: pointer; border: 1px solid #ccc; box-shadow: 5px 5px 10px rgba(0,0,0,0.2), -5px -5px 10px rgba(0,0,0,0.05); border-radius: 15px;">
                        <div class="front-page">
                            <div class="card-info">
                                <h2 class="card-title">Card Title</h2>
                                <p class="card-subtitle">Card Subtitle</p>
                            </div>
                        </div>

                        <div class="back-page">
                            <div class="card-content">
                                <h3>Jessica jenner</h3>
                                <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptas,
                                    voluptate.</p>
                                <button class="card-button">Click Me</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="wrapper">
                    <div class="card"
                        style="width: 360px; height: 530px; transform-style: preserve-3d; transition: transform .8s ease-in-out; cursor: pointer; border: 1px solid #ccc; box-shadow: 5px 5px 10px rgba(0,0,0,0.2), -5px -5px 10px rgba(0,0,0,0.05); border-radius: 15px;">
                        <div class="front-page">
                            <div class="card-info">
                                <h2 class="card-title">Card Title</h2>
                                <p class="card-subtitle">Card Subtitle</p>
                            </div>
                        </div>

                        <div class="back-page">
                            <div class="card-content">
                                <h3>Jessica jenner</h3>
                                <p class="card-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Voluptas,
                                    voluptate.</p>
                                <button class="card-button">Click Me</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>


        <div class="container mb-5 mt-5 p-4 rounded"
            style="background-color: rgba(255, 255, 255, 0); backdrop-filter: blur(30px); color: white; border-top: 1px solid rgba(255,255,255,0.5); border-left: 1px solid rgba(255,255,255,0.4); box-shadow: 3px 3px 3px rgba(0,0,0,0.089);">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur repudiandae repellat nemo nam quae
                eveniet obcaecati debitis voluptas. Dignissimos quo id, ducimus recusandae vel eaque quisquam tenetur
                voluptatem. Obcaecati eius, quam nihil consequatur laborum, provident tenetur doloremque ipsa sequi
                temporibus amet mollitia a maiores suscipit saepe explicabo. Et inventore dolorum, minus expedita ut
                fugiat adipisci natus earum quibusdam saepe hic dolorem a ex quo nostrum excepturi distinctio beatae sit
                nesciunt sed ducimus dolore deserunt! Expedita commodi deserunt esse, a fugiat repellat cum in quas,
                accusamus quo quos debitis sint laborum reprehenderit voluptate molestiae odit dolores fuga totam
                temporibus eligendi ipsum et. Nesciunt in pariatur perferendis eligendi veritatis tenetur vitae ab sed,
                nemo corporis inventore eum laborum tempora harum nam molestiae non esse voluptatibus. Earum amet quam
                architecto est maiores vel corporis, ea doloremque enim, assumenda obcaecati in aliquid ad nobis quia
                tenetur repellendus corrupti necessitatibus culpa illo rerum. Excepturi iste soluta nobis earum ex
                ratione aspernatur impedit pariatur delectus voluptate illum inventore vero perferendis, harum nam cum
                odit deserunt repellat. Repellendus soluta assumenda aspernatur illum dolorem sed ratione dolor et
                reprehenderit necessitatibus odio nemo rem odit perspiciatis alias fugiat perferendis, libero officia
                tenetur fuga quia ad voluptas. Necessitatibus, nemo sequi.</p>
        </div>
    </div>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>

    <script>
        let calcScrollValue = () => {
            let scrollProgress = document.getElementById("progress");
            let progressValue = document.getElementById("progress-value");
            let pos = document.documentElement.scrollTop;
            let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            let scrollValue = Math.round((pos * 100) / calcHeight);
            if (pos > 100) {
                scrollProgress.style.display = "grid";
            } else {
                scrollProgress.style.display = "none";
            }
            scrollProgress.addEventListener("click", () => {
                document.documentElement.scrollTop = 0;
            });
            scrollProgress.style.background = `conic-gradient(#03cc65 ${scrollValue}%, #d7d7d7 ${scrollValue}%)`;
        };


        window.onscroll = calcScrollValue;
        window.onload = calcScrollValue;
    </script>

    <script src="https://cdn.jsdelivr.net/npm/three@0.134.0/build/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@0.5.24/dist/vanta.rings.min.js"></script>


    <script>
        VANTA.RINGS({
            el: "#background",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>