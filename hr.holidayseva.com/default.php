<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>SXC MDTS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
height:100vh;
display:flex;
align-items:center;
justify-content:center;
background:#f5f5f7;
font-family:-apple-system,BlinkMacSystemFont,"SF Pro Display","Helvetica Neue",Arial,sans-serif;
color:#1d1d1f;
}

.card{
text-align:center;
padding:60px;
border-radius:24px;

background:rgba(255,255,255,0.75);
backdrop-filter:blur(24px);

border:1px solid rgba(0,0,0,0.05);

box-shadow:
0 10px 30px rgba(0,0,0,0.05),
0 2px 10px rgba(0,0,0,0.04);
}

h1{
font-size:30px;
font-weight:600;
letter-spacing:-0.02em;
margin-top:30px;
margin-bottom:10px;
}

p{
color:#6e6e73;
font-size:16px;
margin-bottom:30px;
}

.btn{
display:inline-block;
padding:12px 26px;
background:#1d1d1f;
color:white;
text-decoration:none;
border-radius:12px;
font-size:15px;
font-weight:500;
transition:all .2s ease;
}

.btn:hover{
background:#2f2f31;
transform:translateY(-1px);
}

/* circle */

.circle{
position:relative;
width:120px;
height:120px;
margin:auto;
}

svg{
transform:rotate(-90deg);
}

circle{
fill:none;
stroke-width:8;
stroke-linecap:round;
}

.bg{
stroke:#e5e5ea;
}

.progress{
stroke:#1d1d1f;
stroke-dasharray:339;
stroke-dashoffset:0;
transition:stroke-dashoffset 1s linear;
}

.time{
position:absolute;
top:50%;
left:50%;
transform:translate(-50%,-50%);
font-size:26px;
font-weight:600;
}

.meta{
margin-top:20px;
font-size:13px;
color:#8e8e93;
}

</style>
</head>

<body>

<div class="card">

<div class="circle">

<svg width="120" height="120">
<circle class="bg" cx="60" cy="60" r="54"></circle>
<circle class="progress" cx="60" cy="60" r="54"></circle>
</svg>

<div class="time" id="count">5</div>

</div>

<h1>Page moved</h1>
<p>This page has moved to a new location.</p>

<a href="https://hr.suchibrata.in" class="btn">
Visit new page
</a>

<div class="meta">
Redirecting automatically
</div>

</div>

<script>

let total = 5;
let time = total;

const count = document.getElementById("count");
const progress = document.querySelector(".progress");

const circumference = 339;

progress.style.strokeDasharray = circumference;
progress.style.strokeDashoffset = 0;

let interval = setInterval(()=>{

time--;
count.textContent = time;

let offset = circumference * (1 - time / total);
progress.style.strokeDashoffset = offset;

if(time <= 0){
clearInterval(interval);
window.location.href="https://hr.suchibrata.in";
}

},1000);

</script>

</body>
</html>