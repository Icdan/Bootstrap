<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
    integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous" title="day">
    <link id="style1" rel="stylesheet" href="something.css" title="day">

    <title>Imperium of Man</title>
    <link rel="stylesheet" href="test.css" type="text/css">
</head>
<body onload="setcss()">
<div id="wrapper">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Homepage <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Races
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink1">
                        <a class="dropdown-item" href="testman.php">Man</a>
                        <a class="dropdown-item" href="testtau.php">Tau</a>
                        <a class="dropdown-item" href="testeldar.php">Eldar</a>
                        <a class="dropdown-item" href="testorks.php">Orks</a>
                        <a class="dropdown-item" href="testnecrons.php">Necrons</a>
                        <a class="dropdown-item" href="testctan.php">C'tan</a>
                        <a class="dropdown-item" href="testtyranid.php">Tyranids</a>
                        <a class="dropdown-item" href="testdaemon.php">Daemon</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testemperor.php">God-Emperor of Mankind</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Space Marine Legions
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <a class="dropdown-item" href="testprimarchs.php">Primarchs</a>
                        <a class="dropdown-item" href="testmarinesloy.php">Loyal Legions</a>
                        <a class="dropdown-item" href="testmarineschaos.php">Chaos Legions</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testwarp.php">The Warp</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="testchaos.php">Chaos</a>
                </li>
            </ul>
            <div id="searchbar">
                <script>
                    (function() {
                        var cx = '015081805999369540557:hhnzjdbe-58';
                        var gcse = document.createElement('script');
                        gcse.type = 'text/javascript';
                        gcse.async = true;
                        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                        var s = document.getElementsByTagName('script')[0];
                        s.parentNode.insertBefore(gcse, s);
                    })();
                </script>
                <gcse:search></gcse:search>
            </div>
            <div class="ml-auto">
                <button type="button" class="btn btn-outline-primary" onclick="toggle()">Night mode</button>
            </div>
        </div>
    </nav>
</div>
<div id="intro">
    <img id="nightModeMan" class="mx-auto mt-2 intro-img" src="testimg/Aquila.png">
    <h1>Imperium of Man</h1>
    <p id="intro-p" class="mx-auto ca blockquote"> "The Emperor protects."
    </p>
    <p class="mx-5">
        The Imperium of Man is a galaxy-spanning interstellar human empire, the ultimate authority for the majority
        of the human race in the Milky Way Galaxy in the late 41st Millennium A.D. It is ruled by the living god who
        is known as the Emperor of Mankind. However, there are other humanoid species classified as Imperial
        citizens, mainly mutant offshoots of genetic base-line humans who are known as Abhumans and include such
        human sub-races as the Ogryns, Ratlings and Squats.
        <br><br>
        The founder and ruler of the Imperium is the god-like Emperor of Mankind, the most powerful human psyker
        ever born. The Emperor founded the Imperium over 10,000 Terran years ago in the late 30th Millennium during
        the Unification Wars on Old Earth following the terrible period in human history known as the Age of Strife.
        The Emperor continues, at least nominally, to rule the Imperium as both its political master and its primary
        religious figure. However, His badly damaged body is interred within the cybernetic life support mechanisms
        of the arcane device known as the Golden Throne following His mortal wounding during the ancient
        interstellar civil war of the Horus Heresy. Because of this terrible fate, the Emperor is incapable of
        interacting with others on a day-to-day basis and has left the basic governance of His Imperium to the
        Senatorum Imperialis, an oligarchic ruling council of the most powerful noble lords and Adepts in the
        galaxy. The Senatorum Imperialis is currently led by the Emperor's genetic son, the Primarch Roboute
        Guilliman, who chairs the council and directs Imperial policy as the Lord Commander of the Imperium.
        <br><br>
        The Imperium of Man is a war-torn empire, teetering on the brink of collapse. For 10,000 Terran years it has
        been ruled by the deathless Emperor, a being of almost limitless psychic power, to whom thousands of souls
        are sacrificed daily. The peoples of the Imperium live in a place where daemons are real, mutation is
        frequent and death is a constant companion. To be alive in the late 41st Millennium is to know that the
        universe is a terrifying and hostile place. It is a place where you are but one amongst billions and, no
        matter how heroic your death, you will not be missed. A truly vast domain, the Imperium is spread amongst
        the many stars of the galaxy. Its territories encompass untold millions of stars and countless more human
        lives. In its name, terrible wars are fought and desperate sacrifices made, yet even this river of carnage
        and blood is a small price to pay, for the Imperium is the guardian of Mankind. Were it to pass into
        nothingness, so too would the human race, destroyed by enemies uncountable, to the braying laughter of the
        Dark Gods.
        <br><br>
        The Imperium is the largest and currently most powerful political entity in the galaxy, consisting of at
        least 1,000,000 human-settled worlds dispersed across most of the Milky Way Galaxy. Consequently, an
        Imperial planet might be separated from its closest neighbour by hundreds or even thousands of light years.
        As a stellar empire, the size of the Imperium cannot be measured in terms of contiguous territory, but only
        in the number of planetary systems under its control. However, most humans in the galaxy have little
        day-to-day contact with the government of the Imperium unless they serve in one of its Adepta or run afoul
        of its various protectors, such as the Inquisition or the Adeptus Arbites.
        <br><br>
        The Imperium is primarily an interstellar tribute empire, allowing its member worlds to largely govern
        themselves as long as they recognise the authority of the Emperor and His servants and support the state
        religion, the Imperial Cult, which holds the Emperor to be the one, true God of Mankind. Every world of the
        Imperium must also pay the Imperial taxes levied on them in the form of men and materiel that is known as
        the Imperial Tithe. These resources go to the service of the Astra Militarum and the Imperial Navy, the
        armed forces which keep the Imperium united and safe. The Imperial Tithe supports the overall economy of the
        Imperium by redistributing resources where needed, usually to shore up one region of the Imperium where
        conflict is raging by drawing resources from more peaceful sectors.
        <br><br>
        In general, the Imperium promotes the development of a neo-feudal political system, which the High Lords of
        Terra and the Inquisition have long believed to be the most stable form of human government. There are few
        human-settled worlds in the galaxy where any but the most wealthy nobles have any say in the government of
        their planet, and the Imperial establishment generally characterises any movements toward "democracy,"
        self-rule or the overthrow of the neo-feudal system as outright heresy against the divine plan of the
        God-Emperor. This intense need for political stability and the growing military demands upon the Imperial
        system presented by the myriad and growing threats of the 41st Millennium have created a repressive and
        stagnant galactic government. In the present Imperium, science and human progress have essentially been
        halted in service to the need to simply maintain the crumbling status quo. It is not for nothing that many
        Imperial savants consider the current age the "Time of Ending" for Mankind.
        <br><br>
        Several alien species and dark forces -- Chaos, the Tyranids, the Aeldari, the Drukhari, the Orks, the T'au,
        and the undying Necrons -- now challenge the supremacy of the Imperium and humanity's predominant place in
        the galaxy. From within its own creaking and increasingly stagnant and repressive edifice, the Imperium is
        threatened more insidiously by rebellion, mutation, dangerous psykers and subversive Chaos Cults. However,
        despite its myriad problems, without the admittedly authoritarian and often harsh protection of the
        Imperium, Mankind as a whole would have fallen prey to the countless perils that threaten it. Without the
        Imperium of Man and Mankind's faith in the Emperor who guides it, the human race would have become extinct
        long ago.
    </p>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"
        integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
        crossorigin="anonymous"></script>
<script src="test.js"></script>
</body>
</html>