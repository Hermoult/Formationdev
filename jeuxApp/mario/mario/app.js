window.onload = function()
{
    var canvas;
    var div;
    var contexte;
    var posiX=0;
    var posiY=420;

    var right = 39;
    var left = 37;
    var up = 38;
    var down = 40;

    init();
    mario(0,0);
    function init()
    {
        div = document.createElement('div');
        canvas = document.createElement('canvas');
        document.body.appendChild(canvas);
        canvas.width = 1000;
        canvas.height=500;
        canvas.style.backgroundColor="cyan";
        canvas.style.border="2px solid";
        contexte = canvas.getContext('2d');        

    }



    function mario(valeur,valeurY)
    {
        posiX+=valeur;
        posiY+=valeurY;
        block = contexte.clearRect(0,0,canvas.width,canvas.height);
        contexte.fillStyle="#D2A041";
        contexte.fillRect(posiX,posiY,50,60);
        contexte.fillStyle="#ff0000";
        contexte.fillRect(posiX,posiY-20,80,20);        
        contexte.fillStyle="green";
        contexte.fillRect(0,480,1000,20);
        platforme();

    }

    function movement(e)
    {
        
            
            if(e.keyCode==39)
            {
                if(posiX<900)
                {
                    
                    mario(50,0);
                }
            }
            if(e.keyCode==37)
            {
                if(posiX>0)
                {
                    
                    mario(-50,0);
                }
                
    
            }
            if(e.keyCode==38)
            {
                if(posiY>50)
                {
                    mario(0,-50);
                }
            }


            if(e.keyCode==40)
            {
                if(posiY<400)
                {
                    mario(0,50);
                }
            }
    }


    function platforme()
    {
        contexte.fillStyle="red";
        contexte.fillRect(250,300,100,20);
        contexte.fillStyle="green";
        contexte.fillRect(500,420,100,80);
        contexte.fillStyle="green";
        contexte.fillRect(485,390,130,30);
        contexte.fillStyle="red";
        contexte.fillRect(210,300,100,20);
        contexte.fillStyle="grey";
        contexte.fillRect(980,0,300,500);

    }
    window.addEventListener('keydown',movement);
}