var a = document.getElementById("style1");



function toggle() {

    a.x = 'smthn' === a.x ? 'something' : 'smthn'; // short if
    a.href = a.x + '.css';
    setCookie('css', a.x, 2);
}

var nightModeChaos = document.getElementById('nightModeChaos');
var nightModeTau = document.getElementById('nightModeTau');
var nightModeMan = document.getElementById('nightModeMan');
var nightModeOrk = document.getElementById('nightModeOrk');

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";

    if (a.href === 'https://icdan.github.io/Bootstrap/something.css') {
        nightModeChaos.src = "testimg/ChaosStar.png";
        nightModeTau.src = "testimg/Tau.png";
        nightModeMan.src = "testimg/Aquila.png";
        nightModeOrk.src = "testimg/ork.png";
    }
    else {
        nightModeChaos.src = "testimg/ChaosStar02.png";
        nightModeTau.src = "testimg/Tau02.png";
        nightModeMan.src = "testimg/Aquila02.png";
        nightModeOrk.src = "testimg/ork02.png";
    }
}








function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setcss() {
    var a = document.getElementById("style1");
    file = getCookie('css') === null ? 'something' : getCookie('css');
    a.href = getCookie('css') + '.css';
    if (a.href === 'http://localhost:63342/Bootstrap/something.css') {
        nightModeChaos.src = "testimg/ChaosStar.png";
        nightModeTau.src = "testimg/Tau.png";
        nightModeMan.src = "testimg/Aquila.png";
        nightModeOrk.src = "testimg/ork.png";
    }
    else {
        nightModeChaos.src = "testimg/ChaosStar02.png";
        nightModeTau.src = "testimg/Tau02.png";
        nightModeMan.src = "testimg/Aquila02.png";
        nightModeOrk.src = "testimg/ork02.png";
    }
}

// ------------------------------------------------------------------
//
// // var n = 0;
// // var m = 0;
// // var l = 0;
// // var z = 0;
// //
// // function toggleMan() {
// //     if (n == 0) {
// //         document.getElementById('nightModeMan').src = "testimg/Aquila02.png";
// //         n = 1;
// //     }
// //     else {
// //         document.getElementById('nightModeMan').src = "testimg/Aquila.png";
// //         n = 0;
// //     }
// // }
// //
// // function toggleOrk() {
// //     if (m == 0) {
// //         document.getElementById('nightModeOrk').src = "testimg/ork02.png";
// //         m = 1;
// //     }
// //     else {
// //         document.getElementById('nightModeOrk').src = "testimg/ork.png";
// //         m = 0;
// //     }
// // }
// //
// // function toggleTau() {
// //     if (l == 0) {
// //         document.getElementById('nightModeTau').src = "testimg/Tau02.png";
// //         l = 1;
// //     }
// //     else {
// //         document.getElementById('nightModeTau').src = "testimg/Tau.png";
// //         l = 0;
// //     }
// // }
// //
// // function toggleChaos() {
// //     if (b === 0) {
// //         nightModeChaos().src = "testimg/ChaosStar02.png";
// //
// //     }
// //     else if (b === 1) {
// //         nightModeChaos().src = "testimg/ChaosStar.png";
// //
// //     }
// // }
//
