var main = document.getElementById('main');
var nav = document.getElementById('nav');
var boxshow = document.getElementById('js-boxshow');
var aside = document.getElementById('aside');

var height = 80;
var width = 80;
var startHeight=995;
var widthAllBox=0;
var charLetters= ['A','R','I','E','L'];
var choice=[];

var settBoxes= function(){
    for(var i=0; i < 3; i++){
        box = document.createElement('DIV');
        box.style.height = height+'px';
        box.style.width = width+'px';
        box.className ='box';
        var random = Math.floor(Math.random()*charLetters.length);
        box.ineerHTML= '<p style="margin-top: '+height*0.25+'px; font-size: '+height*0.35+'px;">'+charLetters[random]+'</p>';
        height = height + 20;
        width = width + 20;
        widthAllBox = width + 128;

        box.addEventListener('click', function(){
            if(choice.length >= 2){
                clearItems();
        }

        if( !this.className.includes('show')){
                if(!this.className.includes('correct')){
                    this.className = this.className + 'show';
                    choice.push(this);   
                    if(choice.length == 2){
                        checkPlayer();
                    }
                }
        }
        else{
            clearItems();
            }
        });
        boxshow.appendChild(box);
}

var memoryGame = function(){
        var str1 = choice[0].innerHTML;
        var str2 = choice[1].innerHTML;
        var index=str1.indexOf('">');
        var slashIndex=str1.indexOf('</p');
        var fstr1=str1.substring(index+2,slashIndex);
        index=str2.indexOf('">');
        slashIndex=str2.indexOf('</p');
        var fstr2= str2.substring(index+2,slashIndex);

        if(fstr1 == fstr2)
            return true;
        return false;
    };

var clearItems=function(){
    for(var i=0; i<choice.length; i++){
        choice[i].className = choice[i].className.replace('show','');
    }
    choice = [];
}

var checkPlayer = function(){
    if(memoryGame()){
        for (var j = 0; j < choice.length; j++){
        choice[j].className = choice[j].className.replace('show','correct');
        }
    }
    else{
        setTimeout(function(){
            clearItems();
        }, 500);
    }

}
}
