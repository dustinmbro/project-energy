var slideShowArray1 = ['blauwblikje', 'groenblikje', 'roodblikje'];
var slideShowArray2 = ['blauwebessen suprise','lime fresh','aardbei sweet'];
var slideShowArray3 = ['met onze blauwebessen surprise voelt elke slok als een verassing <br><br> 0% vet <br> sodium 65mg<br> koolhydraten 61g <br> suikers 61g', 'met onze lime fresh voelt elke slok als een verfrisend briesje <br><br> 0% vet <br> sodium 80mg<br> koolhydraten 45g <br> suikers 40g', 'met onze aardbei sweet voelt elke slok als een smaak explosie <br><br> 0% vet <br> sodium 30mg<br> koolhydraten 67g <br> suikers 90g'];
var slideShowArray4 = ['#1DAFE1', '#25C725', '#D14169'];
var slideShowArray5 = ['#08DDFF', '#28E828', '#F57397'];
var productfoto;
var titel;
var producttext;
var achtergrond;
var textachtergrond;
var index = 0;
var index2 = 0;
var index3 = 0;
var index4 = 0;
var index5 = 0;

window.onload = function(){
    productfoto = document.getElementById('productfoto');

    setInterval(slideShow, 5000);

    titel = document.getElementById('titel');

    setInterval(slideShow2, 5000);

    producttext = document.getElementById('producttext');

    setInterval(slideShow3, 5000);

    
    achtergrond = document.getElementById('achtergrond');

    setInterval(slideShow4, 5000);

    textachtergrond = document.getElementById('textachtergrond');

    setInterval(slideShow5, 5000);
}

function slideShow(){
    productfoto.style.backgroundImage = "url(img/" +  slideShowArray1[index] + ".png)";
    index++;
    if(index == slideShowArray1.length){
        index = 0;
    }
}
function slideShow2(){
   titel.innerHTML = slideShowArray2[index2];
    index2++;
    if(index2 == slideShowArray2.length){
        index2 = 0;
    }
}
function slideShow3(){
    producttext.innerHTML = slideShowArray3[index3];
    index3++;
    if(index3 == slideShowArray3.length){
        index3 = 0;
    }
}

    function slideShow4(){
        achtergrond.style.backgroundColor = slideShowArray4[index4];
        index4++;
        if(index4 == slideShowArray4.length){
            index4 = 0;
        }
    
}
function slideShow5(){
    textachtergrond.style.backgroundColor = slideShowArray5[index5];
    index5++;
    if(index5 == slideShowArray5.length){
        index5 = 0;
    }

}