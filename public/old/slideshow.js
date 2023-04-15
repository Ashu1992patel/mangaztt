var slideShowSpeed = 2500;
var crossFadeDuration = 3;
var Pic = new Array();

Pic[0] = 'images/slide1.jpg';
Pic[1] = 'images/slide2.jpg';
Pic[2] = 'images/slide3.jpg';
Pic[3] = 'images/slide4.jpg';
//Pic[4] = 'images/slide5.jpg';
//Pic[5] = 'images/slide6.jpg';

var t;
var j = 0,k=0;
var p = Pic.length;

var preLoad = new Array();
var preLoad2 = new Array();
var preLoad3 = new Array();

for (i = 0; i < p; i++) {
preLoad[i] = new Image();
preLoad[i].src = Pic[i];
}


function runSlideShow() {
if (document.all) {
document.images.SlideShow.style.filter="blendTrans(duration=2)";
document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
document.images.SlideShow.filters.blendTrans.Apply();
}

document.images.SlideShow.src = preLoad[k].src;

if (document.all) {
document.images.SlideShow.filters.blendTrans.Play();
}

k = k + 1;
if(k>(p-1)) k=0;
t = setTimeout('runSlideShow()', slideShowSpeed);
}