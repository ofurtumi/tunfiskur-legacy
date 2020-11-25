function setup() 
{
    createCanvas(windowWidth,windowHeight)
    u=0;
    noCursor()
    frameRate(15)
    yMove=0;
    look=0
    
}

function draw() 
{   
   background("black");

   noStroke()
    for (i=0;i<50;i++){
        fill(randomGaussian(i*30),randomGaussian(i*6-100),randomGaussian(40))
        circle(sin(i+u)*20+width/2,height/2+250-i*5,8)
        circle(cos(i+u)*20+width/2,height/2+250-i*5,8)
        circle(cos(i+u)*-i/2+width/2,height/2+300-i*4.6,8)
        circle(cos(i+u)*-i+width/2,height/2+250-i*4.6,8)


    for (x=1;x<20;x++){
        circle(sin(x+u*6)*30/x+width/2,cos(x+u*-5)*25/x+height/2-25,6)
        circle(cos(x+u)*20/x+width/2,cos(x+u*-6)*25/x+height/2,6)
        circle(cos(x+u)*40/x+width/2,cos(x+u*-6)*25/x+height/2,6)
    }


    for (y=0;y<7;y++){
        fill("white")
        circle(random(width),random(y*height),randomGaussian(3))
    }
    u++
   }   
}

