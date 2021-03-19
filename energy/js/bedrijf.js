var slideShowArray1 = ['fabriek1', 'fabriek2', 'fabriek3'];
var slideShowArray2 = ['binnen1','binnen2','binnen3'];
var slideShowArray3 = ['energyblik1', 'energyblik2', 'energyblik3'];
var foto1;
var foto2;
var foto3;
var index = 0;
var index2 = 0;
var index3 = 0;

window.onload = function(){
    foto1 = document.getElementById('foto1');

    setInterval(slideShow, 1000);

    foto2 = document.getElementById('foto2');

    setInterval(slideShow2, 1000);

    foto3 = document.getElementById('foto3');

    setInterval(slideShow3, 1000);
}

function slideShow(){
    foto1.style.backgroundImage = "url(img/" + slideShowArray1[index] + ".jpg)";
    index++;
    if(index == slideShowArray1.length){
        index = 0;
    }
}
function slideShow2(){
    foto2.style.backgroundImage = "url(img/" +  slideShowArray2[index2] + ".jpg)";
    index2++;
    if(index2 == slideShowArray2.length){
        index2 = 0;
    }
}
function slideShow3(){
    foto3.style.backgroundImage = "url(img/" + slideShowArray3[index3] + ".png)";
    index3++;
    if(index3 == slideShowArray3.length){
        index3 = 0;
    }
}