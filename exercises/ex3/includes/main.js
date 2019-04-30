var navi = document.getElementById('nav');
var box = document.getElementById('blackBox')

var height = 80;
var witdh = 80;
var widthAllBox=0;

var boxes= function()
{
    for(i=0; i<3;i++)
    {
        box= document.createElement('DIV');
        box.className='box';
        box.style.height = height + 'px' ;
        box.style.width = width + 'px' ;
        box.ineerHTML= 'p style="margin-top: '+height*0.25+'px';
        height= height+20;
        width=witdh+20;
        widthAllBox=widthAllBox+128;



    }
    boxshow.appendChild(box);
}