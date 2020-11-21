function setup() {
  createCanvas(windowWidth, windowHeight);
  xCenter = windowWidth / 2;
  yCenter = windowHeight / 2;
  haka = 225;
  augu = 1.5;
  nefOffset = 7;
  s1 = createAudio("assets/chant2.mp3")
  augnlitur = "white"
  bColor = "darkblue"
}

function draw() {
  background(bColor);


  //hausinn
  fill(255, 179, 102);
  stroke(0,0,0)
  strokeWeight(3);
  beginShape();
  curveVertex(xCenter-150,yCenter-225);
  curveVertex(xCenter-200,yCenter-75);
  curveVertex(xCenter-150,yCenter+125);
  curveVertex(xCenter-50,yCenter+haka);
  curveVertex(xCenter+50,yCenter+haka);
  curveVertex(xCenter+150,yCenter+125);
  curveVertex(xCenter+200,yCenter-75);
  curveVertex(xCenter+150,yCenter-225);
  curveVertex(xCenter-150,yCenter-225);
  curveVertex(xCenter-200,yCenter-75);
  curveVertex(xCenter-200,yCenter+125);
  
  endShape();


  //augahvíta
  strokeWeight(4);
  stroke(255, 150, 50);
  fill(augnlitur);
  ellipse(xCenter-80,yCenter-75,60*augu,40*augu);
  ellipse(xCenter+80,yCenter-75,60*augu,40*augu);


  //augasteinar
  fill("black");
  strokeWeight(0);
  ellipse(xCenter-80,yCenter-75,30*augu*0.75);
  ellipse(xCenter+80,yCenter-75,30*augu*0.75)


  //hár
  fill(80,25,0)
  stroke(0,0,0)
  strokeWeight(3)
  beginShape()
  vertex(xCenter,yCenter-125)
  vertex(xCenter-50,yCenter-110)
  vertex(xCenter-130,yCenter-125)
  vertex(xCenter-150,yCenter-15)
  vertex(xCenter-220,yCenter+25)
  vertex(xCenter-220,yCenter+25)
  vertex(xCenter-210,yCenter-225)
  vertex(xCenter-150,yCenter-275)
  vertex(xCenter,yCenter-245)
  vertex(xCenter+150,yCenter-275)
  vertex(xCenter+210,yCenter-225)
  vertex(xCenter+220,yCenter+25)
  vertex(xCenter+150,yCenter-15)
  vertex(xCenter+130,yCenter-115)
  vertex(xCenter+50,yCenter-110)
  vertex(xCenter,yCenter-125)
  endShape()


  //nef
  noFill();
  stroke(0)
  strokeWeight(2)
  beginShape();
  vertex(xCenter-25,yCenter+75);
  vertex(xCenter-40,yCenter+75);
  vertex(xCenter-45,yCenter+85);
  vertex(xCenter-30,yCenter+95);
  endShape();

  beginShape();
  vertex(xCenter-30,yCenter+90)
  vertex(xCenter-25,yCenter+87.5)
  vertex(xCenter-20,yCenter+95)
  vertex(xCenter-10,yCenter+100)
  //
  vertex(xCenter+10,yCenter+100)
  vertex(xCenter+20,yCenter+95)
  vertex(xCenter+25,yCenter+87.5)
  vertex(xCenter+30,yCenter+90)
  endShape();

  beginShape()
  vertex(xCenter+25,yCenter+75);
  vertex(xCenter+40,yCenter+75);
  vertex(xCenter+45,yCenter+85);
  vertex(xCenter+30,yCenter+95);
  endShape()


  

  if (mouseIsPressed){
    s1.play();
    //varir
    fill(255,0,0)
    stroke(0,0,0)
    strokeWeight(2)
    ellipse(xCenter,yCenter+200,100,55)
    augnlitur = "black"
    haka = 255;
    bColor = "darkred"
    
  }
  else{
    s1.stop();
    haka = 225;
    //varir
    strokeWeight(4)
    stroke(0,0,0)
    line(xCenter-30,yCenter+200,xCenter+30,yCenter+200)
    augnlitur = "white"
    bColor = "darkblue"
  }
}
