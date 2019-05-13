var boxes = document.getElementById('creatBoxsJS');

var height = 80;
var width = 80;
var startHeight = 995;
var startWidth = 0;
var charLetters = ['A','R','I','E','L'];
var choice = [];

var settBoxes= function()
{

    for(var i = 0; i < 3; i++)
    {
        box = document.createElement('DIV');
        box.style.height = height+'px';
        box.style.width = width+'px';
        box.className ='box';
        var random = Math.floor(Math.random()*charLetters.length);
        box.innerHTML= '<p style="margin-top: '+height*0.25+'px; font-size: '+height*0.35+'px;">'+charLetters[random]+'</p>';
        height = height + 20;
        width = width + 20;
        widthAllBox = width + 128;

        box.addEventListener('click', function()
        {
            if(choice.length >= 2){
                clearLetters();
        }
        
        if( !this.className.includes('show'))
        {
            if(!this.className.includes('correct'))
            {
                    this.className = this.className + 'show';
                    choice.push(this);   
                    if(choice.length == 2)
                        checkPlayer();
                
                }
        }
        else
            clearLetters();
        });
        boxes.appendChild(box);
    }

var memoryGame = function()
{
        var letter1 = choice[0].innerHTML;
        var letter2 = choice[1].innerHTML;
        
        var index=letter1.indexOf('">');
        var cutPar=letter1.indexOf('</p');
        var str1=letter1.substring(index+2,cutPar);
        index=letter2.indexOf('">');
        cutPar=letter2.indexOf('</p');
        var str2=letter2.substring(index+2,cutPar);

        if(str1 == str2)
            return true;
        return false;
};

var checkPlayer = function()
{
    if(memoryGame()){
        for (var i = 0; i < choice.length; i++)
        {
        choice[i].className = choice[i].className.replace('show','correct');  //check if the letters are the same
        }
    }
    else
    {
        setTimeout(function()
        { 
            clearLetters();   //timer 0.5sec 
        }, 500);
    }

}

var clearLetters = function()
{
    for( var i=0; i<choice.length; i++){
        choice[i].className = choice[i].className.replace('show','');
    }
    choice = [];
}
}
