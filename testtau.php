<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
    integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous" title="day">
    <link id="style1" rel="stylesheet" href="something.css" title="day">

    <title>Tau</title>
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
    <img id="nightModeTau" class="mx-auto mt-2 intro-img2" src="testimg/Tau02.png">
    <h1>Tau</h1>
    <p id="intro-p" class="mx-auto ca blockquote">"It saddens me greatly that we must take arms against the peoples of the
        galaxy. By their deaths, they deny
        themselves the liberation that is only to be found in total surrender to the Greater Good."
    </p>
    <p class="mx-5">The Tau (Imperial binomial classification: Tau tau), known in their own language as the T'au, are a
        young,
        humanoid and technologically-advanced intelligent race native to the Eastern Fringes of the Milky Way Galaxy
        who are fighting to expand their interstellar empire and extend a philosophical concept they call the
        "Greater Good" (Tau'va in the Tau Lexicon) to all the intelligent species of the galaxy. The Tau claim to be
        a peaceful race when possible, asking if others will join their cause voluntarily instead of fighting
        against them. However, if their peaceful overtures are refused, the Tau may well decide to conquer a planet
        and add it to their growing interstellar empire for the Greater Good, searing the flesh from the bones of
        anyone who stands against their benign intentions. Tau society is divided into a number of castes, each
        responsible for managing a specific aspect of their society. The Tau's central motivating ideal is that
        everyone in their empire regardless of their species will work for the collective betterment of everyone
        else, an almost mystical philosophy they call the Greater Good.
        <br><br>
        The Tau are the central figures of the Tau Empire, an interstellar polity which is composed of several
        different intelligent species, primarily the Kroot of Pech, the Vespid of the world of Vespid and the
        nomadic Nicassar, though there are now several human Tau Septs derived from conquered Imperial humans or
        humans who voluntarily joined the Tau Empire because they were impressed by the concept of the Greater Good.
        These people are known as Gue'vesa in the Tau Lexicon and they are considered amongst the most vile of
        Traitors and Heretics within the Imperium of Man. The Tau are a relatively young race (it has been only
        6,000 Terran years since Imperial Inquisitors first noted that the Tau had only just mastered fire and the
        wheel), and they have evolved rapidly over the past few millennia. Unlike other young intelligent races of
        the galaxy, the Tau have made remarkable leaps in technology and now represent a real threat to Imperial
        domination in their region of the galaxy.
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