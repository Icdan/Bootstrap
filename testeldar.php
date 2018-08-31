<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
    integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous" title="day">
    <link id="style1" rel="stylesheet" href="something.css" title="day">

    <title>Eldar</title>
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
    <img class="mx-auto mt-2 intro-img2" src="testimg/Eldar.png">
    <h1>Eldar</h1>
    <p id="intro-p" class="mx-auto ca blockquote"> "You are a tool to us. Our people ruled the stars when this world was ruled by
        reptiles. Many came against
        us—the soulless ones, the Krourk at the apex of their might, in comparison to which this latest folly is
        laughable, the Cythor and a thousand other races so terrible your intellects could not contemplate them.
        Even
        your own ancestors and their unliving legions at the so-called height of their mastery. We defeated them
        all. To
        you we seem a sorry remnant, a ragged glory fading into the void, but we are not yet extinct, Inquisitor.
        What
        is a few thousand cycles of weakness when set against millions of power? You fell yourselves. Your empire is
        a
        pathetic mockery of what your kind once had. Mark my words well—unlike you, we shall be mighty once again.
        We
        would prefer it if there were still a galaxy to rule when we are ready to return."
    </p>
    <p class="mx-5">
        The Eldar, or Aeldari as they were known in the Eldar Lexicon before the fall of their lost realm, are an
        ancient humanoid alien race whose vast empire once extended the width and breadth of the known galaxy. The
        Aeldari Empire was without equal, and they counted themselves masters of the stars. But millennia ago, the
        Aeldari's overweening pride and their fall into hedonistic practices led to a cataclysm that all but
        eradicated their kind and led to the birth of the Chaos God Slaanesh. Despite their boundless power, the
        heart of their civilisation was torn out by this catastrophe of their own making, forcing the surviving
        Aeldari, now calling themselves "Eldar," to flee upon gigantic, continent-size starships called Craftworlds.
        Now they cling to survival by a thread, fighting the horrors of the galaxy with ritualised discipline and
        consummate skill.
        <br><br>
        The Eldar race has a long and complex spacefaring history, so long in fact that little is known for certain
        about the course of their physical evolution and early planet-bound existence. The original Eldar homeworld
        was destroyed during the catastrophic collapse of the Eldar civilisation known as the Fall of the Eldar. The
        remnants of Eldar culture that survived the cataclysm preserved much of their species' history in the form
        of traditional stories, songs and dance. Written records, monuments and visual records were almost
        completely destroyed except for a few instances where they were taken aboard voidcraft fleeing from the
        doomed worlds.
        <br><br>
        As a humanoid race, Eldar are physically similar to humans, although not entirely identical by any means.
        They possess longer and cleaner limbs, and fine ascetic features with penetrating and slightly slanted,
        almond-shaped eyes. Their ears are also slightly pointed, but otherwise they could pass as human at first
        glance. The most obvious difference between humans and Eldar can only be seen when they move, for the
        movements of an Eldar radiate a subtle grace which is impossible for a human to emulate. This can be seen in
        even their slightest gestures or the dexterity with which they manipulate small objects.
        <br><br>
        The Eldar mind, while similar in general to the human psyche, is far more inclined towards extremes. Because
        of this, Eldar are more intelligent but also far more intense than humans. Although an Eldar and a human can
        both feel grief or joy, the Eldar's experience is likely to be far more extreme.
        <br><br>
        This natural inclination towards emotional extremes is both a blessing and a curse to the Eldar. On the
        positive side, it gives them an unparalleled appreciation of life and an unrivalled ability to express
        themselves through music and other creative endeavours. A melody or gesture made with grace and skill can
        elicit an intensity of pleasure which is unimaginable to a human. But this potential for joy is paralleled
        by an equal capacity to feel despair, ambition and even hatred. Confronted by grief or other personal
        setbacks, an Eldar suffers mental torments which far exceed the boundaries of human anguish. The extreme
        nature of their temperament makes it very important that the Eldar maintain a measure of self-control at all
        times, for it is dangerously easy for them to become entranced by and ultimately dependent upon the
        experiences that their culture offers them. They must learn to control the darker side of their natures,
        which is no less an essential portion of the Eldar psyche -- and the source of the catastrophe that nearly
        caused their extinction.
        <br><br>
        The Eldar are a naturally psychic race, and all Eldar possess the potential to become powerful psykers if
        they choose to pursue this path. The Eldar can use these innate abilities to shape matter, which lies at the
        foundation of their extraordinary command of technology.
        <br><br>
        Though highly advanced and feared across the galaxy, the Eldar are still a dying people -- a shadow of their
        former glory -- and their race teeters on the brink of final annihilation.
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