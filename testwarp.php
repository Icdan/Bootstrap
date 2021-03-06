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

    <title>The Warp</title>
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
    <img class="mx-auto mt-2 intro-img" src="testimg/warp1.jpg">
    <h1 class="mt-2">The Warp</h1>
    <p id="intro-p" class="mx-auto blockquote"> "Let me take you though the average Warp Travel procedure.
        <br><br>
        The Captain calls down to prepare the ship for warp expedition. Once the ship is back in realspace,
        mission clock will say they were only in the Warp for 5 days. It was 17 months for everyone on board. They also
        missed their destination by a couple of solar systems and 8/10th of the crew is dead.
        <br><br>
        The Captain turns to his bridge staff and pops the cork on a vintage stock of Jherrik Ale and salutes
        another
        successful Warp Jump.
        <br><br>
        Welcome to 40K."
    </p>
    <p class="mt-3">
        The Immaterium (also referred to as the Empyrean, the Aether, the Sea of Souls, the Realm of Chaos,
        Warpspace or most commonly, the Warp) is an alternate dimension of purely psychic energy that echoes and
        underlies the familiar four dimensions of the material universe. It is the source of all psychic powers and
        known instances of so-called "sorcery" or "magic" as well as the home dimension of the Chaos Gods and their
        myriad daemonic servants. In fact, the terms "Chaos" and "the Warp" are often used interchangeably by those
        aware of their existence within the Imperium of Man. Superficially, the Immaterium is Mankind's solution to
        the problem of faster-than-light travel. This function as an FTL medium for interstellar travel is achieved
        because the Immaterium is an extradimensional domain of pure psychic energy, with voidcraft navigating
        between its currents, as in an ocean.
        <br><br>
        The psychic energy that makes up the Immaterium is believed to be the direct result of the existence of
        sentience in the universe, in particular the intelligent species of the Milky Way Galaxy. Considered to be a
        dark reflection of the material universe, the Warp is an ocean of chaotic psychic energy, raw emotion given
        physical form. Stirred by strong emotion and action, the Immaterium is the true Realm of Chaos, home to the
        Dark Gods who comprise the Ruinous Powers and their legions of daemonic followers. The Immaterium is also
        rumoured by many cultures, human and xenos alike, to be the final resting place of the spirits of the dead,
        and therefore can be considered the "Underworld" of the Warhammer 40,000 universe.
    </p>
    <h3 class="my-3">The Astronomican</h3>
    <p>
        The Astronomican is a psychic homing signal centred upon Terra. It is powered by the continuous mental
        concentration of a thousand psykers. The Astronomican cannot be detected in the real universe -- only in the
        Warp. It is by means of this signal that the Navigators can steer their voidships over long distances. The
        Astronomican's signal is strongest close to Terra and the Emperor of Mankind who is its source and gets
        increasingly weaker further away. It extends over a spherical area with a diameter of about 50,000 light
        years. The Astronomican does not extend to the extreme fringes of the galaxy, and because Terra is situated
        in the galactic West, its signal does not reach a massive swathe of the eastern part of the galaxy at all.
        Nor is the extent or strength of the signal constant -- it can at times be blocked by localised activity
        within the Warp itself. Such activity may be compared to the hurricanes or storms of a terrestrial weather
        system and is known as a Warp Storm. Warp Storms may be so bad, and so long-lasting, that entire star
        systems are isolated for hundreds of standard years at a time.
        <br><br>
        A Warp Storm not only obscures the signal of the Astronomican, it is also dangerous for spacecraft
        travelling nearby. No spacecraft can venture within a Warp Storm and expect to survive, although there are
        tales of miraculous escapes and of starships being thrown tens of thousands of light years off course. Warp
        Storms are not the only dangers within the Warp. There are sentient energies and other immaterial life-forms
        that inhabit it, creatures formed from, and part of, the shifting stuff of the Warp. Few are friendly and
        many are hostile. They are known to Mankind as daemons.
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