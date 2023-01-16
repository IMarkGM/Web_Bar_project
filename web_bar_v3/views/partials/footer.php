<div class="row-0" style="height=200px;">
    <div>
    <canvas id="canvas" />
    </div>
</div>

<script>
    //essential variables
var canvas = document.getElementById("canvas"),
    ctx = canvas.getContext("2d"),
    aniId;
//parameters
var w = canvas.width = window.innerWidth-230,
    h = canvas.height = window.innerHeight,
    particles = [], //particle array
    level = 30,
    fill = false,
    color = "#fff",
    c;
//function to start or restart the animation
function init(){
  c = 0;
  aniId = window.requestAnimationFrame(draw);
}
//function that draws into the canvas in a loop
function draw(){
  ctx.clearRect(0,0,w,h);
  ctx.fillStyle = color;
  ctx.strokeStyle = color;
  
  //draw the liquid
  ctx.beginPath();
  ctx.moveTo(w,h-(h-100)*level/100-50);
  ctx.lineTo(w,h);
  ctx.lineTo(0,h);
  ctx.lineTo(0,h-(h-100)*level/100-50);
  var temp = (300*Math.sin(c*1/50));
  ctx.bezierCurveTo((w/3)   ,h-(h-100)*level/100-50-temp,
              (2*w/3) ,h-(h-100)*level/100-50+temp,
              w     ,h-(h-100)*level/100-50);
  ctx.fill();
  
  update();
  aniId = window.requestAnimationFrame(draw);
}
//function that updates variables
function update() {
  c++;
  if(100*Math.PI <= c)
    c = 0;
}

//update canvas size when resizing the window
window.addEventListener('resize', function() {
  //update the size
  w = canvas.width = window.innerWidth-230;
  h = canvas.height = window.innerHeight;
  //stop the animation befor restarting it
  window.cancelAnimationFrame(aniId);
  init();
});
//start animation
init();
</script>