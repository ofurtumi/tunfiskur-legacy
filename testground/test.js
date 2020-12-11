let sa = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","1","2","3","4","5","6","7","8","9","0"]

function setup(){
  createCanvas(windowWidth,windowHeight)
  textSize(windowWidth/55)
  fill("lime")
  frameRate(20)
}

function draw(){
  background("black")
  for (x=0;x < windowWidth;x+=30){
    for (y=0;y < windowHeight;y+=40){
      stafur = random(sa)
      text(sa[stafur],x,y)
    }
  }
}
