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

    <title>Orks</title>
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
    <img id="nightModeOrk" class="mx-auto mt-2 intro-img2" src="testimg/ork02.png">
    <h1>Orks</h1>
    <p id="intro-p" class="mx-auto ca blockquote"> "Red un'z go FAASTAA!
        <br>
        Green iz BEZT!!
        <br>
        Blu iz lucky, makes dem bullitz miss ya!
        <br>
        Black is DED 'ARD!!
        <br>
        Purppl is sneaky, you evah seen a purppl Ork?
        <br>
        Yellow makez da biggest BOOOMS az well as da most shiny gubbinz and teef!!"
        <br>
        White is da color of deff!"
    </p>
    <p class="mx-5">Orks are a warlike, crude, and highly aggressive green-skinned Xenos race. Orks are the dominant
        subspecies
        of the Orkoids, which includes the smaller Gretchin and Snotlings. Although their society is entirely
        primitive and brutal, the Orkoid race is also the most successful species in the whole Galaxy, outnumbering
        possibly every other race. However, due to their aggressive and warlike nature, this massive race is split
        into hundreds of tiny empires, warring as much between themselves as against other races. In the purely
        theoretical event all the Orks were to unite, they would undoubtedly crush all opposition.

        An Ork Empire, also called an Ork Domain, is a region of the Milky Way Galaxy that is controlled by the
        xenos menace known as the Orks. Living on innumerable worlds, on some, the Orks dominate completely, on
        others they live in a state of perpetual war, and on others still they act as slavemasters, bullying the
        local populations into doing their bidding. Across the galaxy there are isolated Ork Worlds, interstellar
        Ork realms, massive Ork empires, and Ork hordes that roam the stars upon gigantic Space Hulks. Wherever
        humans have travelled in the galaxy, they have found Orks. It has been tens of thousands of standard years
        since humanity first encountered the Orks, and in that time mankind has fought countless bloody wars against
        these savage aliens. There is no likelihood that this state of affairs will change. Barbaric and savage, the
        Greenskins spread across the galaxy like a viridian stain. They plague the battlefields of the late 41st
        Millennium in great numbers, overrunning any who stand before them in a torrent of bloodshed and usually
        mindless violence.
        <br><br>
        Orks need battle just as humans need food and drink. Due to their warlike nature, they constantly fight
        amongst themselves, or launch piratical raids upon nearby enemies. Such conflicts tend to be small-scale or
        localised. They never really develop beyond random outbursts of violence and looting. However, Ork
        populations can reach a critical mass that leads to a full-scale planetary migration. This is known as a
        WAAAGH!, a crusade of pure aggression that crashes through star systems in an orgy of violence. An Ork
        WAAAGH! is war on an apocalyptic scale. Orks beyond counting swarm from one world to the next. Whole
        civilisations are exterminated and defenders' armies laid to waste as the Orks plough ever onward in an
        unstoppable tide.
    </p>
    <h3 class="mx-5">Ork Expansion</h3>
    <p class="mx-5">
        The galaxy is vast beyond the imaginings of the most ambitious despot. Yet this does not daunt the Orks as
        they simply don't think about it. Instead, they plough from one conquest to the next, secure in the
        knowledge that one day, they will rule it all. Wherever humans have travelled, they have found Orks. It has
        been tens of thousands of standard years since Humanity first encountered them, and in that time Mankind has
        fought countless bloody wars against these savage aliens, and there is no likelihood that this state of
        affairs will ever change. There are numerous Ork empires, each spreading across the galaxy like a noxious
        green stain, and no star system is entirely devoid of their touch. Some theorise that the Orks do not use
        conventional methods of interstellar travel because they follow some deep-seated instinctual plan of
        galactic conquest, but the truth is far simpler. The Greenskins have not mastered the art of space travel
        because they really do not care where they are going, only that they get to fight whatever is there when
        they arrive.
    </p>
    <h5 class="mx-5">WAAAGH!</h5>
    <p class="mx-5">The WAAAGH! is the name given by the Orks themselves to the massive military campaigns they
        periodically
        unleash on the galaxy as part of their eternal desire to seek out combat and war. The term also applies to
        the key concept of Ork "kultur" around which the entire Greenskin society, if it can be called that,
        revolves. Barbaric and savage, the Greenskins spread across the galaxy like a viridian stain. They plague
        the battlefields of the 41st Millennium in great numbers, overrunning any who stand before them in a torrent
        of bloodshed and usually mindless violence. An Ork WAAAGH! is war on an apocalyptic scale. Orks beyond
        counting swarm from one world to the next. Whole civilisations are exterminated and defenders' armies laid
        to waste as the Orks plough ever onward in an unstoppable tide. Orks need battle just as humans need food
        and drink. Due to their warlike nature, they constantly fight amongst themselves, or launch piratical raids
        upon nearby enemies. Such conflicts tend to be small-scale or localised. They never really develop beyond
        random outbursts of violence and looting. However, Ork populations can reach a critical mass that leads to a
        full-scale planetary migration. This is known as a WAAAGH!, a crusade of pure aggression that crashes
        through star systems in an orgy of violence.
        <br><br>
        Ork behaviour is dominated by the WAAAGH!, which is also the name given to the gestalt psychic field the
        Greenskins generate that affects the Ork psyche, which allows Orks to instinctively recognize who is
        "bigga", and therefore who is in charge, since might makes right in Ork society. All Orks generate this
        field, and it grows stronger as the Orks enjoy themselves, generally while fighting, and as more of them
        congregate together in one geographical area. The WAAAGH! helps give momentum to the Orks' planetary assault
        campaigns, which are also known as WAAAGHs! (the Orks like to call a lot of things WAAAGH!s). Such a WAAAGH!
        is a cross between a holy crusade and a pub crawl, with a bit of genocide thrown in for good measure.
        Thousands of Orks will gather together, drawn to the power of a single dominant Ork called a Warboss or
        Warlord if the WAAAGH! is particularly massive, who is bigger and more intelligent than the Orks around him.
        Then the Orks will set off to find an enemy to fight and defeat. Ork WAAAGHs! will sweep whole planetary
        systems away and destroy armies and fleets in tides of bloodlust and carnage, and only once the Orks have
        killed every available enemy will they start to fight amongst themselves again.
        <br><br>
        The Imperium of Man's Tech-priests have theorized that this gestalt psychic field also has a telekinetic or
        quantum probabilistic effect, allowing the seemingly ramshackle and poorly designed Ork technology to work
        as the Greenskins expect. It is believed that the reason this hypothesis came into existence is that the
        Imperium adopted the Adeptus Mechanicus' religious belief that aspects of a universal "Machine Spirit"
        inhabits all technology, and that this Machine Spirit serves Mankind at the command of the Machine God. If
        this is the case, without a Machine Spirit, Ork machines could not work, requiring some psychic cause to
        justify their often devastating effect. Furthermore, Mechanicus Genetor Lukas Anzion has noted that many
        Ork-built weapons will not function at all unless wielded by an Orkoid, possibly supporting this
        hypothesis.
    </p>
    <p class="mx-5">
        The Waagh! also seems to warp reality to fit Orkish
        beliefs, allowing their ramshackle technology to function properly. If Orks are convinced that their designs
        are sound and functional, the Waaagh! makes them so. Other races have found that many Orkish devices simply
        do not work unless wielded by an Orkoid. Similarly, it is an article of faith among Orks that explosives
        become more powerful when they're painted, and that their vehicles go faster when given a Red Paint Job.
        This may sound nonsensical, but because the Orks believe this to be true, the Waaagh! makes it true.
        <br><br>
        During the War of the Beast, members of the Adeptus Mechanicus noticed how Ork weapons only seemed to
        activate when they came into contact with a Greenskin.
        <br><br>
        Waaagh! energy can also be manipulated by the Weirdboyz in an array of deadly psychic powers.
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