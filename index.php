<!DOCTYPE html>
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en"><!--<![endif]-->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Devfest 2023 - GDG Baroda</title>
    <meta name="description" content="GDG Baroda Devfest 2023"/>
    <meta name="author" content="GDG Baroda Team">
    <meta property="og:title" content="GDG Baroda Devfest 2023"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:image:width" content="470"/>
    <meta property="og:image:height" content="246"/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content="Devfest 2023 promotional site for GDG Baroda"/>
    <meta name="twitter:card" content=""/>
    <meta name="twitter:site" content=""/>
    <meta name="twitter:domain" content="https://devfest.gdgbaroda.com/"/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:description" content="GDG Baroda Devfest 2023"/>
    <meta name="twitter:image" content="https://devfest.gdgbaroda.com/"/>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

    <!-- Web Fonts
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Pinyon+Script" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/jquery.webui-popover.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/jquery.fancybox.min.css"/>

    <!-- Favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <script>document.documentElement.className = "js";
        var supportsCssVars = function () {
            var e, t = document.createElement("style");
            return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e
        };
        supportsCssVars() || alert("");
    </script>

</head>
<body class="devfest">
<!--
TODO (@knightkill)
- Hero image change (Done)
- Color change to Google Colors (Partial)
- Logo change (Done)
- Favicon changes (Done)
- Ticket changes
- Social links (done)
- Address change (Done)
- Title update (Done)
- Add Sponsors Marquee
- Add Sponsors Button
- Add confettis on event start (Non-necessary)
- Instamojo integration (Non-necessary)
- Back History (Non-necessary)
-->
<div class="loader">
    <div class="loader__figure"></div>
</div>

<main>

    <!-- Nav and Logo
    ================================================== -->

    <a href="index.php">
        <div class="logo">
            <img src="img/logo.svg" alt="">
        </div>
    </a>

    <a href="#ticket-wrap" class="ticket-link">
        <div class="ticket-button">
            <p>Secure Seats!</p>
        </div>
    </a>
    <div id="ticket-wrap">
        <p>
            Early Birds <em>.........................</em> <span>500 ₹</span><br>
            Phase 1 <em>.....................</em> <span>600 ₹</span><br>
            Phase 2 <em>................</em> <span>700 ₹</span><br>
            Phase 3 <em>.................</em> <span>800 ₹</span>
        </p>
        <a target="_blank" href="https://www.instamojo.com/">get ticket</a>
    </div>

    <div class="content">
        <nav class="menu">
            <a href="#" class="menu__item">Conf
                <div class="empty-space">-</div>
                speakers</a>
            <a href="#" class="menu__item">Rewind</a>
            <a href="#" class="menu__item">Sponsor</a>
            <a href="#" class="menu__item">Schedule</a>
            <a href="#" class="menu__item">Team</a>
        </nav>
        <div class="event-time">
            <div class="section">
                <div class="hero-main-title">Welcome to DevFest Baroda 2023</div>
                <div class="hero-title">Nov. 26</div>
                <div class="hero-subtitle">
                    <span>2</span>
                    <span>0</span>
                    <span>2</span>
                    <span>3</span>
                </div>
            </div>
            <ul class="countdown">
                <li>
                    <span class="days">00</span>
                    <p class="days_ref">days</p>
                </li>
                <li>
                    <span class="hours">00</span>
                    <p class="hours_ref">hours</p>
                </li>
                <li>
                    <span class="minutes">00</span>
                    <p class="minutes_ref">minutes</p>
                </li>
                <li>
                    <span class="seconds">00</span>
                    <p class="seconds_ref">seconds</p>
                </li>
            </ul>
            <div class="speaker-btn">
                <a target="_blank" class="btn btn-dark" href="https://sessionize.com/">Apply to be a Speaker!</a>
            </div>
        </div>
        <?php include "templates/scene.php" ?>
    </div>

    <!-- Primary Page Layout
    ================================================== -->

    <div class="content content--reveal">
        <button class="content__close"> </button>
        <?php include 'sections/speakers.php' ?>
        <?php include "sections/rewind.php" ?>
        <?php include "sections/sponsors.php" ?>
        <?php include "sections/schedule.php" ?>
        <?php include "sections/team.php" ?>
    </div>

    <div class="location-fixed">
        <a target="_blank" href="https://maps.app.goo.gl/dugdPgnXV8aHLeQc7">Sayaji Hotel, Vadodara</a>
    </div>

    <?php include 'templates/socials.php' ?>

</main>


<!-- JAVASCRIPT
================================================== -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/gradient-animation.js"></script>
<script src="js/contact.js"></script>
<script src="js/custom.js"></script>
<!-- End Document
================================================== -->
</body>
</html>