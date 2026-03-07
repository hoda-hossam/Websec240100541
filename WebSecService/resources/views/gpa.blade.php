<!DOCTYPE html>
<html>
<head>
<title>GPA Simulator</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

<div class="card">

<div class="card-header">
GPA Simulator
</div>

<div class="card-body">

<table class="table table-bordered">

<tr>
<th>Course</th>
<th>Credit Hours</th>
<th>Grade</th>
</tr>

@foreach($courses as $c)

<tr>

<td>{{$c['title']}}</td>

<td>{{$c['hours']}}</td>

<td>
<input type="number" class="grade form-control">
</td>

</tr>

@endforeach

</table>

<button class="btn btn-success" onclick="calcGPA()">Calculate GPA</button>

<h3 id="gpa"></h3>

</div>
</div>

</div>

<script>

function calcGPA(){

let grades=document.querySelectorAll(".grade")

let sum=0
let count=0

grades.forEach(function(g){

sum+=parseFloat(g.value)

count++

})

document.getElementById("gpa").innerHTML="GPA = "+(sum/count).toFixed(2)

}

</script>

</body>
</html>