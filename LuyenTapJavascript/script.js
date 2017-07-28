/**
 * Created by nhatnk on 4/26/17.
 */

function Hero(image, top, left, size){
  this.image = image;
  this.top = top;
  this.left = left;
  this.size = size;

  this.getHeroElement = function(){
    return '<img width="'+ this.size + '"' +
      ' height="'+ this.size + '"' +
      ' src="' + this.image +'"' +
      ' style="top: '+this.top+'px; left:'+this.left+'px;position:absolute;" />';
  }

  this.moveRight = function(){
    this.left += 50;
    console.log('ok: ' + this.left);
  }
  this.moveBottom=function () {
    this.top += 50;
    console.log('ok: ' +this.top);
  }
  this.moveLeft=function () {
    this.left -=50;
    console.log('ok: '+this.left);
  }
  this.moveTop=function () {
    this.top -= 50;
    console.log('ok: ' +this.top);
  }

}

var hero = new Hero('nvhoathinh.png', 20, 30, 200);
var flag=0;
function start(){
  if(hero.left < window.innerWidth - hero.size-20&&flag==0){
    hero.moveRight();
  }
  else if(hero.top<window.innerHeight-hero.size-10&&flag==0){
    hero.moveBottom();
    if(hero.top==window.innerHeight-hero.size-10){
      flag=1;
    }
  }
  else if(hero.left>hero.size/5&&flag==1){
    hero.moveLeft();
  }
  else if(hero.top>hero.size/5&&flag==1){
    hero.moveTop();
  }
  document.getElementById('game').innerHTML = hero.getHeroElement();
  setTimeout(start, 500)
}
start();
 setTimeout(onload,5000)