let sa = ["1","2","3","4","5","6","7","8","9","0"]

function setup(){
  createCanvas(windowWidth,windowHeight)
  var cnv = createCanvas(windowWidth, windowHeight/1.25);
  var x = (windowWidth - width) / 2;
  var y = (windowHeight - height) / 2;
  cnv.position(x);

  textSize(windowWidth/70)
  fill("lime")
  frameRate(20)
}

function draw(){
  background("black")
  for (x=10;x < windowWidth;x+=40){
    for (y=35;y < windowHeight;y+=50){
      stafur = random(sa)
      text(sa[stafur],x,y)
    }
  }
}
