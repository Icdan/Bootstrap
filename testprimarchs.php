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

    <title>Primarchs</title>
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
    <img class="mx-auto mt-2 intro-img" src="testimg/Alpharius.jpg">
    <h1>Primarchs</h1>
    <p id="intro-p" class="mx-auto ca blockquote"> "They shall be my sons, and in them will live the hopes of a unified humanity.
        Theirs will be the strength
        to prevail, not only when victory lies within easy reach, but even when it seems unattainable, when doom
        settles like a shroud all about. In those times of darkness, my noble sons will shine the brightest of
        all."
    </p>
    <p class="mx-5">
        The Primarchs were the 20 genetically-engineered transhuman sons of the Emperor of Mankind created in the
        late 30th Millennium after the end of the Unification Wars. They were intended to be the immortal and
        superhuman leaders who would command the Emperor's Great Crusade to reunite the scattered human race beneath
        His leadership. Their genomes later served as the genetic templates from which the Emperor crafted His 20
        Space Marine Legions.
        <br><br>
        The Primarchs were bred to be perfect generals, warriors and statesmen; larger, stronger, faster, and
        smarter than any normal human could ever hope to be. They possessed a charisma and martial prowess that made
        them like the mythical gods of old, untouchable by disease, old age or supposedly the petty failings of
        lesser men. The Primarchs were the Emperor's answer to reclaiming all the lost worlds of Mankind, and
        welcoming them into His new Imperium. The Emperor intended to raise His sons to be the best military
        commanders and political leaders Mankind had ever known, and they would bring the Imperial Truth to the rest
        of the human-settled galaxy in their father's name. Yet for all their gifts, the Primarchs were still men,
        and in the end their very human flaws would become the primary obstacle to the realisation of the Emperor's
        great dream for Mankind.
    </p>
</div>
<div class="container">
    <div class="row">
        <div class="col-3">
            <h3>Lion El'Jonson</h3>
            <h5>The First</h5>
            <h6>I Legion, Dark Angels</h6>
            <h6>Loyalist</h6>
        </div>
        <div class="col-3">
            <h3>Unknown</h3>
            <h5>Unknown</h5>
            <h6>II legion</h6>
            <h6>Expunged from Imperial records</h6>
        </div>
        <div class="col-3">
            <h3>Fulgrim</h3>
            <h5>The Phoenician</h5>
            <h6>III Legion, Emperor's Children</h6>
            <h6>Traitor</h6>
        </div>
        <div class="col-3">
            <h3>Perturabo</h3>
            <h5>Lord of Iron</h5>
            <h6>IV Legion, Iron Warriors</h6>
            <h6>Traitor</h6>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-3">
            <h3>Jaghatai Khan</h3>
            <h5>The Great Khan</h5>
            <h6>V Legion, White Scars</h6>
            <h6>Loyalist</h6>
        </div>
        <div class="col-3">
            <h3>Leman Russ</h3>
            <h5>Wolf King</h5>
            <h6>VI Legion, Space Wolves</h6>
            <h6>Loyalist</h6>
        </div>
        <div class="col-3">
            <h3>Rogal Dorn</h3>
            <h5>The Unielding One</h5>
            <h6>VII Legion, Imperial Fists</h6>
            <h6>Loyalist</h6>
        </div>
        <div class="col-3">
            <h3>Konrad Curze</h3>
            <h5>Night Haunter</h5>
            <h6>VIII Legion, Night Lords</h6>
            <h6>Traitor</h6>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-3">
            <h3>Sanguinius</h3>
            <h5>Brightest One</h5>
            <h6>IX Legion, Blood Angels</h6>
            <h6>Loyalist</h6>
        </div>
        <div class="col-3">
            <h3>Ferrus Manus</h3>
            <h5>The Gorgon</h5>
            <h6>X Legion, Iron Hands</h6>
            <h6>Loyalist</h6>
        </div>
        <div class="col-3">
            <h3>Unknown</h3>
            <h5>Unknown</h5>
            <h6>XI legion</h6>
            <h6>Expunged from Imperial records</h6>
        </div>
        <div class="col-3">
            <h3>Angron</h3>
            <h5>Red Angel</h5>
            <h6>XII Legion, World Eaters</h6>
            <h6>Traitor</h6>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-3">
            <h3>Roboute Guillimans</h3>
            <h5>the Blade of Unity</h5>
            <h6>XIII Legion, Ultramarines</h6>
            <h6>Loyalist</h6>
        </div>
        <div class="col-3">
            <h3>Mortarion</h3>
            <h5>Prince of Decay</h5>
            <h6>XIV Legion, Death Guard</h6>
            <h6>Traitor</h6>
        </div>
        <div class="col-3">
            <h3>Magnus the Red</h3>
            <h5>Crimson King</h5>
            <h6>XV Legion, Thousand Sons</h6>
            <h6>Traitor</h6>
        </div>
        <div class="col-3">
            <h3>Horus</h3>
            <h5>Lupercal</h5>
            <h6>XVI Legion, Sons of Horus</h6>
            <h6>Traitor</h6>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-3">
            <h3>Lorgar</h3>
            <h5>the Urizen</h5>
            <h6>XVII Legion, Word Bearers</h6>
            <h6>Traitor</h6>
        </div>
        <div class="col-3">
            <h3>Vulkan</h3>
            <h5>The Smith</h5>
            <h6>XVIII Legion, Salamanders</h6>
            <h6>Loyalist</h6>
        </div>
        <div class="col-3">
            <h3>Corax</h3>
            <h5>The Raven-Lord</h5>
            <h6>XIX Legion, Raven Guard</h6>
            <h6>Loyalist</h6>
        </div>
        <div class="col-3">
            <h3>Alpharius Omegon</h3>
            <h5>The Hydra</h5>
            <h6>XX Legion, Alpha Legion</h6>
            <h6>Declared Traitor</h6>
        </div>
    </div>

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