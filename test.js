function toggle() {
    var a = document.getElementById("style1");
    a.x = 'smthn' == a.x ? 'something' : 'smthn'; // short if
    a.href = a.x + '.css';
}

var n = 0;
var m = 0;

function toggleMan() {
    if (n == 0) {
        document.getElementById('intro-img').src = "testimg/Aquila02.png";
        n = 1;
    }
    else {
        document.getElementById('intro-img').src = "testimg/Aquila.png";
        n = 0;
    }
}

function toggleOrk() {
    if (m == 0) {
        document.getElementById('intro-img2').src = "testimg/ork02.png";
        m = 1;
    }
    else {
        document.getElementById('intro-img2').src = "testimg/ork.png";
        m = 0;
    }
}

// localStorage.setItem('darkWasPressed', 'true');
//
// localStorage.getItem('darkWasPressed');