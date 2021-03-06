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

    <title>Tyranids</title>
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
    <img class="mx-auto mt-2 intro-img" src="testimg/tyranid02.png">
    <h1>Tyranids</h1>
    <p id="intro-p" class="mx-auto ca blockquote"> "I don't know where they come from. It seems highly unlikely that they evolved
        naturally into what they are now - impossible, given what we know about evolution. Perhaps they are some
        kind of bioweapon, created millennia ago by madmen for some long-forgotten war. If so, I suspect that their
        creators soon came to regret their creation. Or perhaps they come straight from the warp. Possibly the Lords
        of Chaos themselves cast them out because they were too unpleasant."
    </p>
    <p class="mx-5">
        The Tyranids are an extragalactic composite species of hideous xenos that is actually a space-faring
        ecosystem comprised of innumerable different bioforms which are all variations on the same genetic theme.
        The Tyranid race is ultimately dedicated solely to its own survival, propagation and evolutionary
        advancement. The Tyranids collectively form a monstrous superorganism that travels across the universe in
        their great Hive Fleets of biomechanical Hive Ships, systematically consuming all other biomatter to enable
        its own rapid evolution and reproduction. All Tyranid organisms are synaptic (psychically-reactive), and
        each Tyranid creature within a Hive Fleet shares and contributes to a communal Hive Mind, which allows the
        trillions of beings comprising the Tyranid Hive Fleets to communicate and organise instantaneously on a
        staggering scale.
        <br><br>
        The mentality of the Tyranid approach to warfare can be described with the phrase "quantity has a quality
        all its own". From the "lowly" Ripper, to the deadly Hive Tyrant and beyond, the signature of the Tyranid
        species is that they overwhelm their foes with sheer numbers, reproducing massive numbers of highly virulent
        organisms in record time from the biochemical soup that they derive from the biospheres of the worlds that
        they consume. The components of a Tyranid Hive Fleet travel almost exclusively in large groups known as
        swarms that possess specialized biomechanical creatures for destroying and consuming a wide variety of prey
        life forms. Tyranids have evolved sophisticated methods for facilitating genetic transfer across species
        boundaries. As a result, a significant goal of any Tyranid invasion is acquisition of useful new biological
        traits from other lifeforms. These are used by the Hive Mind to enhance the Tyranids' effectiveness in
        consuming new worlds to gain more of the necessary organic raw materials for further reproduction. All
        Tyranids are reproduced by a single, highly intelligent female bioform known as a Norn-Queen. A Hive Fleet's
        Norn-Queens are the most important Tyranids within the fleet, for if they are injured or killed the Tyranids
        cannot reproduce their numbers from the captured bio-mass. As a result, Norn-Queens can be found only at the
        heart of the largest and most-well defended Tyranid Hive Ships.
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