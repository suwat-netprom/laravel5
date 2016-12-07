<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>เกี่ยวกับเรา</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>เกี่ยวกับเรา</h1>
	<p>
		<ul>
			@foreach($info as $value)
				<li>{{$value}}</li>
			@endforeach
		</ul>
	</p>
</body>
</html>