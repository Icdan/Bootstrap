var a = document.getElementById("style1");

function toggle() {

    a.x = 'smthn' === a.x ? 'something' : 'smthn'; // short if
    a.href = a.x + '.css';
    setCookie('css', a.x, 2);
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    nightModeChaotic();
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
    file = getCookie('css') === null ? 'something' : getCookie('css');
    a.href = getCookie('css') + '.css';
    nightModeChaotic();
}

var nightModeChaos = document.getElementById('nightModeChaos');

function nightModeChaotic() {
    if (a.href === 'http://localhost:63342/Bootstrap/something.css') {
        nightModeChaos.src = "testimg/ChaosStar.png";
    }
    else {
        nightModeChaos.src = "testimg/ChaosStar02.png";
    }
}
