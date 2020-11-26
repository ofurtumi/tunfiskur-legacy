let ele;

function setup() 
{
    createCanvas(windowWidth,windowHeight)
    noCursor()
    frameRate(15)    
    noStroke()
    ele = createAudio("../assets/loftsteinn.mp3")
    ele.play(true)
    ele.loop(true)
}

let u=0
let vol=0

function draw() 
{   
   background("black");

   for (i=0;i<50;i++){                                                                          //ytri for loopan, heldur utan um halan og sér um að innri loopurnar geri sitt nógu oft
        fill(randomGaussian(i*30),randomGaussian(i*6-100),randomGaussian(40))                   //velur lit fyrir hverja doppu í halanum og hvert loop í innri loopunum skref í ytri loopunni
                                                                                                //eftir því sem fleiri endurtekningar af ytri loopunni verða litirnir sterkari þar sem þeir eru margfaldaðir með i
        circle(sin(i+u)*20+width/2,height/2+250-i*5,randomGaussian(8))                          //hali 1
        circle(cos(i+u)*20+width/2,height/2+250-i*5,randomGaussian(8))                          //hali 2
        circle(cos(i+u)*-i/2+width/2,height/2+300-i*4.6,randomGaussian(8))                      //hali 3
        circle(cos(i+u)*-i+width/2,height/2+250-i*4.6,randomGaussian(8))                        //hali 4

        for (x=1;x<5;x++){                                                                      //fyrri innri loopa, sér um eldboltann sjálfann
            circle(sin(x+u*6)*30/x+width/2,cos(x+u*-5)*25/x+height/2-25,randomGaussian(6))      //innsti boltinn
            circle(cos(x+u)*20/x+width/2,cos(x+u*-6)*25/x+height/2,randomGaussian(6))           //ytri bolti 1
            circle(cos(x+u)*40/x+width/2,cos(x+u*-6)*25/x+height/2,randomGaussian(6))           //ytri bolti 2
        }
        
        u++                                                                                     //u sér um hreyfingu á bæði halnum og boltanum, ef u er tekið í burtu er hægt að sjá hvað loopurnar teikna á hverjum ramma

                                                                                                
        fill("white")                                                                           //þeirra lit er ekki stjórnað af ytri loopunni heldur eru þær allar hvíta
        circle(random(width),random(height),randomGaussian(3))                                  //þrátt fyrir að þær líti út fyrir að hreifast að ofan og niður þá eru þær bara að velja random staðsetningu innan skjásins
    }
}

