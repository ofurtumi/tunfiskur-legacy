
function setup() {
  createCanvas(windowWidth,windowHeight,WEBGL);
}

function draw() {
  background("black");
  stroke("green")
  noFill();
  strokeWeight(3)
  for (i = 0;i < 5;i++){
    rotateX(frameCount * 0.01);
    rotateY(frameCount * 0.01);
    box(50);
  }
  box(100);
  box(150);
  strokeWeight(1);
  sphere(25);
}