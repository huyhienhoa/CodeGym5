var flag1=3,flag2=1,flag3=2;
function nextImage1() {
    if(document.getElementById('img1').getAttribute("src")=='images/o.PNG')
    {
        document.getElementById("img1").src="images/x.PNG";
        flag1=1;
    }
    else if(document.getElementById('img1').getAttribute("src")=="images/x.PNG")
    {
        document.getElementById("img1").src="images/on.png";
        flag1=2;
    }
    else{
        document.getElementById("img1").src="images/o.PNG";
        flag1=3;
    }

    if(flag1==flag2 && flag2==flag3)
        document.getElementById("abc").style.backgroundColor="#CDCDCD";
    else{
        document.getElementById("abc").style.backgroundColor="#FFFFFF";
    }
}



function nextImage2() {

    if(document.getElementById('img2').getAttribute("src")=='images/o.PNG')
    {
        document.getElementById("img2").src="images/x.PNG";
        flag2=1;
    }
    else if(document.getElementById('img2').getAttribute("src")=="images/x.PNG")
    {
        document.getElementById("img2").src="images/on.png";
        flag2=2;
    }
    else{
        document.getElementById("img2").src="images/o.PNG";
        flag2 = 3;

    }
    if(flag1==flag2 && flag2==flag3)
        document.getElementById("abc").style.backgroundColor="#CDCDCD";
    else{
        document.getElementById("abc").style.backgroundColor="#FFFFFF";
    }
}



function nextImage3() {
    if(document.getElementById('img3').getAttribute("src")=='images/o.PNG')
    {
        document.getElementById("img3").src="images/x.PNG";
        flag3=1;
    }
    else if(document.getElementById('img3').getAttribute("src")=="images/x.PNG")
    {
        document.getElementById("img3").src="images/on.png";
        flag3=2;
    }
    else{
        document.getElementById("img3").src="images/o.PNG";
        flag3=3;

    }
    if(flag1==flag2 && flag2==flag3)
        document.getElementById("abc").style.backgroundColor="#CDCDCD";
    else{
        document.getElementById("abc").style.backgroundColor="#FFFFFF";
    }
}