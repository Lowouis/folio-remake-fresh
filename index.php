<?php
$menu = ["ABOUT", "WORKS","PERKS","CONTACT"];
$logo = ["Javascript", "HTML","CSS","C","Python", "Php", "Twig","Java"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Louis'dev</title>
    <link rel="stylesheet" type="text/css" href="styles/index.css">
    <script src="https://kit.fontawesome.com/6d9cc71036.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="top">
    <nav id="navbar">
        <?php for($i=0;$i<sizeof($menu);$i++) : ?>
            <a class="nava" href="#<?= strtolower($menu[$i]) ?>"><?= $menu[$i]?></a>
        <?php endfor ?>
    </nav>
    <a id="resume" href="data/files/cv.pdf"  target="_blank" class="fade btn hover">.resume{}</a>
</div>


<div class="br-bar"></div>
<a href="mailto:louisguritapro@gmail.com" class="mail">louisguritapro@gmail.com</a>
<div class="bl-bar"></div>
<div class="logos">
    <a href="https://www.instagram.com/_glouis_/?hl=fr" target="_blank"><i class="logo fa-brands fa-instagram"></i></a>
    <a href="https://github.com/Lowouis" target="_blank"><i class="logo fa-brands fa-github"></i></a>
    <a href="https://www.linkedin.com/in/louisgurita/" target="_blank"><i class="logo fa-brands fa-linkedin"></i></a>
</div>
<a class="gh-btn btn hover fade fixup" href="#start"><i class="fa-solid fa-arrow-up"></i></a>



<section class="start" id="start" >
    <h5>Hi there, my name is Louis</h5>
    <h1>LOUIS GURITA</h1>
    <h4>Software Engineer, Front end & Back end Developer.</h4>
    <p>I’m a software engineer specializing in building (and occasionally designing)
        exceptional digital experiences. Currently, I’m focused on building accessible,
        human-centered products at Upstatement.</p>

    <a class="gh-btn btn hover fade "  href="#about"><i class="fa-solid fa-arrow-down"></i></a>
</section>


<section id="about" class="cat">
    <h1><a class="c-number">01.</a>About me</h1>
    <div class="grid-ntn">
        <article>
            <p>I’m a software engineer specializing in building (and occasionally designing)
                exceptional digital experiences. Currently, I’m focused on building accessible,
                human-centered products at Upstatement.</p>
            <p>I’m a software engineer specializing in building (and occasionally designing)
                exceptional digital experiences. Currently, I’m focused on building accessible,
                human-centered products at Upstatement.</p>
        </article>
        <img data-tilt data-tilt-max-glare=".5" id="pp" src="data/img/pp.png" alt="picture profil">
    </div>
</section>

<section id="works" class="cat">
    <h1><a class="c-number">02.</a>Works</h1>
    <div class="grid-1-4">
        <nav>
            <a class="fade star">A* Algorithm</a>
            <a class="fade">A* Algorithm</a>
            <a class="fade">A* Algorithm</a>
            <a class="fade">A* Algorithm</a>
        </nav>
        <div class="layers">
            <article class="star content">
                <h2>A* Solver Algorithm</h2>
                <h3>2021</h3>
                <p>Worked with a team of three designers to build a marketing website and e-commerce
                    platform for blistabloc, an ambitious startup originating from Northeastern
                    Helped solidify a brand direction for blistabloc that spans both packaging and web
                    Interfaced with clients on a weekly basis, providing technological expertise
                </p>
                <div class="add">
                    <a  href="https://github.com/Lowouis/ricochet-robot" target=”_blank” class="fade btn hover">Watch on github</a>
                    <a target=”_blank” href="data/files/astarreport_fr.pdf" class="btn fade hover"> PDF Report</a>
                </div>

            </article>
            <article class="d-none nim content">
                <h2>A* Solver Algorithm</h2>
                <h3>2022</h3>
                <p>Worked with a team of three designers to build a marketing website and e-commerce
                    platform for blistabloc, an ambitious startup originating from Northeastern
                    Helped solidify a brand direction for blistabloc that spans both packaging and web
                    Interfaced with clients on a weekly basis, providing technological expertise
                </p>
                <div class="add">
                    <a  href="https://github.com/Lowouis/ricochet-robot" target=”_blank” class="fade btn hover">Watch on github</a>
                    <a target=”_blank” href="data/files/astarreport_fr.pdf" class="btn fade hover"> PDF Report</a>
                </div>

            </article>
        </div>


</section>

<section id="perks" class="cat">
    <h1><a class="c-number">03.</a>Perks</h1>
    <div class="perks-ord">
        <?php for($i = 0 ; $i < sizeof($logo) ; $i++): ?>
        <div data-tilt  class="gh-btn btn hover fade perk-style <?= $logo[$i] ?>">
            <h3><?= $logo[$i] ?></h3>
        </div>
        <?php endfor ?>


    </div>
</section>


<section id="contact" class="cat">
    <h1><a class="c-number">04.</a>What's next </h1>
    <p>Although I’m not currently looking for any new opportunities,
        my inbox is always open. Whether you have a question or just want to say hi, I’ll try my best to get back to you!</p>
    <a class="btn fade hover" href=""mailto:louisguritapro@gmail.com">Get in touch</a>
</section>



</body>
<footer>
<p>Designed & Built by Louis Gurita</p>
</footer>

<script type="text/javascript" src="scripts/vanilla-tilt.js"></script>
<script type="text/javascript" src="scripts/init.js"></script>
</html>