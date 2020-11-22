function setup() 
{
    createCanvas(500, 500);
    background("lightgrey");
}

function draw() 
{
  strokeWeight(0)
  fill("red")
  rect(-10,-10,230,260)
  
  fill("lightgray")
  rect(220,-10,280,260)

  fill("yellow")
  rect(220,480,125,20)

  fill("black")
  rect(345,480,115,20)

  fill("blue")
  rect(460,250,40,110)

  strokeWeight(10)
  line(220,0,220,500)
  line(0,250,500,250)
  line(220,480,460,480)
  line(460,250,460,500)
  line(460,360,500,360)

}
