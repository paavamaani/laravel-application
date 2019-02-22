<!DOCTYPE html>

<html>

<head>

</head>

<body>

<header style="text-align: center;">

	<h1> List of Courses </h1>

</header>


	<ul>

		<h3> Code           Name          Duration         Price </h3> <br>
		
		@foreach($list as $l)
			<li> {{ $l->coursecode }}, {{ $l->coursename }}, {{ $l->courseduration }}, {{ $l->price }} </li> <br>
		@endforeach

	</ul>

<footer style="text-align: center;">

	<p> This is the footer </p>

</footer>

</body>

</html>