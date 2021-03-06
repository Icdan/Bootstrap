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

    <title>Space Marines</title>
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
    <img class="mx-auto mt-2 intro-img2" src="testimg/ultramarine.png">
    <h1>Space Marines</h1>
    <p id="intro-p" class="mx-auto ca blockquote"> "They shall be my finest warriors, these men who give of themselves to me.
        Like clay I shall mould them, and in
        the furnace of war forge them. They will be of iron will and steely muscle. In great armour shall I clad
        them
        and with the mightiest guns will they be armed. They will be untouched by plague or disease, no sickness
        will
        blight them. They will have tactics, strategies and machines so that no foe can best them in battle. They
        are my
        bulwark against the Terror. They are the Defenders of Humanity.
        <br><br>
        They are my Space Marines and they shall know no fear."
    </p>
    <p class="mx-5">
        The Space Marines or Adeptus Astartes are foremost amongst the defenders of humanity, the greatest of the
        Emperor of Mankind's warriors. They are barely human at all, but superhuman; having been made superior in
        all respects to a normal man by a harsh regime of genetic modification, psycho-conditioning and rigorous
        training. Space Marines are untouched by plague or any natural disease and can suffer wounds that would kill
        a lesser being several times over, and live to fight again. Clad in ancient Power Armour and wielding the
        most potent weapons known to Man, the Space Marines are terrifying foes and their devotion to the Emperor
        and the Imperium of Man is unyielding. They are the God-Emperor's Angels of Death, and they know no fear.
        <br><br>
        The Astartes are physically stronger, far more resilient and often mentally far removed from the lot of most
        normal human beings. In the presence of the Astartes, most people feel a combination of awe and fear, and
        many cultures on the more primitive worlds simply worship them outright as demigods or angels of the
        God-Emperor made flesh. They should feel so, for many Space Marines feel little compassion for those they
        have sometimes termed "mortals" in comparison to themselves, seeing the very people they were created to
        protect as little more than obstacles to a more efficient eradication of the Imperium's enemies. This is an
        attitude sometimes taken by whole Chapters. They see normal humans as frail, weak creatures given to the
        follies of temptation, avarice, greed, lust and cowardice -- all emotions they rarely feel, if ever. Yet
        there are some Astartes who remember why they were created by the Emperor, who avoid the trap of hubris
        which the Space Marines are so prone to and which has seduced so many of their number to serve the Ruinous
        Powers of Chaos. They are the final guardians of Mankind, the saviours of last resort.
    </p>
</div>
<div>
    <h4 class="ca">The following Legions still stand with their Emperor:</h4>
    <ul class="ca" style="list-style-type: none;">
        <li>I Legion, Dark Angels</li>
        <li>V Legion, White Scars</li>
        <li>VI Legion, Space Wolves</li>
        <li>VII Legion, Imperial Fists</li>
        <li>IX Legion, Blood Angels</li>
        <li>X Legion, Iron Hands</li>
        <li>XIII Legion, Ultramarines</li>
        <li>XVIII Legion, Salamanders</li>
        <li>XIX Legion, Raven Guard</li>
    </ul>
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