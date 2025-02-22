<canvas id="myCanvas"></canvas>
<style>canvas { border: 1px solid black }</style>

  const canvas = document.getElementById("myCanvas");
  const ctx = canvas.getContext("2d");
  ctx.fillStyle = "yellow";
  ctx.fillRect(20, 20, 50, 50);
  ctx.fillRect(80, 20, 50, 50);
  ctx.fillStyle = "red";
  ctx.fillRect(50, 80, 50, 50);
