function setup() 
{
    createCanvas(windowWidth,windowHeight)
    //var cnv = createCanvas(500, 500);
    //var x = (windowWidth - width) / 2;
    //var y = (windowHeight - height) / 2;
    //cnv.position(x, y);
    u=0;
    noCursor()
    frameRate(20)
}

function draw() 
{   
   background("black");

   noStroke()
    for (i=0;i<50;i++){
        
        fill(random(i*30),random(i*6-100),30)
        circle(sin(i+u)*20+mouseX,mouseY+300-i*5,8)
        circle(cos(i+u)*20+mouseX,mouseY+300-i*5,8)
        circle(cos(i+u)*-i/2+mouseX,mouseY+250-i*4.6,8)
        circle(cos(i+u)*-i+mouseX,mouseY+250-i*4.6,8)


    for (x=1;x<20;x++){
        circle(sin(x+u*6)*30/x+mouseX,cos(x+u*-5)*25/x+mouseY,6)
        circle(cos(x+u)*20/x+mouseX,cos(x+u*-6)*25/x+mouseY+25,6)
        circle(cos(x+u)*40/x+mouseX,cos(x+u*-6)*25/x+mouseY+25,6)
    }
    u++
   }
    
    
}
