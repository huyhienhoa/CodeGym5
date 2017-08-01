var buocdi = 1;
function myFunction(event) {
    var x = getMousePos(event);
    var y = getMousePosY(event);


    var c = document.getElementById("tb").childNodes;
    if (y >= 0 && y < 20 && x >= 0 && x < 20) {
        if (buocdi == 1) {
            c[1].childNodes[y * 2].childNodes[x * 2 + 1].style.backgroundImage = "url('x.PNG')";
            check(x, y);
            buocdi = 0;
        }
        else {
            c[1].childNodes[y * 2].childNodes[x * 2 + 1].style.backgroundImage = "url('images/o.PNG')";
            check(x, y);
            buocdi = 1;
        }

    }

}

function checkhang(x, y) {
    var cot = x;
    var hang = y;
    var countRow = 1;
    var dem = 0;
    var c = document.getElementById("tb").childNodes;
    var url = c[1].childNodes[hang * 2].childNodes[cot * 2 + 1].style.backgroundImage;
    console.log(url);
    for (var i = cot + 1; i < 20; i++) {
        if (c[1].childNodes[hang * 2].childNodes[(i + 1) * 2 + 1].style.backgroundImage === url) {
            countRow++;
            //cot++;
        }
        else {
            break;
        }

    }
    for (var j = cot - 1; j >= 0; j--) {
        if (c[1].childNodes[hang * 2].childNodes[(j - 1) * 2 + 1].style.backgroundImage === url) {
            countRow++;
            //cot++;
        }
        else {
            break;
        }

    }
    if (countRow >= 4) {
        return 1;
    }
    return 0;

}

function checkcot(cot, hang) {
    var countRow = 1;
    var c = document.getElementById("tb").childNodes;
    var url = c[1].childNodes[hang * 2].childNodes[cot * 2 + 1].style.backgroundImage;
    for (var i = hang + 1; i < 20; i++) {
        if (c[1].childNodes[(i + 1) * 2].childNodes[cot * 2 + 1].style.backgroundImage === url) {
            countRow++;
            //cot++;
        }
        else {
            break;
        }

    }
    for (var j = hang - 1; j >= 0; j--) {
        if (c[1].childNodes[(j - 1) * 2].childNodes[cot * 2 + 1].style.backgroundImage === url) {
            countRow++;
            //cot++;
        }
        else {
            break;
        }
    }
    if (countRow >= 4) {
        return 1;
    }
    return 0;

}

function check(cot, hang) {
    var c = document.getElementById("tb").childNodes;
    if (checkhang(cot, hang) || checkcot(cot, hang)) {
        if (c[1].childNodes[hang * 2].childNodes[cot * 2 + 1].style.backgroundImage === 'url("x.PNG")') {
            alert("Người chơi X chiến thắng");
        }
        else {
            alert("Người chơi O chiến thắng");
        }
    }

}

function getMousePos(event) {
    var x = event.clientX;
    var cot = Math.floor((x - 300) / 30);
    return cot;
}
function getMousePosY(event) {
    var y = event.clientY;
    var hang = Math.floor(y / 30);
    return hang;
}
document.addEventListener("click", getMousePos);
document.addEventListener("click", getMousePosY);
document.addEventListener("click", myFunction);
