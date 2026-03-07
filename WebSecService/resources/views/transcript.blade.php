<!DOCTYPE html>
<html>
<head>
<title>Transcript</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
@include('layouts.menu')
<div class="container mt-4">

<div class="card">
<div class="card-header">Student Transcript</div>

<div class="card-body">

<table class="table table-bordered">

<tr>
<th>Course Code</th>
<th>Course Title</th>
<th>Grade</th>
</tr>

@foreach($courses as $course)

<tr>
<td>{{$course['code']}}</td>
<td>{{$course['title']}}</td>
<td>{{$course['grade']}}</td>
</tr>

@endforeach

</table>

</div>
</div>

</div>

</body>
</html>