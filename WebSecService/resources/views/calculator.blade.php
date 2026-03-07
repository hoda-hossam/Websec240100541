<!DOCTYPE html>
<html>
<head>
<title>Calculator</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

<div class="card">

<div class="card-header">
Simple Calculator
</div>

<div class="card-body">

<input type="number" id="num1" class="form-control mb-2" placeholder="Number 1">

<input type="number" id="num2" class="form-control mb-3" placeholder="Number 2">

<button class="btn btn-primary" onclick="add()">+</button>
<button class="btn btn-primary" onclick="sub()">-</button>
<button class="btn btn-primary" onclick="mul()">*</button>
<button class="btn btn-primary" onclick="div()">/</button>

<h3 class="mt-3" id="result"></h3>

</div>
</div>

</div>

<script>

function add(){
let a=parseFloat(document.getElementById("num1").value)
let b=parseFloat(document.getElementById("num2").value)
document.getElementById("result").innerHTML=a+b
}

function sub(){
let a=parseFloat(document.getElementById("num1").value)
let b=parseFloat(document.getElementById("num2").value)
document.getElementById("result").innerHTML=a-b
}

function mul(){
let a=parseFloat(document.getElementById("num1").value)
let b=parseFloat(document.getElementById("num2").value)
document.getElementById("result").innerHTML=a*b
}

function div(){
let a=parseFloat(document.getElementById("num1").value)
let b=parseFloat(document.getElementById("num2").value)
document.getElementById("result").innerHTML=a/b
}

</script>

</body>
</html>