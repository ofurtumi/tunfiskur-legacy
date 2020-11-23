function setup() 
{
    var cnv = createCanvas(500, 500);
    var x = (windowWidth - width) / 2;
    var y = (windowHeight - height) / 2;
    cnv.position(x, y);
    u=0;

    frameRate(20)
}

function draw() 
{   /*
    for (let x = 0; x < 510; x += 10){
        b = random(0,255);
        g = random(0,255);

        noFill();
        strokeWeight(10)
        for (let i = 1; i < 10; i++){
            stroke(i*50,100/i,100+10*i)
            circle(250,250,i*100)
        }

        strokeWeight(0);

        fill(0,g,b);
        circle(x,x,10);
        circle(width - x,x,10);
        
        
    }
    */
    /*noStroke()
    for(x=0; x<width; x+=5){
        for(y=0; y<height; y+=5){
     
        fill(255, random(y),0);        
        rect(x,y,3,3);

        }
   }*/
   background("black");

   noStroke()
   fill("white")
    for (i=0;i<50;i++){
        
        fill(random(i*30),random(i*5-20),0)
        circle(sin(i+u)*20+250,width-i*5,8)
        fill(random(i*30),random(i*5-20),0)
        circle(sin(i+u)*30+250,width-i*5,8)
        fill(random(i*30),30,0)
        circle(sin(i+u)*5+250,width-i*4,4)
       

    u++
       //circle(i*5,20*-sin(i)+250,4)
   }
    
    
}
