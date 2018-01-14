function toggle() {
    var a = document.getElementById("style1");
    a.x = 'smthn' == a.x ? 'something' : 'smthn'; // short if
    a.href = a.x + '.css';
}