function Cell(row,col,flag,image) {
    this.row=row;
    this.col=col;
    this.flag=flag;
    this.image=image;

    this.hienthi=function (event) {
             var top=event.clientX-300;
            var left=event.clientY;
            return '<img width="'+ 25 + '"' +
            ' height="'+ 25 + '"' +
            ' src="' + this.image +'"'+
        ' style="top: '+this.top+'px; left:'+this.left+'px;position:absolute;" />';
        }
    document.addEventListener("click",this.hienthi);
    this.setImage=function (image) {
        this.image=image;
    }
}

function setCell() {
    var arrCell=[];
    for(var i=0;i<20;i++){
        arrCell[i]=new Cell(30*i,300+30*i,0);
    }
    return arrCell;
}
var buocdi=1;
function myFunction(event) {
    var x=getMousePos(event);
    var y=getMousePosY(event);
    

    var c = document.getElementById("tb").childNodes;
    if(y>=0 && y<20 && x>=0 && x<20){
        console.log(y);
        console.log(x);
        if(buocdi==1){
            c[1].childNodes[y*2].childNodes[x*2+1].style.backgroundImage="url('x.PNG')";
            buocdi=0;
        }
        else{
            c[1].childNodes[y*2].childNodes[x*2+1].style.backgroundImage="url('images/o.PNG')";
            buocdi=1;
        }

    }
    // console.log(c[1].childNodes[2].childNodes[1]);
    // console.log(c[1].childNodes[4].childNodes[3]);
}

function check() {
    myFunction();
    // document.getElementById('test').innerHTML=x;

}
function getMousePos(event) {
        var x=event.clientX;
        var cot=Math.floor((x-300)/30);
        return cot;
}
function getMousePosY(event) {
    var y=event.clientY;
    var hang=Math.floor(y/30);
    return hang;
}
document.addEventListener("click", getMousePos);
document.addEventListener("click", getMousePosY);
document.addEventListener("click",myFunction);

// function test() {
//     var x=getMousePos(event);
//     var y=getMousePosY(event);
//     var arr=setCell();
//     for(var i=0;i<arr.length;i++){
//         if(x<arr[i].left+30&&y<arr[i].top+30&&arr[i].flag==0){
//             if(buocdi==1)
//             {
//                 arr[i].flag=1;
//                 arr[i].image='x.PNG';
//             }else{
//                 arr[i].flag=2;
//                 arr[i].image='o.PNG';
//             }
//         }
//     }
//
// }

function start() {
    buocdi--;
    test();
    buocdi++;
}